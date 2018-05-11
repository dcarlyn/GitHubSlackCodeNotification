<?php
	/*
		File: get_github_data.php
		Data: 4/16/2018
		Author: David Carlyn
		Description: Takes a Github API URL and returns the response
	*/

	function GetGithubData($api_url)
	{
		//Init curl
		$curl = curl_init();

		//Set Options
		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => $api_url,
			CURLOPT_USERAGENT => 'dcarlyn'
		));

		//Execute and Save
		$response = curl_exec($curl);

		//Close curl
		curl_close($curl);

		//Return JSON decoded response
		return json_decode($response);
	}

?>
