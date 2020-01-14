<?php
    require_once($_SERVER["DOCUMENT_ROOT"] . "/ProjetoPSI/assets/php/Object/verifyLogin.php");
    require_once($_SERVER["DOCUMENT_ROOT"] . "/ProjetoPSI/assets/php/Object/obj_verifyRoleAdmin.php");
    require_once($_SERVER["DOCUMENT_ROOT"] . "/ProjetoPSI/assets/php/Facade/Attachment.php");

    $work = new Attachment();
    $work->readObject($_GET["iIdAttachment"]);
        $destination = "./uploads/" . $work->getVcTitle(); 
        $physicalFile = fopen($destination, "w");
        fwrite($physicalFile, base64_decode($work->getBlAttachment()));
        fclose($physicalFile);
        
        if (file_exists($destination)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($destination).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($destination));
            readfile($destination);
            unlink($destination);
            exit;
        }
        exit;