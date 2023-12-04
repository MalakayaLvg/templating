<?php
require_once "dataBase/pizzaDataBase.php";
require_once "logique/logique.php";


foreach ($pizzas as $pizza){

    if($pizza['id'] == $_GET['idPizza']){

        $pizzaSelect=$pizza;

        afficher("pizza/unePizza",["pizza"=>$pizzaSelect]);


    }
}




