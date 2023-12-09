<?php
require_once "logique/logique.php";
if(isset($_POST['name']) && isset($_POST['type']) && isset($_POST['fish']) && isset($_POST['id'])){

    $name = $_POST['name'];
    $type = $_POST['type'];
    $fish = $_POST['fish'];
    $id = $_POST['id'];

    $query = $pdo->prepare("UPDATE sushis SET name= :name, type =:type, fish = :fish WHERE id = :id");

    $query->execute([
        "name"=>$name,
        "type"=>$type,
        "fish"=>$fish,
        "id"=>$id
    ]);

    header("Location: tousLesSushis.php");
}

$id = $_GET['id'];

$query = $pdo->prepare("SELECT * FROM sushis WHERE id = :id");

$query->execute([
    "id"=>$id
]);

$sushi = $query->fetch();

afficher('sushi/edit',["sushi"=>$sushi,"pageTitle"=>$sushi['fish']]);