<?php
	//File: main.php
	//Date: 4/26/2018
	//Author: David Carlyn
	//Description: main process


	//Includes
	include_once 'get_file_paths.php';
	include_once 'get_file_pairs.php';
	include_once 'set_file_pairs_diff.php';
	include_once 'notify_slack.php';

	//Get Webhook
	$webhook_file = fopen("webhook_file.txt", "r");
	$webhook_commit = json_decode(fread($webhook_file, filesize("webhook_file.txt")));
	fclose($webhook_file);

	//Commits
	$commits = $webhook_commit->commits;

	//Repository
	$repository = $webhook_commit->repository;

	//Repo name and username
	$repo = $repository->name;
	$user = $repository->owner->login;

	$file_paths = GetFilePaths($commits, $user, $repo);

	$file_pairs = GetFilePairs($file_paths, $commits, $user, $repo);

	SetFilePairsDiff($file_pairs);

	//Set Slack Messages
	foreach($file_pairs as $file_pair)
	{
		$text = "Changes have been made to: " . $file_pair->file_name . "\n";
		$text .= "diff: \n";
		$text .= $file_pair->diff;

		NotifySlack($text);
	}



?>