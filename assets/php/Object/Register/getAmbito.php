<?php
    //Mudar para o Bridge ou o Facade Que Interage com isto Provavelmente um Register.php
    require($_SERVER["CONTEXT_DOCUMENT_ROOT"] . "/ProjetoPSI/assets/php/Facade/Scope.php");
    $ambito = new Scope();

    echo json_encode($ambito->SelectAllBP(),JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
?>