<?php
	//File: set_file_pairs_diff
	//Date: 4/23/2018
	//Author: David Carlyn
	//Description: given an array of file pairs with an old and new
	//file, the diff will be calculated and assigned
	/*

		This is the function to change to use your own diff method

	*/

	function SetFilePairsDiff(&$file_pairs)
	{
		foreach($file_pairs as &$file_pair)
		{
			//Create old file in server
			$old_file = fopen("old_file.txt", "w");
			fwrite($old_file, $file_pair->old_file);
			fclose($old_file);

			//Create new file in server
			$new_file = fopen("new_file.txt", "w");
			fwrite($new_file, $file_pair->new_file);
			fclose($new_file);

			//Run
			$diff = shell_exec("diff old_file.txt new_file.txt");

			$diff_file = fopen("diff_file.txt", "w");
			fwrite($diff_file, $diff);
			fclose($diff_file);

			//Save diff
			$file_pair->diff = $diff;
		}
	}
?>
