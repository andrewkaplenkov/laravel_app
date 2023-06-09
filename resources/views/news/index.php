<?php foreach ($newsList as $key => $news) :  ?>
    <div style="border: 2px solid black; margin-bottom: 5px">
        <h2> <a href="<?= route('news.show', ['id' => $key]) ?>">
                <?= $news['title'] ?>
            </a></h2>
        <p><?= $news['author'] ?></p>
        <p><?= $news['body'] ?></p>
        <span><?= $news['category'] ?></span>
        <span><?= $news['created_at'] ?></span>
    </div>
<?php endforeach ?>