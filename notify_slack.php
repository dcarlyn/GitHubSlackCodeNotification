<?php
	//File: notify_slack.php
	//Date: 4/23/2018
	//Author: David Carlyn
	//Description: Given Text, will send to Slack

	include_once 'slack_encode.php';

	function NotifySlack($text)
	{
		$fix_double_quotes = str_replace('"', '\"', $text);
		$fix_single_quotes = str_replace("\'", "\'\\\'\'", $fix_double_quotes);
		$processed_text = "./notify_slack.sh '" . $fix_single_quotes . "'";
		echo $processed_text;
		shell_exec($processed_text);
	}

?>
