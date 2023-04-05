

<p>&nbsp;</p>
<p>&nbsp;</p>
	
	    <div class="container">
			<div class="row">
				<?php foreach ($meals as $meal) { ?>
					<div class="col-md-4 mb-4">
						<div class="card">
							<img src="<?php echo $meal['strMealThumb']; ?>" class="card-img-top" alt="<?php echo $meal['strMeal']; ?>">
							<div class="card-body">
								<h5 class="card-title"><?php echo $meal['strMeal']; ?></h5>
								<p class="card-text"><?php echo $meal['strArea']; ?></p>
								<small class="text-muted"><?php echo $meal['strCategory']; ?></small>
							</div>
							<div class="card-footer">
								<a class="btn btn-primary" href="">View</a>
								<a class="btn btn-primary" href="">Save</a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>


