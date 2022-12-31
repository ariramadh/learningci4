<label for="title">Title</label>
<input name="title" type="text" value="<?= esc($news['title']) ?>">

<label for="body">Text</label>
<textarea name="body" type="text" cols="45" rows="4"><?= esc($news['body']) ?></textarea>
