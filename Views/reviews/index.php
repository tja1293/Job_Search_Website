<h2><?= esc($name) ?></h2>

<?php if (! empty($name) && is_array($reviews)): ?>

    <?php foreach ($reviews as $reviews_item): ?>

        <h3><?= esc($reviews_item['name']) ?></h3>

        <div class="main">
            <?= esc($reviews_item['body']) ?>
        </div>
        <p><a href="/reviews/<?= esc($reviews_item['title'], 'url') ?>">View Review</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No review</h3>

    <p>Unable to find any reviews for you.</p>

<?php endif ?>