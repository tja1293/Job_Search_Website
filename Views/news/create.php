<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>


<br />
<br />
<br />
<br />
<form action="<?=base_url('news/create')?>" method="post">
    <?= csrf_field() ?>

    <label for="title">Name</label>
    <input type="input" name="title" value="<?= set_value('title') ?>">
    <br>
	
	<label for="title">Title</label>
    <input type="input" name="slug" value="<?= set_value('slug') ?>">
    <br>


    <label for="body">Body</label>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Create news item">
</form>