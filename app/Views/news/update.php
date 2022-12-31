<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<form action="/news/update/<?= esc($news['slug']) ?>" method="post">
    <?= csrf_field() ?>

    <p><label for="title">Title</label></p>
    <p><input name="title" type="text" value="<?= esc($news['title']) ?>">

    <p><label for="body">Text</label></p>
    <p><textarea name="body" type="text" cols="45" rows="4"><?= esc($news['body']) ?></textarea></p>

    <input type="submit" name="submit-update" value="Update data">
</form>
