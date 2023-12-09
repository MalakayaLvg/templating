<form action="" method="post" class="form-control">

    <input  value="<?= $sushi['name'] ?>" placeholder="name" type="text" name="name" class="form-control">
    <input  value="<?= $sushi['type'] ?>" placeholder="type" type="text" name="type" class="form-control">
    <input  value="<?= $sushi['fish'] ?>" placeholder="fish" type="text" name="fish" class="form-control">
    <button name="id" value="<?= $sushi['id'] ?>" class="btn btn-primary" type="submit">Envoyer</button>

</form>
