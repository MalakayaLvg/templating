<?php

function afficher ($templateName,$dataBase){

    ob_start();

    require_once "template/$templateName.php";


    $content = ob_get_clean();
    require_once "template/base.html.php";
}

