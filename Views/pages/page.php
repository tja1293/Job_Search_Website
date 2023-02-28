<?php

	echo $user = $_GET['job-id'];

	// Set connection details
	$login = 'deb7974b-5a07-410d-a047-8998af8482df';
	$password = '';
	//$url = 'https://www.reed.co.uk/api/1.0/jobs/49434707';
	$url = 'https://www.reed.co.uk/api/1.0/jobs/' . $user;

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

	echo $jobs->locationName;
	echo $jobs->employerName;
	echo $jobs->jobTitle;

?>

<p>&nbsp;</p>

		  <div class="row">
			<div class="col-md-6">
			  <img src="https://techcrunch.com/wp-content/uploads/2015/11/mobile-cv-resume1.png" class="img-fluid rounded" alt="Job Title Image">
			</div>
			<div class="col-md-6">
			  <h1 class="mb-3 text-center"><?php echo $jobs->jobTitle;?></h1>
			  <h3 class="lead mb-4 text-start text-muted"><?php echo $jobs->employerName;?></h3>
			  <h5 class="mb-3 text-start">Job Requirements</h5>
			  <p class="text-md-left"><?php echo $jobs->jobDescription;?></p>
			  <a href="#" class="btn btn-primary btn-lg">Apply Now</a>
			  <a href="#" class="btn btn-primary btn-lg">Save Job</a>
			</div>
		  </div>
		</div>