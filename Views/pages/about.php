<div class="p-3 mb-2 bg-transparent text-dark"></div>
<div class="p-3 mb-2 bg-transparent text-dark"></div>


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

				<div class="container">
				
					<h1>All Jobs</h1>
					<div class="p-3 mb-2 bg-transparent text-dark"></div>

					<div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="job-item p-4 mb-4">
								<?php
										// Display results
										foreach($jobs->results as $job) {
									?>
                                <div class="row g-4">
										<div class="col-sm-12 col-md-8 d-flex align-items-center">
											<img class="flex-shrink-0 img-fluid border rounded" src="https://as2.ftcdn.net/v2/jpg/05/05/61/73/1000_F_505617309_NN1CW7diNmGXJfMicpY9eXHKV4sqzO5H.jpg" alt="" style="width: 80px; height: 80px;">
											<div class="text-start ps-4">
												<h5 class="mb-3"><?php print($job->jobTitle . "<br>")?></h5>
												<span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php print($job->locationName . "<br>")?></span>
												<span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>£<?php print($job->minimumSalary . "<br>")?> per annum</span>
											</div>
										</div>
										<div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
											<div class="d-flex mb-3">
												<a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
												<a class="btn btn-primary" href="">Apply Now</a>
											</div>
											<small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date End:<?php print($job->expirationDate . "<br>")?></small>
										</div>
                                </div>
								<hr class="rounded">
								
								<?php
										}
										?>
                            </div>
                        </div>
					</div>
				</div>