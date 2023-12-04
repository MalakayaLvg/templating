<div class="row">

    <?php foreach ($sushis as $sushi) : ?>

        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $sushi['name'] ?></h5>
                    <p class="card-text"><?= $sushi['type'] ?></p>
                    <p class="card-text"><?= $sushi['fish'] ?></p>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

</div>
