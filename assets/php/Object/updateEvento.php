<?php
    require($_SERVER["DOCUMENT_ROOT"] . "/ProjetoPSI/assets/php/Facade/Event.php");
    $event = new Event();
    $event->readObject("0");
    $event->setVcTitle($_POST["vcTitle"]);
    $event->setVcLocal($_POST["vcLocal"]);
    $event->setDtIniEvent($_POST["dtIniEvent"]);
    $event->setDtEndEvent($_POST["dtEndEvent"]);
    $event->setDtIniSubscription($_POST["dtIniSubscription"]);
    $event->setDtEndSubscription($_POST["dtEndSubscription"]);
    $event->setDtIniSubmition($_POST["dtIniSubmition"]);
    $event->setDtEndSubmition($_POST["dtEndSubmition"]);
    $event->setDtIniEvaluation($_POST["dtIniEvaluation"]);
    $event->setDtEndEvaluation($_POST["dtEndEvaluation"]);
    $event->setDtIniFinalSubmission($_POST["dtIniFinalSubmission"]);
    $event->setDtEndFinalSubmission($_POST["dtEndFinalSubmission"]);
    $event->setDtResults($_POST["dtResults"]);
    $event->setVcDescription($_POST["vcDescription"]);
    $event->setVcAbout($_POST["vcAbout"]);
    $event->UpdateObject();
    header("location: " .  $_SERVER["DOCUMENT_NAME"] . "/ProjetoPSI/Dashboard/pages/evento.php");
?>