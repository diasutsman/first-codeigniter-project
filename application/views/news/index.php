<?php if (isset($message)) : ?>
    <p style="font-weight: bold;color: <?= $success ? 'green' : 'red' ?>;"><?= $message ?></p>
<?php endif ?>
<h2><?= $title ?></h2>

<a href="<?= site_url('news/create') ?>">Create news</a>

<?php foreach ($news as $news_item) : ?>
    <h3><?= $news_item['title']  ?></h3>
    <div class="main">
        <?= $news_item['text'] ?>
    </div>
    <p><a href="<?= site_url("news/" . $news_item['slug']) ?>">View Article</a></p>
<?php endforeach ?>