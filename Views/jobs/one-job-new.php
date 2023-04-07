<?php


$imgs = array(
	"https://cms-assets.tutsplus.com/uploads/users/810/profiles/19338/profileImage/profile-square-extra-small.png",
	"https://profilemagazine.com/wp-content/uploads/2020/04/Ajmere-Dale-Square-thumbnail.jpg",
	"https://helios-i.mashable.com/imagery/authors/00CbVhBRGwkeD0ePVTmvt7h/image.fill.size_1200x1200.v1667472843.png",
	"https://artstartsto.com/wp-content/uploads/2021/05/profile-pic-square.jpg",
	"https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZmlsZSUyMHBpY3R1cmV8ZW58MHx8MHx8&auto=format&fit=crop&w=1000&q=60",
	"https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDJ8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=400&q=60",
	"https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80",
	"https://images.unsplash.com/photo-1530047198515-516ff90fc4d9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
);



?>

<style>
	.rating-color{
		color:#fbc634 !important;
	}
	
	.rounded-circle{
	  box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);

	}
	
	.box-me{
	  box-shadow: 2px 2px 4px rgba(0, 0, 0, 10);

	}
</style>

<div class="container ">
	<br />
	
	

	<div class="container bg-white"  >
		<!-- Content for first nested container goes here -->
		<img src="<?=base_url('images/company-images/banner-main.png')?>" height="100px" class="img-fluid" alt="...">
	  </div>
	  
	<div class="row">
		<div class="col-md-8">
		<br />
		  <div class="container" >
			<!-- Content for first nested container goes here -->
				
			<div class="container bg-white px-4">
				<!-- Content for second nested container goes here -->
				<div class="col-md-12">
				  <h1 class="mb-3 text-center"><?php echo $jobs->jobTitle;?></h1>
				  <h3 class="lead mb-4 text-center text-muted"><u><?php echo $jobs->employerName;?></u></h3>
				  <h5 class="mb-3 text-start">Job Requirements</h5>
				  <p class="text-md-left"><?php echo $jobs->jobDescription;?></p>
				  <a href="#" class="btn btn-primary btn-lg">Apply Now</a>
				  <a href="#" class="btn btn-primary btn-lg">Save Job</a>
				</div>
			</div>
			
				
			<!-- End -->
		  </div>
		  <br />
		</div>
		<div class="col-md-4 border-start bg-light">
			<br />
			
			<div class="container" id="featured-3">
				<h2 class="pb-2 border-bottom text-muted text-center">Reviews for <br /><strong><?php echo $jobs->employerName;?></strong></h2>
				<div class="row g-4 py-5 row-cols-1 row-cols-lg-1">
				
					<div class="container" style="height: 900px; overflow-y: scroll;">
					  <!-- Your content here -->
					
													
						 <?php if (! empty($news) && is_array($news)): ?>

							<?php foreach ($news as $news_item): 
							
								$randomimgIndex = rand(0, count($imgs) - 1);
								$randomimg = $imgs[$randomimgIndex];?>
								
								<div class="feature col text-center">
									<div class="feature-icon bg-light text-center">
									  <img class="rounded-circle border border-dark" src="<?php echo $randomimg ?>" height="100px" width="100px" >
									  
									</div>
									<br />
									<h5>"<?= esc($news_item['slug']) ?>"</h5>
									<p class="text-justify"><i>"<?= esc($news_item['body']) ?>"</i></p>
									<p class="text-muted" >- <?= esc($news_item['title']) ?> -</p>
									<p><i class="fa fa-star rating-color"></i><i class="fa fa-star rating-color"></i><i class="fa fa-star rating-color"></i><i class="fa fa-star rating-color"></i><i class="fa fa-star rating-color"></i></p>
								 </div>
								 <br />
								 <hr class="box-me">

							<?php endforeach ?>

						<?php else: ?>

							<h3>No Reviews</h3>

							<p>Unable to find any Reviews for you.</p>

						<?php endif ?>

						
						
					</div>
	
	
				</div>
			</div>

			
			<br />
		</div>
		<br />
    </div>
  </div>
</div>
