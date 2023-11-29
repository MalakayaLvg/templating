<?php
$tab = array("nom"=>"jean","b"=>"alex","c"=>"michel");
extract($tab);
//var_dump($tab);
//echo "\$nom = $nom";

$pizzas = [
    [
        "name"=>"reine",
        "description"=>"c'est la reine",
        "id"=>"1"
    ],
    [
        "name"=>"margarita",
        "description"=>"à ne pas confondre avec la fleur",
        "id"=>"2"
    ]
];


function render($templateName,$pizzas)
{
    ob_start()
    ?>

    <div class="row">



    <?php
    foreach ($pizzas as $pizza) : ?>
        <div class="col-3 border border-dark">
            <p><strong><?= $pizza['name'] ?></strong></p>
            <p><?= $pizza['description'] ?></strong></p>
        </div>

    <?php endforeach; ?>

    </div>

    <?php
    $content = ob_get_clean();
    require_once "template/base.html.php";

}

render("pizzas",$pizzas);

?>


