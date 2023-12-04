<?php
require_once "dataBase/quicheDataBase.php";
require_once "logique/logique.php";


foreach ($quiches as $quiche){

    if($quiche['id'] == $_GET['idQuiche']){

        $quicheSelect=$quiche;

        afficher("quiche/uneQuiche",["quiche"=>$quicheSelect]);


    }
}
