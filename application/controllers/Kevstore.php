<?php
class Kevstore extends CI_Controller{

public function api_endpoints(){

// kvstore API url
$url = 'https://kvstore.p.rapidapi.com/collections';

// Collection object
$data = [
  'collection' => 'RapidAPI'
];

// Initializes a new cURL session
$curl = curl_init($url);

// Set the CURLOPT_RETURNTRANSFER option to true
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Set the CURLOPT_POST option to true for POST request
curl_setopt($curl, CURLOPT_POST, true);

// Set the request data as JSON using json_encode function
curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));

// Set custom headers for RapidAPI Auth and Content-Type header
curl_setopt($curl, CURLOPT_HTTPHEADER, [
  'X-RapidAPI-Host: kvstore.p.rapidapi.com',
  'X-RapidAPI-Key: 22e03d3b23msh2e7c8996f0f51bbp1a0db8jsn741997ff4bf9',
  'Content-Type: application/json'
]);

// Execute cURL request with all previous settings
$response = curl_exec($curl);

// Close cURL session
curl_close($curl);

echo $response . PHP_EOL;



}

public function get_results_endpoints(){

	$url = 'https://kvstore.p.rapidapi.com/collections';
$collection_name = 'RapidAPI';
$request_url = $url . '/' . $collection_name;

$curl = curl_init($request_url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
  'X-RapidAPI-Host: kvstore.p.rapidapi.com',
  'X-RapidAPI-Key: 22e03d3b23msh2e7c8996f0f51bbp1a0db8jsn741997ff4bf9',
  'Content-Type: application/json'
]);

$response = curl_exec($curl);
curl_close($curl);

echo $response . PHP_EOL;

}


public function display(){
	$this->load->view('request_view');	

	if (isset($_GET['query']) && $_GET['query'] != '') {
  $url = 'https://contextualwebsearch-websearch-v1.p.rapidapi.com/api/Search/NewsSearchAPI';
  $query_fields = [
    	    'autoCorrect' => 'true',
    	    'pageNumber' => 1,
    	    'pageSize' => 10,
    	    'safeSearch' => 'false',
    	    'q' => $_GET['query']
  ];

  $curl = curl_init($url . '?' . http_build_query($query_fields));
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_HTTPHEADER, [
    	    'X-RapidAPI-Host: kvstore.p.rapidapi.com',
    	    'X-RapidAPI-Key: 22e03d3b23msh2e7c8996f0f51bbp1a0db8jsn741997ff4bf9'
  ]);
  $response = json_decode(curl_exec($curl), true);
   $news = $response['value'];

  curl_close($curl);

}
}

}

?>
