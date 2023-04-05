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
		
		<!-- Jobs Start -->
        <div class="container-xxl py-5">
            <div class="container">
				<p>&nbsp;</p>
                <h1 class="text-center mb-5 wow fadeInUp">Job Listing</h1>
				
				<?php
				// Display results
				foreach($jobs->results as $job) 
				{
					$randomIndex = rand(0, count($img) - 1);
					$randomImage = $img[$randomIndex];
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
                                    <a class="btn btn-primary" href="">View Job</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: <?php print($job->date . "<br>")?></small>
                            </div>
                        </div>
                    </div>
				<?php
				}
				?>
            </div>
			<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>
        <!-- Jobs End -->