<?php


?>

<p>&nbsp;</p>
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