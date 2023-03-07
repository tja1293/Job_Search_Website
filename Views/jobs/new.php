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
	
		<nav class="navbar navbar-light ">
		  <form class="form-inline">
			<input class="form-control mr-sm-2" type="search" placeholder="Keyword" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
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
	  
			<div class="col-md-4">
				<div class="card border-info mb-3" style="max-width: 18rem;">
				  <div class="card-header bg-transparent border-info">
					<img src="<?php echo $randomImage ?>" class="card-img-top rounded" alt="Company Logo 3">
				  </div>
				  <div class="card-body text-info">
					<h5 class="card-title"><?php print($job->jobTitle . "<br>")?></h5>
					<p class="card-text text-muted text-wrap"><?php print($job->employerName . "<br>")?></p>
					<h5 class="card-title"><?php print($job->locationName . "<br>")?></h5>
				  </div>
				  <div class="card-footer bg-transparent border-info">
					<a href="#" class="btn btn-primary">Apply</a>
					<a href="#" class="btn btn-primary">View</a>
				  </div>
				</div>
			</div>
			
		<?php
		}
		?>
				
	  </div>
	</div>