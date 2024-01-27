<h2><?= $title ?></h2>

<?= validation_errors() ?>

<?= form_open('news/create'); ?>
<label for="title">Title</label>
<input type="text" name="title" id="title"><br>

<label for="text">Text</label>
<textarea name="text" id="text"></textarea><br>

<button type="submit" name="submit">Create new news</button>
</form>