<?php

namespace App\Controllers;

use App\Models\JobsModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\IncomingRequest;
use App\Models\NewsModel;

class Jobs extends BaseController
{
	

	//------------------------------------------------------------------------------------------------------
	// ### This function returns all jobs from the API ###
	//------------------------------------------------------------------------------------------------------
    public function alljobs()
    {
		// Helper form function
		helper('form');
		
		// This gets the search input by user
		$post = $this->request->getPost(['keyword', 'location']);

		
		
		// Set connection details
		$login = 'deb7974b-5a07-410d-a047-8998af8482df';
		$password = '';
		
		// Adding a variable into the search jobs API from a User input search box.

		$url = 'https://www.reed.co.uk/api/1.0/search?distancefromlocation=1&keywords=' . $post['keyword'] . '&locationName=' . $post['location'];
																								      // adds it into the API
		
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

        $data = [
            'jobs'  => $jobs
        ];
		
		
		

        return view('templates/header-new', $data)
            . view('jobs/all-jobs-new', $data)
            . view('templates/footer');
    }
	
	//------------------------------------------------------------------------------------------------------
	// ### This function returns all jobs with the same keyword as input by the user/URL ###
	//------------------------------------------------------------------------------------------------------
	public function jobskeyword($keyword)
    {
		
		helper('form');
		
		
		$post = $this->request->getPost(['keyword', 'location']);

		
		
		// Set connection details
		$login = 'deb7974b-5a07-410d-a047-8998af8482df';
		$password = '';
		

		$url = 'https://www.reed.co.uk/api/1.0/search?distancefromlocation=1&keywords=' . $keyword;
		
		
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

        $data = [
            'jobs'  => $jobs
        ];
		
		
		

        return view('templates/header-new', $data)
            . view('jobs/all-jobs-new', $data)
            . view('templates/footer');
    }


	//------------------------------------------------------------------------------------------------------
	// ### This function returns all jobs with the same Location as input by the user/URL ###
	//------------------------------------------------------------------------------------------------------
	public function jobslocation($location)
    {
		
		helper('form');
		
		
		$post = $this->request->getPost(['keyword', 'location']);

		
		
		// Set connection details
		$login = 'deb7974b-5a07-410d-a047-8998af8482df';
		$password = '';
		

		$url = 'https://www.reed.co.uk/api/1.0/search?distancefromlocation=1&locationName=' . $location;
		
		
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

        $data = [
            'jobs'  => $jobs
        ];
		


        return view('templates/header-new', $data)
            . view('jobs/all-jobs-new', $data)
            . view('templates/footer');
    }
	

	//------------------------------------------------------------------------------------------------------
	// ### This function returns the jobID from the API and inserts it into the Job Info API call to access data on a particular job. ###
	//------------------------------------------------------------------------------------------------------
     public function onejob($jobID = null)
    {
        // Set connection details
		$login = 'deb7974b-5a07-410d-a047-8998af8482df';
		$password = '';
		//$url = 'https://www.reed.co.uk/api/1.0/jobs/49434707';
		$url = 'https://www.reed.co.uk/api/1.0/jobs/' . $jobID;


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


		$model = model(NewsModel::class);
        //$data['jobs'] = $jobs;

		$data = [
            'news'  => $model->getNews(),
            'title' => 'News archive',
			'jobs' => $jobs
        ];

        return view('templates/header-new', $data)
            . view('jobs/one-job-new', $data)
            . view('templates/footer');
    }

	//------------------------------------------------------------------------------------------------------
	// ### This function recieves the users locartion and inserts it into the API to display josb from (users location) ###
	//------------------------------------------------------------------------------------------------------
	public function nearjobs($city = null)
	{
		helper('url'); 
		
		

		
		// Set connection details
		$login = 'deb7974b-5a07-410d-a047-8998af8482df';
		$password = '';
		
		// Adding a variable into the search jobs API from a User input search box.
		//$url = 'https://www.reed.co.uk/api/1.0/search?keywords=' . $post['keyword'] . " " . $post['location'];
		$url = 'https://www.reed.co.uk/api/1.0/search?distancefromlocation=1&locationName=' . $city;
		print $url;
		
		
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

        $data = [
            'jobs'  => $jobs
        ];

        return view('templates/header', $data)
            . view('jobs/jobs_home', $data)
            . view('templates/footer');
    }
	
	
	### This function returns the jobID from the API and 
	//inserts it into the Job Info API call to access data on a particular job. ###
	public function search($search = null)
    {
		helper('form');
				
		$post = $this->request->getPost(['keyword', 'location']);
		
		if(isset($_POST['query'])){
			$searchTerm = $_POST['query'];
			$url = 'https://www.reed.co.uk/api/1.0/search?keywords='.$searchTerm;
			
			$login = 'deb7974b-5a07-410d-a047-8998af8482df';
			$password = '';
			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($ch, CURLOPT_USERPWD, "$login:$password");
			$result = curl_exec($ch);
			curl_close($ch);
			$data = json_decode($result);
			$i=0;
			
		}
		
	return view('templates/header', $data)
            . view('jobs/search', $data)
            . view('templates/footer');
    }
	
	//------------------------------------------------------------------------------------------------------
	// ### This function opens up the homepage view ###
	//------------------------------------------------------------------------------------------------------
	public function homepage()
	{
		
		return view('templates/header-new')
            . view('jobs/homepage-new')
            . view('templates/footer');
		
	}
	

	//------------------------------------------------------------------------------------------------------
	// ### This function is the live search, it uses ajax to send to the server each character pressed ###
	//------------------------------------------------------------------------------------------------------
	
	public function livesearch()
	{
		if(isset($_GET['query'])){
			$searchTerm = $_GET['query'];
			$url = 'https://www.reed.co.uk/api/1.0/search?keywords='.$searchTerm;
			
			$login = 'deb7974b-5a07-410d-a047-8998af8482df';
			$password = '';
			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($ch, CURLOPT_USERPWD, "$login:$password");
			$result = curl_exec($ch);
			curl_close($ch);
			$data = json_decode($result);
			
			
			
			$i=0;
			
			

			if($data && isset($data->results)){
				foreach($data->results as $item){
					

					echo '<button type="button" class="btn btn-light"><i class="bi bi-search"></i>&nbsp;&nbsp;&nbsp;<a>'.substr($item->jobTitle, 0, 20).'</a></button><br>';


					$i++;
					if($i==10) break;
				}
			}
			else{
				echo '<p>No results found</p>';
			}
		}
	}


	
	

	
	



	


}