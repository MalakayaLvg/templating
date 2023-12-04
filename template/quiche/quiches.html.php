<div class="row">

    <?php foreach ($quiches as $quiche) : ?>

        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="<?= $quiche['image'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $quiche['name'] ?></h5>
                    <p class="card-text"><?= $quiche['description'] ?></p>
                    <form action="fiche<?=$quiche['type']?>.php" method="get">
                        <input type="hidden" name="id<?=$quiche['type']?>" value=" <?= $quiche['id'] ?>">
                        <button type="submit" class="btn btn-secondary">GO</button>
                    </form>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

</div>

