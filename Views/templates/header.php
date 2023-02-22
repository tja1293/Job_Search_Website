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
	
	<style>
				* {
		  box-sizing: border-box;
		}

		body {
		  font-family: Arial, Helvetica, sans-serif;
		}

		/* Float four columns side by side */
		.column {
		  float: left;
		  width: 33%;
		  padding: 0 10px;
		}

		/* Remove extra left and right margins, due to padding in columns */
		.row {margin: 0 -5px;}

		/* Clear floats after the columns */
		.row:after {
		  content: "";
		  display: table;
		  clear: both;
		}

		/* Style the counter cards */
		.card {
		  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
		  padding: 16px;
		  text-align: center;
		  background-color: #f1f1f1;
		  
		}

		/* Responsive columns - one column layout (vertical) on small screens */
		@media screen and (max-width: 600px) {
		  .column {
			width: 100%;
			display: block;
			margin-bottom: 20px;
		  }
		  
		article.job-card {
		  display: grid;
		  grid-template-columns: 80px auto 100px;
		  grid-template-rows: 35px 10px 35px;
		  width: 700px;
		  position: relative;
		  border-top: 1px solid #e3e3e3;
		  border-bottom: 1px solid #e3e3e3;
		  font-family: 'Helvetica';
		  padding: 24px;
		}

		article.job-card:hover,
		article.job-card:focus {
		  background-color: rgba(0,166,194,.03);
			border-color: #b2e4ec;
		}

		.company-logo-img {
		  grid-area: 1 / 1 / 2 / 2;
		  background-color: #fff;
		  border: 1px solid #e3e3e3;
		  height: 80px;
		  width: 80px;
		  box-sizing: border-box;
		  position: relative;
		  padding: 5px;
		}

		.company-logo-img img {
		  max-height: calc(100% - 10px);
		  max-width: calc(100% - 10px);
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  transform: translate(-50%, -50%);
		}

		.job-title {
		  grid-area: 1 / 2 / 2 / 3;
		  font-size: 16px;
		  align-self: start;
		  font-weight: 500;
		  margin-top: 5px;
		  padding: 0 24px;
		}

		.company-name {
		  grid-area: 2 / 2 / 3 / 3;
		  align-self: center;
		  font-size: 14px;
		  color: #777;
		  margin-bottom: 5px;
		  padding: 0 24px;
		}

		.skills-container {
		  grid-area: 3 / 2 / 4 / 3;
		  align-self: center;
		  padding-top: 10px;
		  padding: 0 24px;
		}

		.skill {
		  display: inline;
		  color: #00a6c2;
		  border-radius: 2px;
		  background-color: rgba(0,166,194,.05);
		  border: 1px solid rgba(0,166,194,.15);
		  padding: 5px 8px;
		  font-size: 12px;
		}

		button {
		  display: block;
		  width: 100%;
		  cursor: pointer;
		  border: 0;
		  border-radius: 4px;
		  font-size: 14px;
		  padding: 6px 12px;
		  z-index: 2;
		}
		.apply {
		  grid-area: 1 / 3 / 2 / 4;
		  background-color: #1ab059;
		  color: #fff;
		}
		.save {
		  grid-area: 3 / 3 / 4 / 4;
		  background-color: #fff;
		  border: 1px solid #a4a5a8;
		  color: #777;
		}

		a {
		  position: absolute;
		  width: 100%;
		  height: 100%;
		  left: 0;
		  top: 0;
		  z-index: 1;
		}
		  
	</style>
		
  </head>
  <body>
	<div class="container">
	
		<!-- Navbar - (Home, Login, Jobs, Logout) -->
		
	    <nav class="navbar navbar-expand-lg bg-light">
		  <div class="container-fluid">
			<a class="navbar-brand" href="#">TechJobs</a>
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
			  </ul>
			  <span class="navbar-text">
				<li class="nav">
				  <a class="nav-link" href="<?=base_url('logout')?>">Logout!</a>
				</li>
			  </span>
			</div>
		  </div>
		</nav>
		
		<!-- End of Navbar -->