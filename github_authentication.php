<?php
/*
	File: github_authentication.php
	Author: David Carlyn
	Date: 5/13/2018
	Description: Sends verification cridentials to Github to avoid
	lockout from the API.
*/

	function AuthenticateGithub($client_id, $client_secret)
	{
		$text = "sudo curl 'https://api.github.com/users/dcarlyn?client_id=".$client_id."&client_secret=".$client_secret."'";
		shell_exec($text);

	}

?>
