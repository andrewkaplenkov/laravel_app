<?php foreach ($categories as $category) : ?>
    <ul>
        <li><a href="<?= route('news.filtered', ['category' => $category]) ?>"><?= $category ?></a></li>
    </ul>
<?php endforeach ?>