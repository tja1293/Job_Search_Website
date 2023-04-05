

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TechJobs</title>
	
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	
	<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src = "js/testFunction.js"></script>
	<!--<script> ajaxRequest(); </script>
	
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">-->
	
	<style>
		
		/*** Job Listing ***/
		.nav-pills .nav-item .active {
			border-bottom: 2px solid var(--primary);
		}

		.job-item {
			border: 1px solid transparent;
			border-radius: 2px;
			box-shadow: 0 0 45px rgba(0, 0, 0, .08);
			transition: .5s;
		}

		.job-item:hover {
			border-color: rgba(0, 0, 0, .08);
			box-shadow: none;
		}
				  
	</style>

	
		
  </head>
  <body>
   
	<div class="container">
	
		<!-- Navbar - (Home, Login, Jobs, Logout) -->
		
	    <nav class="navbar navbar-expand-lg bg-light fixed-top navbar-dark bg-dark">
		  <div class="container-fluid">
			<a class="navbar-brand" href="#">Tech Jobs</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">
			  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
				  <a class="nav-link active" aria-current="page" href="<?=base_url('home')?>">Home</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="<?=base_url('login')?>">Login</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="<?=base_url('jobs')?>">Jobs</a>
				</li>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="<?=base_url('test')?>">Near Me</a>
				</li>
			  </ul>
			</div>
		  </div>
		</nav>
		
		<!-- End of Navbar -->
	