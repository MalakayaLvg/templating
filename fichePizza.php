<?php
require_once "dataBase/pizzaDataBase.php";


foreach ($pizzas as $pizza){

    if($pizza['id'] == $_GET['idPizza']){


        ob_start();
        $productSelect = $pizza;
//        var_dump($pizzaSelect);

        require_once "template/productDetail.php";
        $content = ob_get_clean();

        require_once "template/base.html.php";


    }
}


