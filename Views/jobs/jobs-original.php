<?php //print_r($jobs)?>

<?php

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
	
	?>

	<p>&nbsp;</p>
	<p>&nbsp;</p>
	
	<div class="container">
	
		<nav class="navbar navbar-light bg-light">
	 <form class="form-inline" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<div class="input-group">
		  <div class="input-group-prepend">
			<button class="btn btn-outline-secondary" type="submit">Search</button>
		  </div>
		  <input type="text" name="fname" class="form-control" placeholder="Keyword" aria-label="Username" aria-describedby="basic-addon1">
		  <input type="text" name="lname" class="form-control" placeholder="Location" aria-label="Username" aria-describedby="basic-addon1">
		</div>
	  </form>
	</nav>

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
				<img src="<?php echo $randomImage ?>" class="card-img-top rounded-sm" alt="Company Logo 3">
				<div class="card-body">
				  <h5 class="card-title"><?php print($job->jobTitle . "<br>")?></h5>
				  <h6 class="card-subtitle mb-2 text-muted"><?php print($job->employerName . "<br>")?></h6>
				  <p class="card-text"><?php print($job->locationName . "<br>")?></p>
				  <p class="card-text text-muted">Added: <?php print($job->date . "<br>")?></p>
				</div>
				<div class="card-footer bg-transparent">
				  <!--<button type="button" action="page.php" <a href="page.php?id=$userID">View Card</a>class="btn btn-primary btn-sm">Apply Now</button>-->
				  <a href="<?=base_url('jobs')?>/<?php echo $jobID ?>" class="btn btn-primary">View Job</a>
				  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="exampleModal" data-whatever="@mdo">Apply</button>
				</div>
			  </div>
			</div>
			
		<?php
		}
		?>
				
	 </div>
	 
</div>