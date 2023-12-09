<?php

require_once "debugmode.php";
require_once "logique/logique.php";

if(isset($_POST['name']) && isset($_POST['type']) && isset($_POST['fish']){

    $name = $_POST['name'];
    $type = $_POST['type'];
    $fish = $_POST['fish'];

    $query = $pdo->prepare("INSERT INTO sushis SET name = :name, type = :type, fish = :fish");

    $query->execute([
        "name"=>$name,
        "type"=>$type,
        "fish"=>$fish
    ]);

    header("Location: tousLesSushis.php");

}

afficher("sushi/create", ["pageTitle"=>"nouveau sushi"]);


