<?php

function getDataFromAPI($url){
    $client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	
	return json_decode($response);
}

function postOrPUTDATA($method, $url, $data){
	//open connection
	$ch = curl_init();

	switch ($method){
		case "POST":
		
		   if ($data)
		    curl_setopt($ch,CURLOPT_URL, $url);
			curl_setopt($ch,CURLOPT_POST, count($data));
			curl_setopt($ch,CURLOPT_POSTFIELDS, $data);
		   break;
		default:
		   if ($data)
			  $url = sprintf("%s?%s", $url, http_build_query($data));
	 }

	//set the url, number of POST vars, POST data


	//So that curl_exec returns the contents of the cURL; rather than echoing it
	curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

	//execute post
	$result = curl_exec($ch);
	echo $result;
}