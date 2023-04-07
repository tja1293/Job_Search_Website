<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://getbootstrap.com/docs/5.3/assets/css/docs.css"
      rel="stylesheet"
    />
	<!--<link rel="stylesheet" href="css.css">-->
	
	
	<style>
	  .image-container {
		position: relative;
		overflow: hidden;
	  }
	  .image-container img {
		display: block;
		transition: transform 0.2s ease-out;
	  }
	  .image-container:hover img {
		transform: scale(1.1) translate(5px, 5px);
	  }
  
	  .image-container {
	  position: relative;
	}

	.overlay-text {
	  position: absolute;
	  bottom: 0;
	  left: 0;
	  right: 0;
	  background-color: rgba(0, 0, 0, 0.5); /* adjust transparency as needed */
	  color: #fff; /* text color */
	  padding: 10px;
	  z-index: 1; /* layer text on top of image */
	  opacity: 1; /* hide text initially */
	  transition: opacity 0.3s ease-in-out; /* add transition effect */
	}

	.image-container:hover .overlay-text {
	  opacity: -1; /* show text on hover */
	}
	
	.right-container {
	  display: flex;
	  justify-content: center; /* Center horizontally */
	  align-items: center; /* Center vertically */
	  height: 100px; /* Set the height of the container */
	}
	
	.left-container {
	  display: flex;
	  justify-content: center; /* Center horizontally */
	  align-items: center; /* Center vertically */
	  height: 100px; /* Set the height of the container */
	}

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
	
	
	.card {
	  background-color: #f8f9fa;
	  border: none;
	}
	</style>
	
	
    <title>Hire-Me</title>
	
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	
	
  </head>
  <body>
	  <div class="container-xxl py-3 ">
		<!-- Example Code -->

		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg bg-body-white ">
		  <div class="container-fluid">
			<a class="navbar-brand" href="<?=base_url('home')?>">
				<img src="<?=base_url('images/large-images/logo.png')?>" alt="" width="200" height="50">
			</a>
			<button
			  class="navbar-toggler"
			  type="button"
			  data-bs-toggle="collapse"
			  data-bs-target="#navbarSupportedContent"
			  aria-controls="navbarSupportedContent"
			  aria-expanded="false"
			  aria-label="Toggle navigation"
			>

			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
				  <a class="nav-link active" aria-current="page" href="<?=base_url('home')?>">Home</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="<?=base_url('jobs')?>">Jobs</a>
				</li>
				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Reviews
				  </a>
				  <ul class="dropdown-menu">
					<li><a class="dropdown-item" href="<?=base_url('reviews')?>">View Reviews</a></li>
					<li><hr class="dropdown-divider"></li>
					<li><a class="dropdown-item" href="<?=base_url('news/create')?>">Add Review</a></li>
				  </ul>
				</li>

			  </ul>
			  <form class="d-flex" role="search">
				<a class="btn btn-outline-dark" href="#" role="button">Login</a>&nbsp;&nbsp;
				<button class="btn btn-dark">Sign Up</button>
			  </form>
			</div>
		  </div>
		</nav>
