<?php

require_once "debugmode.php";

require_once "dataBase/sandwichDataBase.php";
require_once "logique/logique.php";

afficher("sandwich/sandwichs",["sandwichs"=>$sandwichs]);
