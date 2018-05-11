<?php
	//File slack_encode.php
	//Date: 4/24/2018
	//Author: David Carlyn
	//Description: encodes texts to be passed through json and to slack

	function SlackEncode($text)
	{
		$final_text = str_replace('\"','\"\"\"', $text);
		return $final_text;
	}
?>
