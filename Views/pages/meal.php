
	
	    <div class="container text-center">
		  
		<div class="row">
			<?php foreach ($meals->meals as $meal) 
			{
				?>
					<div class="col">

					  <div class="card" style="width: 18rem;">
						<?php echo '<img src="' . $meal->strMealThumb . '">'?>
						<div class="card-body">
						  <h5 class="card-title"><?php print($meal->strMeal . "<br>")?></h5>
						  <p class="card-title"><?php print($meal->strIngredient1 . "<br>")?></p>
						  <a href="#" class="btn btn-primary">View</a>
						   <a href="#" class="btn btn-primary">Edit</a>
						</div>
					  </div>
					</div>

			<?php
			}
			?>
		</div>
			
		</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
