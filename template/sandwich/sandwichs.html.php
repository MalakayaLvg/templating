<div class="row">

    <?php foreach ($sandwichs as $sandwich) : ?>

        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="<?= $sandwich['image'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $sandwich['name'] ?></h5>
                    <p class="card-text"><?= $sandwich['description'] ?></p>
                    <form action="fiche<?=$sandwich['type']?>.php" method="get">
                        <input type="hidden" name="id<?=$sandwich['type']?>" value=" <?= $sandwich['id'] ?>">
                        <button type="submit" class="btn btn-secondary">GO</button>
                    </form>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

</div>
