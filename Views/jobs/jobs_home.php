	<?php
	
	// Creating an array of Job Recruitment Logo's to assign to the jobs as no images
	// are avaliable from the API.
	
	$img = array(
    "indeed.png",
    "github.png",
    "glassdoor.png",
	"reed.png",
	"totaljobs.png",
	"monster.png");

	?>
	
	<script src="http://code.jquery.com/jquery-3.6.3.js"></script>
	<script src = "js/testFunction.js"></script>
	
		<!-- Jobs Start -->
        <div class="container-xxl py-5">
            <div class="container">
				<p>&nbsp;</p>
                <h1 class="text-center mb-5 wow fadeInUp">Jobs Near you</h1>
				
				
				<nav class="navbar navbar-light ">
				 <form class="form-inline" method="post" action="<?=base_url('newjobs')?>">
					<?= csrf_field() ?>
					<div class="input-group">
					  <div class="input-group-prepend">
						<button type="submit" class="btn btn-primary" value="Search Job Item" fdprocessedid="a2rnqj"><i class="bi bi-search"></i></button>
						
						<!--<button class="btn btn-outline-secondary" type="submit" value="Search Job Item" >Search</button>-->
					  </div>
					  <input type="text" name="keyword" value="" class="form-control" placeholder="Keyword" aria-label="Username" aria-describedby="basic-addon1">
					  <input type="text" name="location" value="" class="form-control" placeholder="Location" aria-label="Username" aria-describedby="basic-addon1">
						<button type="submit" class="btn btn-success" value="Search Job Item" fdprocessedid="seg96e"><i class="bi bi-geo-alt "></i></button>
					</div>
				  </form>
				</nav>

	
				<p>&nbsp;</p>
				
				<?php
				$i=0;
				// Display results
				foreach($jobs->results as $job) 
				{
					$randomIndex = rand(0, count($img) - 1);
					$randomImage = $img[$randomIndex];
					$jobID = ($job->jobId);
					
				?>
					<div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded" src="<?=base_url('images/mini-images')?>/<?php echo $randomImage ?>" alt="" style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3"><?php print($job->jobTitle . "<br>")?></h5>
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php print($job->locationName . "<br>")?></span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>£<?php print($job->minimumSalary . "<br>")?></span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="<?=base_url('jobs')?>/<?php echo $jobID ?>">View Job</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: <?php print($job->date . "<br>")?></small>
                            </div>
                        </div>
                    </div>
				<?php
				$i++;
				if($i==20) break;
				}
				?>
            </div>
			<a href="#" method="post" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
			
			<?php

?>
			
        </div>
        <!-- Jobs End -->