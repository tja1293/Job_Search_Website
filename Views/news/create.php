
<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>


<div class="d-flex justify-content-center"><h1>Add Review</h1></div>


<form action="<?=base_url('news/create')?>" method="post">
    <?= csrf_field() ?>

    <label for="title">Name</label>
    <input type="input" class="form-control" name="title" value="<?= set_value('title') ?>">
    <br>
	
	<label for="title">Title</label>
    <input type="input" class="form-control" name="slug" value="<?= set_value('slug') ?>">
    <br>


    <label for="body">Body</label>
    <textarea class="form-control" name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Create news item">
</form>




