  
  <?php

	// Set connection details
	$login = 'deb7974b-5a07-410d-a047-8998af8482df';
	$password = '';
	$url = 'https://www.reed.co.uk/api/1.0/search?keywords=Web&location=manila&distancefromlocation=10';

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
	
	
	$images = array(
    "11.jpg",
    "12.jpg",
    "13.jpg",
	"14.jpg",
	"15.jpg");
	
	$img = array(
    "https://pbs.twimg.com/profile_images/1542534261588336640/RkjKw5p3_400x400.jpg",
    "https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/wafobb7hb5abdcgff3iv.jpg",
	"https://www.smartrecruiters.com/blog/wp-content/uploads/2013/05/monnster.com_.jpg",
	"https://www.glassdoor.com/employers/app/uploads/sites/2/2018/08/icon1024x1024.jpg",
	"https://pbs.twimg.com/profile_images/625760778554093568/dM7xD4SQ_400x400.png",
	"https://t3.ftcdn.net/jpg/05/07/85/46/360_F_507854602_bhxzxAByrbBvmgJpLpfAWt5zQG1X8QLn.jpg",
	"https://economistjobs.com/images/jobs/logos/_logo/naturescot_2023-02-10-141708_ndam.jpg",
	"https://www.cwjobs.co.uk/sharedcontent/img/cwjobs/opengraph-logo.png?v=1.0.jpg",
	"https://www.nhsdiscounts.org.uk/wp-content/uploads/store/logo/totaljobs.com.png");
	
	//$randomIndex = rand(0, count($images) - 1);
	//$randomImage = $images[$randomIndex];
	


	?>
  
  
  
  
  
	<div class="container">
	
	
	
	<p>&nbsp;</p>


	  <div class="row">
	  
	<?php
		// Display results
		foreach($jobs->results as $job) 
		
		
		{
			
			
			
			$randomIndex = rand(0, count($img) - 1);
			$randomImage = $img[$randomIndex];
			$jobID = ($job->jobId);
			?>
	  
			<div class="col-md-6 col-lg-4 mb-4">
			  <div class="card h-100">
				<img src="<?php echo $randomImage ?>" class="card-img-top" alt="Company Logo 3">
				<div class="card-body">
				  <h5 class="card-title"><?php print($job->jobTitle . "<br>")?></h5>
				  <h6 class="card-subtitle mb-2 text-muted"><?php print($job->employerName . "<br>")?></h6>
				  <p class="card-text"><?php print($job->locationName . "<br>")?></p>
				  <p class="card-text text-muted">Added: <?php print($job->date . "<br>")?></p>
				</div>
				<div class="card-footer">
				  <!--<button type="button" action="page.php" <a href="page.php?id=$userID">View Card</a>class="btn btn-primary btn-sm">Apply Now</button>-->
				  <a href="<?=base_url('jobs')?>/<?php echo $jobID ?>" class="btn btn-primary">View Job</a>
				  <a href="#" class="btn btn-primary">Apply</a>
				</div>
			  </div>
			</div>
			
		<?php
		}
		?>
				
	  </div>
	</div>
	
