<?php

function afficher ($dataBaseName,$dataBase){

    ob_start();

    require_once "template/pizza/pizzasTemplate.php";


    $content = ob_get_clean();
    require_once "template/base.html.php";
}