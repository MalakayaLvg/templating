<?php

require_once "debugmode.php";
require_once "logique/logique.php";


$query = $pdo->prepare("SELECT * FROM sushis");
$query->execute();
$sushis = $query->fetchAll();

var_dump($sushis);

//afficher("sushi/index",["sushis"=>$sushis]);