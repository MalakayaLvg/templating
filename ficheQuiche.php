<?php
require_once "dataBase/quicheDataBase.php";


foreach ($quiches as $quiche){

    if($quiche['id'] == $_GET['idQuiche']){


        ob_start();
        $productSelect = $quiche;
//        var_dump($productSelect);

        require_once "template/productDetail.php";
        $content = ob_get_clean();

        require_once "template/base.html.php";


    }
}
