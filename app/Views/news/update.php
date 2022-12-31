<p><label for="title">Title</label></p>
<p><input name="title" type="text" value="<?= esc($news['title']) ?>">

<p><label for="body">Text</label></p>
<p><textarea name="body" type="text" cols="45" rows="4"><?= esc($news['body']) ?></textarea></p>

<input name="submit-update "type="button" value="Update data">