<?php
  session_start();
  require_once("../assets/php/Proprieties/ConfigDB.php");

  if (isset($_POST["login_button"]))
  {
    $username = trim($_POST['username']);
    $userpassword = trim($_POST['password']);
    try 
    {
      $stmt = $conn->prepare("SELECT * FROM tb_user WHERE vcUserName=:username");
      $stmt->execute(array(":username" => $username));
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      $count = $stmt->rowCount();

      if ($row['vcPassword'] == hash("sha512", $userpassword . "_" . $row['dtBirth'])) 
      {
        $msg = "ok";
        echo json_encode(array("msg" => $msg)); // Sucesso na Autenticação
        $_SESSION['user_session'] = $row['iIdUser'];
      } 
      else
      {
        $msg = "Utilizador ou palavra-passe estão errados";
        echo json_encode(array("msg" => $msg)); // Falha na Autenticação
      }
    } 
    catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
?>