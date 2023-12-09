<div class="row">

    <?php foreach ($sushis as $sushi) : ?>

        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $sushi['name'] ?></h5>
                    <p class="card-text"><?= $sushi['type'] ?></p>
                    <p class="card-text"><?= $sushi['fish'] ?></p>
                    <a href="sushi.php?id=<?= $sushi['id'] ?>" class="btn btn-success">show more</a>
                    <a href="deleteSushi.php?id=<?= $sushi['id'] ?>" class="btn btn-danger">delete</a>
                    <a href="editSushi.php?id=<?= $sushi['id'] ?>" class="btn btn-warning">edit</a>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

</div>
