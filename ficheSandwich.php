<?php
require_once "dataBase/sandwichDataBase.php";


foreach ($sandwichs as $sandwich){

    if($sandwich['id'] == $_GET['idSandwich']){


        ob_start();
        $productSelect = $sandwich;
//        var_dump($productSelect);

        require_once "template/productDetail.php";
        $content = ob_get_clean();

        require_once "template/base.html.php";


    }
}