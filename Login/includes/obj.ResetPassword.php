<?php
require_once '../../assets/php/Facade/User.php';
$User = new USER('iIdUser');

//if (empty($_GET['id']) && empty($_GET['code'])) 
//    $User->redirect('index.php');
if ($_GET['id'] == "")
    header("location: ../index.php");
if($_GET['code'] == "")
    header("location: ../index.php");

    if (isset($_GET['id']) && isset($_GET['code']))
    {
        $DecodedId = base64_decode($_GET['id']);
        $TokenCode = $_GET['code'];

        $arrayWhere = array(
            array("iIdUser","=","AND"),
            array("vcTokenCode","=",null)
         );

        $Query = $User->Select().$User->Where($arrayWhere, false);
        $Result = $User->QueryExecute($Query, [$DecodedId, $TokenCode], 2);
        //Lê o obj e preenche as variaveis da classe
        $User->readObject($Result["iIdUser"]);

        if (!is_null($Result["iIdUser"])) 
        {
            if (isset($_POST['btn-reset-pass'])) 
            {
                $Password  = $_POST['pass'];
                $SPassword= $_POST['confirmPass'];

                if ($SPassword !== $Password)
                {
                    $msg = "<div class='alert alert-block'>
                            <button class='close' data-dismiss='alert'>&times;</button>
                            <strong>Sorry!</strong>  Password Doesn't match.</div>";
                } else 
                {
                    $User->setVcPassword($SPassword);
                    $User->UpdateObject();

                    $msg = "<div class='alert alert-success'>
                            <button class='close' data-dismiss='alert'>&times;</button>
                            Password Changed.</div>";

                    $User->setvcTokenCode(NULL);
                    $User->UpdateObject();

                    header("refresh:1;../index.php");
                }
            }
        } 
        else 
            exit;
      }
?>