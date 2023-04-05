<style>
		.job-list-container {
		max-height: 500px;
		overflow-y: auto;
	}

	.job-card {
	  background-color: #f8f9fa;
	  border: 1px solid #dee2e6;
	  border-radius: 3px;
	  padding: 10px;
	  margin-bottom: 10px;
	}
	


	.main-content {
	  padding-top: 100px;
	  padding-bottom: 100px; }

	.job-card {
	  background: #fff;
	  padding: 25px;
	  border-radius: 5px;
	  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); }
	.job-card__content {
		display: flex;
		align-items: center;
		margin-bottom: 25px; }
	.job-card__content .job-card_img {
		  margin-right: 25px; }
	.job-card__content .job-card_img img {
			height: 100px;
			width: 100px;
			object-fit: contain;
			border-radius: 8px; }
	.job-card__content .job-card_info {
		  flex: 1; }
		  .job-card__content .job-card_info .text-muted a {
			color: #777; }
	.job-card__footer {
		display: flex;
		align-items: center;
		justify-content: space-between; }

	.job-label {
	  display: inline-block;
	  padding: 6px 12px;
	  background: #f5f5f5;
	  border-radius: 5px;
	  margin-right: 2px; }
		  
	.nav-link {
	  position: relative;
	  text-decoration: none;
	}

	.nav-link:hover {
	  text-decoration: underline;
	}

	.nav-link:hover i.bi-arrow-right {
	  margin-left: 10px;
	}
	
	.job-card {
	  background-image: url('<?=base_url('images/company-images/background.png')?>');
	  background-size: cover; 
	}
	
	.job-label {
	  background-color: #ffffff;
	}


	
	


</style>


	<div class="row-md-6">
			<div class="bg-white p-12">
				<div class="container mt-4">
				  <div class="row">
					<div class="col-12">
					  <div class="container mt-4">
						  <form class="form-inline" method="post" action="<?=base_url('jobs')?>">
							<?= csrf_field() ?>
							<div class="row">
							  <div class="col-md-6 mb-3 mb-md-0">
								<!-- Location Search Box -->
								<div class="input-groups">
								  <input type="text" name="location" value="<?= set_value('location')?>" id="search2" class="form-control form-control-lg" placeholder="Search By Location..." aria-label="Search Location" aria-describedby="basic-addon1">
									<div id="display2" class="border bg-light" style="position: absolute; z-index: 9999; top: 100%; left: 0; width: 100%;"></div>


								  <!--<<button class="btn btn-outline-success" value="Search Job Item" fdprocessedid="a2rnqj" type="submit"><i class="bi bi-geo-alt"></i></button>-->
								</div>
							  </div>
							  <div class="col-md-6">
							  
							  
								<!-- Keyword Search Box -->
								<div class="input-group">
									<input type="text" name="keyword" value="<?= set_value('keyword')?>" id="search" class="form-control form-control-lg" placeholder="Search By Keyword..." aria-label="Search Jobs, Keywords" aria-describedby="basic-addon1">
									<div id="display" class="border bg-light" style="position: absolute; z-index: 9999; top: 100%; left: 0; width: 100%;"></div>
									<button class="btn btn-outline-dark" value="Search Job Item" fdprocessedid="a2rnqj" type="submit"><i class="bi bi-search"></i></button>
								</div>


								
								
							  </div>
							</div>
						  </form>
						</div>
						
						
						<script type="text/javascript">
							$(document).ready(function(){
								$("#search").keyup(function(){
									var searchText = $(this).val();
									if(searchText!=''){
										$.ajax({
											url:'https://mi-linux.wlv.ac.uk/~2015861/project-root/public/livesearch',
											method:'get',
											data:{query:searchText},
											success:function(response){
												$("#display").html(response).show();
											}
										});
									}
									else{
										$("#display").hide();
									}
								});
								$("#display").on("click", "a", function(event){
									event.preventDefault();
									var value = $(this).text();
									$("#search").val(value);
									$("#display").hide();
									$('form').submit();
								});
								$(document).click(function(event) {
									if (!$(event.target).closest('.form-group').length) {
										$("#display").hide();
									}
								});
							});

						</script>
						


						
						<div class="container my-5 ">
						
							<div class="row row-cols-1 row-cols-md-5 g-3">
								<div class="d-none d-md-block">
									<a href="<?=base_url('jobs/keyword/computer science')?>" class="btn btn-outline-success btn-sm"><i class="bi bi-search">&nbsp;&nbsp;&nbsp;Computer Science</i></a>
								</div>
								<div class="d-none d-md-block">
									<a href="<?=base_url('jobs/keyword/Digital Marketing')?>" class="btn btn-outline-success btn-sm"><i class="bi bi-search">&nbsp;&nbsp;&nbsp;Digital Marketing</i></a>
								</div>
								<div class="d-none d-md-block">
									<a href="<?=base_url('jobs/keyword/Graphic Designer')?>" class="btn btn-outline-success btn-sm"><i class="bi bi-search">&nbsp;&nbsp;&nbsp;Graphic Designer</i></a>
								</div>
								<div class="d-none d-md-block">
									<a href="<?=base_url('jobs/keyword/Teaching Assistant')?>" class="btn btn-outline-success btn-sm"><i class="bi bi-search">&nbsp;&nbsp;&nbsp;Teaching Assistant</i></a>
								</div>
								<div class="d-none d-md-block">
									<a href="<?=base_url('jobs/keyword/Mathematics')?>" class="btn btn-outline-success btn-sm"><i class="bi bi-search">&nbsp;&nbsp;&nbsp;Mathematics</i></a>
								</div>
								<div class="d-none d-md-block">
									<a href="<?=base_url('jobs/keyword/Administration')?>" class="btn btn-outline-success btn-sm"><i class="bi bi-search">&nbsp;&nbsp;&nbsp;Administration</i></a>
								</div>
								<div class="d-none d-md-block">
									<a href="<?=base_url('jobs/keyword/Work from home')?>" class="btn btn-outline-success btn-sm"><i class="bi bi-search">&nbsp;&nbsp;&nbsp;Work from home</i></a>
								</div>
								
								<div class="d-none d-md-block">
									<a href="<?=base_url('jobs/keyword/uniformed')?>" class="btn btn-outline-success btn-sm"><i class="bi bi-search">&nbsp;&nbsp;&nbsp;Uniformed</i></a>
								</div>
								<div class="d-none d-md-block">
									<a href="<?=base_url('jobs/keyword/night shift')?>" class="btn btn-outline-success btn-sm"><i class="bi bi-search">&nbsp;&nbsp;&nbsp;Night Shift</i></a>
								</div>
								<div class="d-none d-md-block">
									<a href="<?=base_url('jobs/keyword/chef')?>" class="btn btn-outline-success btn-sm"><i class="bi bi-search">&nbsp;&nbsp;&nbsp;Chef</i></a>
								</div>
							</div>
						</div>
						
						<!-- Uncomment for jobs inside a scroll contrainer -->
					  <!-- <div class="job-list-container"> -->
					  
					  <?php
						$i=0;
						// Display results
						
						foreach($jobs->results as $job) 
						{
							
							$img = array(
								"Indeed-new.png",
								"github-new.png",
								"glassdoor-new.png",
								"reed-new.png",
								"totaljobs-new.png",
								"monster-new.png",
								"Indeed.png",
								"github.png",
								"glassdoor.png",
								"reed.png",
								"totaljobs.png",
								"monster.png"
							);
							
							$type = array(
								"Full Time",
								"Part Time",
								"Contract",
								"Permanent",
								"Temporary"
							);
							
							$randomtypeIndex = rand(0, count($type) - 1);
							$randomtype = $type[$randomtypeIndex];
							
							$randomIndex = rand(0, count($img) - 1);
							$randomImage = $img[$randomIndex];
							$jobID = ($job->jobId);
							
						?>
					  
							<div class="row">
								<div class="col-sm-12 offset-sm-0">
									<div class="job-card border-white rounded ">
									  <div class="job-card__content ">
										<div class="job-card_img">
										  <img src="<?=base_url('images/company-images')?>/<?php echo $randomImage ?>" alt="Company Logo">
										  
										</div>
										<div class="job-card_info">
										  <h6 class="text-muted">
											<i class="bi bi-geo-alt text-success"></i>
											<?php $location = $job->locationName;?>
											<a href="<?=base_url('jobs/location') . "/" . urlencode($location)?>" class="job-card_company text-success"><?php print($job->locationName . "<br>")?></a>
										  </h6>
										  <h4><?php print($job->jobTitle . "<br>")?></h4>
										  <p class="mb-0 muted"><?php print($job->employerName . "<br>")?></p>
										</div>
									  </div>
									  <div class="job-card__footer">
										<div class="job-card_job-type">
										  <span class="job-label border rounded "><i class="bi bi-clock"></i>&nbsp;<?php echo $randomtype ?></span>
										  <span class="job-label border rounded ">Added: &nbsp;<?php print($job->date . "<br>")?></span>
										  <span class="job-label border rounded ">Expires: <?php print($job->expirationDate . "<br>")?></span>
										  <span class="job-label border rounded ">
												<i class="bi bi-cash"></i>&nbsp;<?php echo !empty($job->minimumSalary) ? '£' . $job->minimumSalary . '<br>' : 'Unavailable<br>'; ?>
											</span>

										  <a href="">
											  <button type="button" class="btn btn-outline-white">
												<i class="fa fa-heart text-danger"></i>
												Save
											  </button>
											</a>

										</div>
										<div class="button-group">
										  <!--<button  href="<?=base_url('jobs')?>/<?php echo $jobID ?>" class="btn btn-outline-dark">View</button>-->
										  <a class="btn btn-success" href="<?=base_url('jobs')?>/<?php echo $jobID ?>">View Job</a>
										</div>
									  </div>
									</div>

								</div>
							</div>
						
						<?php
							$i++;
							if($i==100) break;
						}
						?>
						<a href="#" method="post" class="btn btn-sm btn-light btn-lg-square back-to-top text-start fixed-bottom">To top <i class="bi bi-arrow-up"></i></a>
						<br />
						<br />

						

					  </div>
					</div>
				  </div>
				</div>
	</div>
