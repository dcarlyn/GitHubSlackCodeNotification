<?php
/*
	File: github_authentication.php
	Author: David Carlyn
	Date: 5/13/2018
	Description: Sends verification cridentials to Github to avoid
	lockout from the API.
*/

	function AuthenticateGithub($username, $password)
	{
		$text = "sudo curl -i https://api.github.com -u " . $username . ":" . $password;
		shell_exec($text);

	}

?>
