<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Search extends BaseController
{
	
	public function autocomplete() {
    $searchTerm = $this->input->get('term'); // Get the search term from the user input
    $url = "https://www.reed.co.uk/api/1.0/search?keywords=$searchTerm"; // Construct the Reed API URL with the search term
    $ch = curl_init($url); // Initialize a curl session with the API URL

    // Set the curl options for authentication and other settings
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
    ));
    curl_setopt($ch, CURLOPT_USERPWD, "deb7974b-5a07-410d-a047-8998af8482df:"); // Replace with your actual username and password

    $response = curl_exec($ch); // Execute the curl session
    curl_close($ch); // Close the curl session

    $results = json_decode($response, true); // Decode the JSON response into an associative array
    $suggestions = array(); // Initialize an empty array to store the suggestions

    // Loop through the results and add them to the suggestions array
    foreach ($results['results'] as $result) {
        $suggestions[] = array(
            'label' => $result['jobTitle'], // The label will be displayed to the user in the search box
            'value' => $result['jobTitle'] // The value will be used as the search term when the user selects a suggestion
        );
    }

    echo json_encode($suggestions); // Return the suggestions as a JSON array
	
	return view('jobs/search', $data);
}

}