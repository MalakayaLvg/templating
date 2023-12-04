<?php require_once "logique/logique.php";

$query = $pdo->query("SELECT * FROM sushis");
$sushis = $query->fetchAll();

afficher("sushi/index",["sushis"=>$sushis]);


