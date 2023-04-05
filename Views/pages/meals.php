<!DOCTYPE html>
<html>
<head>
    <title>Random Meal</title>
</head>
<body>
	<?php foreach($meals->results as $meal)
	{
		?>
		
		<h1><?php print($meals->strMeal . "<br>")?></h1>
	
	<?php
	}
	?>
	
</body>
</html>