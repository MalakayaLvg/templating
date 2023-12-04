
<div class="row">

    <?php foreach ($pizzas as $pizza) : ?>

        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="<?= $pizza['image'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $pizza['name'] ?></h5>
                    <p class="card-text"><?= $pizza['description'] ?></p>
                    <form action="fiche<?=$pizza['type']?>.php" method="get">
                        <input type="hidden" name="id<?=$pizza['type']?>" value=" <?= $pizza['id'] ?>">
                        <button type="submit" class="btn btn-secondary">GO</button>
                    </form>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

</div>
