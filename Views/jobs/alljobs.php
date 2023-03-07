<?php //print_r($jobs)?>

<?php

$img = array(
    "indeed.png",
    "github.png",
    "glassdoor.png",
	"reed.png",
	"totaljobs.png",
	"monster.png");

$imge = array(
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
		 <form class="form-inline" method="post" action="<?=base_url('jobs')?>">
			<?= csrf_field() ?>
			<div class="input-group">
			  <div class="input-group-prepend">
				<button class="btn btn-outline-secondary" type="submit" value="Search Job Item" >Search</button>
			  </div>
			  <input type="text" name="keyword" value="<?= set_value('keyword')?>" class="form-control" placeholder="Keyword" aria-label="Username" aria-describedby="basic-addon1">
			  <input type="text" name="location" value="<?= set_value('location')?>" class="form-control" placeholder="Location" aria-label="Username" aria-describedby="basic-addon1">
			</div>
		  </form>
		</nav>
	

	<!--<p>&nbsp;</p>-->
	

	  <div class="row bg-light">
	  
	<?php
		// Display results
		foreach($jobs->results as $job) 
		
		
		{
			
			
			
			$randomIndex = rand(0, count($img) - 1);
			$randomImage = $img[$randomIndex];
			$jobID = ($job->jobId);
			?>
	  
			<p>&nbsp;</p>
			<div class="col-md-6">
			  <img src="<?=base_url('images')?>/<?php echo $randomImage ?>" class="img-thumbnail  text-center " alt="Job Title Image">
			</div>
			<div class="col-md-6">
			  <h2 class="mb-3 text-center"><?php print($job->jobTitle . "<br>")?></h2>
			  <p class="lead mb-4 text-center"><?php print($job->locationName . "<br>")?></p>
			  <h5 class="mb-3">Job Requirements</h5>
			  <ul class="list-unstyled mb-4">
				<li>Added: <?php print($job->date . "<br>")?></li>
			  </ul>
			  <a href="#" class="btn btn-primary btn-lg">Apply Now</a>
			  <a href="<?=base_url('jobs')?>/<?php echo $jobID ?>" class="btn btn-primary btn-lg">View Job</a>
			  <!--<a href="#" class="btn btn-primary btn-lg"><i class="bi bi-bookmark-star"></i></a>-->
	
			</div>
			<p>&nbsp;</p>
			<hr class="mt-3 mb-3"/>
			
		<?php
		}
		?>
				
	  </div>
	</div>
	 
</div>