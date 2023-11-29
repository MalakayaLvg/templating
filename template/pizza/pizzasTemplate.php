<h2>Nos <?= $dataBaseName ?></h2>
<div class="row">

    <?php foreach ($dataBase as $data) : ?>

        <div class="col-3">
            <p><strong><?= $data['name'] ?></strong></p>
            <div style="background-image: url('<?= $data['image'] ?>');height: 300px;width: 300px"></div>
            <p><?= $data['description'] ?></p>
            <form action="" method="post">
                <input type="hidden" name="pizzaId" value="<?= $data['id'] ?>">
                <button type="submit" class="btn btn-secondary">GO</button>
            </form>

        </div>

    <?php endforeach; ?>

</div>
