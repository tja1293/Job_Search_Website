<?php

namespace App\Controllers;

use App\Models\JobsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Jobs extends BaseController
{
    public function index()
    {
		//$job = model(JobsModel::class);
		
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

        $data = [
            'jobs'  => $jobs
        ];

        return view('templates/header', $data)
            . view('jobs/index', $data)
            . view('templates/footer');
    }

     public function view($slug = null)
    {
        //$model = model(JobsModel::class);
		
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
		

        if (empty($data['jobs'])) {
            throw new PageNotFoundException('Cannot find the jobs item: ' . $slug);
        }

        $data['employerName'] = $data['jobs']['employerName'];

        return view('templates/header', $data)
            . view('jobs/view', $data)
            . view('templates/footer');
    }
}