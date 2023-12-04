<?php
require_once "dataBase/sandwichDataBase.php";
require_once "logique/logique.php";


foreach ($sandwichs as $sandwich){

    if($sandwich['id'] == $_GET['idSandwich']){

        $sandwichSelect=$sandwich;

        afficher("sandwich/unSandwich",["sandwich"=>$sandwichSelect]);


    }
}