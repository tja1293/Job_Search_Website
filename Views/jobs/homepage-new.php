<script src="<?=base_url('js/newTestFunction.js')?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<br />
<br />
<br />
<br />
<br />
<div class="container ">
		  <div class="row">
		  
			<div class="col-sm-4">
			  <div class="jumbotron">
				  <h1 class="display-5 text-center"><i>Find the job that fits, with HIRE ME</i></h1>
				  <hr class="my-4">
				  <p class="lead">Welcome to HIRE ME, the go-to job site for job seekers and employers looking to connect and find their perfect match.</p>
				</div>
				<div class="container">
				  <div class="row">
					<div class="col-md-6">
					  <div class="left-container">
						<a href="<?=base_url('jobs')?>" class="btn btn-dark ">Browse Jobs</a>
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="right-container">
						<a class="nav-link" href="<?=base_url('jobs/location/')?>" id="jobsLink">Jobs Near Me <i class="bi bi-arrow-right"></i></a>
					  </div>
					</div>
				  </div>
				</div>
			
				
				<script>
					
					var city = "";
				// Step 1: Get user coordinates
				function getCoordintes() {
					var options = {
						enableHighAccuracy: true,
						timeout: 5000,
						maximumAge: 0
					};

					function success(pos) {
						var crd = pos.coords;
						var lat = crd.latitude.toString();
						var lng = crd.longitude.toString();
						// manchester lat lng test
						//var lat = "53.483959";
						//var lng = "-2.244644";
						var coordinates = [lat, lng];
						//console.log(`Latitude: ${lat}, Longitude: ${lng}`);
						getCity(coordinates);
						return;

					}

					function error(err) {
						console.warn(`ERROR(${err.code}): ${err.message}`);
					}

					navigator.geolocation.getCurrentPosition(success, error, options);
				}

				// Step 2: Get city name
				function getCity(coordinates) {
					var xhr = new XMLHttpRequest();
					var lat = coordinates[0];
					var lng = coordinates[1];

					// Paste your LocationIQ token below.
					xhr.open('GET', "https://us1.locationiq.com/v1/reverse.php?key=pk.8697431b21d342e11e03b347c8f877b0&lat=" +
					lat + "&lon=" + lng + "&format=json", true);
					xhr.send();
					xhr.onreadystatechange = processRequest;
					xhr.addEventListener("readystatechange", processRequest, false);

					function processRequest(e) {
						if (xhr.readyState == 4 && xhr.status == 200) {
							var response = JSON.parse(xhr.responseText);
							city = response.address.city;
							$("#jobsLink").attr("href", "<?=base_url('jobs/location')?>/"+city);
							//console.log(city);
							
							/*$.ajax({
								url: "https://mi-linux.wlv.ac.uk/~2015861/project-root/public/jobs/location/" + city, //current URL
								//url: "/",
								type: "POST",
								data: {
									name: city
								},
								dataType: 'json',
								success: function(response){
									$('.result').html(response);
								}
							});
							*/
						
						
							//ajaxRequest(city);
							return;
						}
					}
				}

				getCoordintes();
				
				</script>
				
				<div class="container border border-5 border-dark rounded bg-dark text-light">
				  <div class="row">
					<div class="col-md-4">
					  <div class="left-container">
						<h2><a>50K</a></h2>
					  </div>
					</div>
					<div class="col-md-8">
					  <div class="right-container text-center">
						<a>We’re proud to announce that we now employ a workforce of over <strong>50,000</strong>. It’s all possible because of you.</a>
					  </div>
					</div>
				  </div>
				</div>

			<br />
			<br />
			</div>
			
			
			<div class="col-sm-8 ">
			  <div class="p-0">
				<!-- right -->
				
				<div class="container ">
				  <div class="row justify-content-center">
					<div class="col-6 col-md-4 mb-4">
						<div class="p-0 image-container">
							<a href="<?=base_url('jobs/keyword/Computing')?>">
								<img src="<?=base_url('images/top-images/1x1-bottom.png')?>" class="img-fluid rounded-3" alt="Image 1">
								<div class="overlay-text rounded-bottom">
									<p>Computing</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-6 col-md-4 mb-4">
					  <div class="p-0 image-container">
						  <a href="<?=base_url('jobs/keyword/Business')?>">
								<img src="<?=base_url('images/top-images/1x1-left.png')?>" class="img-fluid rounded-3" alt="Image 2">
								<div class="overlay-text rounded-bottom">
									<p>Business</p>
								</div>
						  </a>
					  </div>
					</div>
				  </div>
				  <div class="row justify-content-center">
					<div class="col-6 col-md-4 mb-4">
					  <div class="p-0 image-container">
						  <a href="<?=base_url('jobs/keyword/Administration')?>">
							<img src="<?=base_url('images/top-images/1x1-top.png')?>" class="img-fluid rounded-3" alt="Image 1">
							<div class="overlay-text rounded-bottom">
								<p>Administration</p>
							</div>
						  </a>
					  </div>
					</div>
					<div class="col-6 col-md-4 mb-4">
					  <div class="p-0 image-container">
						  <a href="<?=base_url('jobs/keyword/Office')?>">
							<img src="<?=base_url('images/top-images/1x1-right.png')?>" class="img-fluid rounded-3" alt="Image 2">
							<div class="overlay-text rounded-bottom">
								<p>Office</p>
							</div>
						 </a>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
			
		  </div>
		</div>





		</div>
