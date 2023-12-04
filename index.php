<?php

echo "index";


require_once "dataBase/pizzaDataBase.php";
require_once "dataBase/sandwichDataBase.php";
require_once "logique/logique.php";

afficher("pizza/pizzas",["pizzas"=>$pizzas]);


