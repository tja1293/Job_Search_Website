<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
	
	<style>
				* {
		  box-sizing: border-box;
		}

		body {
		  font-family: Arial, Helvetica, sans-serif;
		}

		/* Float four columns side by side */
		.column {
		  float: center;
		  width: 100%;
		  padding: 0 10px;
		}
		
		p {
			
			
			white-space: nowrap;
			overflow: hidden;
			text-overflow: clip;
}

		/* Remove extra left and right margins, due to padding in columns */
		.row {margin: 0 -5px;}

		/* Clear floats after the columns */
		.row:after {
		  content: "";
		  display: table;
		  clear: both;
		}
		
		.cards {
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			grid-auto-rows: auto;
			grid-gap: 1rem;

}

		/* Style the counter cards */
		.card {
		  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
		  padding: 16px;
		  text-align: center;
		  background-color: #f1f1f1;
		  margin-bottom: 15px;
		  margin-top: 30px;
		  
		}

		/* Responsive columns - one column layout (vertical) on small screens */
		@media screen and (max-width: 600px) {
		  .column {
			width: 100%;
			display: block;
			margin-bottom: 20px;
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
				  <a class="nav-link" href="<?=base_url('about')?>">About</a>
				</li>
			  </ul>
			  
			  <!--<span class="navbar-text">
				<li class="nav">
				  <a class="nav-link" href="<?=base_url('logout')?>">Logout!</a>
				</li>
			  </span> -->
			</div>
		  </div>
		</nav>
		
		<!-- End of Navbar -->