<h2><?//= esc($title) ?></h2>
<h2>Reviews</h2>
<br />
<hr>
<br />

<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>

        <h3><?= esc($news_item['title']) ?></h3>
		<h6><?= esc($news_item['slug']) ?></h6>

        <div class="main">
            "<?= esc($news_item['body']) ?>"
        </div>
		<br />
		<hr>
		<br />

    <?php endforeach ?>

<?php else: ?>

    <h3>No Reviews</h3>

    <p>Unable to find any reviews for you.</p>

<?php endif ?>