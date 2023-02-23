<!DOCTYPE html>
<html>
<body>

<?php

// Set connection details
$login = 'deb7974b-5a07-410d-a047-8998af8482df';
$password = '';
$url = 'https://www.reed.co.uk/api/1.0/search?keywords=Web&location=wolverhampton&distancefromlocation=1';

// Create CURL object with options
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$login:$password");

// Make CURL call, and convert result to JSON object
$jobs = curl_exec($ch);
$jobs = json_decode($jobs);
curl_close($ch);  

?>

	<nav class="navbar bg-body-tertiary">
		  <div class="container-fluid">
			<a class="navbar-brand"></a>
			<form class="d-flex" role="search">
			  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
			  <button class="btn btn-outline-success" type="submit">Search</button>
			</form>
		  </div>
	</nav>
	
	<div class="container text-center">
	  <div class="row">
	  
	  <?php
		// Display results
		foreach($jobs->results as $job) {

?>
		<div class="col">
		  <div class="card" style="width: 18rem;">
					<img src="data:image/png;base64,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" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title"><u> <?php print($job->jobTitle . "<br>")?></u></h5>
						<p class="card-text"> <?php print($job->employerName . "<br>")?></p>
						<a href="#" class="btn btn-primary">View Job </a>
						<a href="#" class="btn btn-primary">Apply</a>
					</div>
				</div>
				
		
		</div>
		<?php
		}
		?>
	  </div>
	</div>
