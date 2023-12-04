<?php

// dataBase Connection

$dbHost = "localhost";
$dbName = "nourriture";
$username = "root";
$password = "MSqlEl!poman02";

$pdo = new PDO("mysql:host=$dbHost;dbname=$dbName",$username,$password,
[
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
]);


// fonction afficher
function afficher ($templateName,$dataBase){

    ob_start();
    extract($dataBase);

    require_once "template/$templateName.html.php";


    $content = ob_get_clean();
    require_once "template/base.html.php";
}

