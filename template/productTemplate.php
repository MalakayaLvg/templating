
<div class="row">

    <?php foreach ($dataBase as $data) : ?>

        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="<?= $data['image'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['name'] ?></h5>
                    <p class="card-text"><?= $data['description'] ?></p>
                    <form action="fiche<?=$data['type']?>.php" method="get">
                        <input type="hidden" name="id<?=$data['type']?>" value=" <?= $data['id'] ?>">
                        <button type="submit" class="btn btn-secondary">GO</button>
                    </form>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

</div>
