<?php
	/* File: get_file_pairs.php
	   Date: 4/19/2018
	   Author: David Carlyn
	   Description: Given filenames, user, repo, and commits a list of file pairs will be returned.
	   These file pairs will have the new and the old versions of the file in them.
	*/

	include 'file_pair.php';

	function GetFilePairs($file_names, $commits, $user, $repo)
	{
		$file_pairs = array();

		//For each file
		foreach ($file_names as $file_name)
		{
			//New file pair
			$file_pair = new stdClass();

			//Store name in file_pair
			$file_pair->file_name = $file_name;
			//echo $file_name;

			//Getting file data
			$file_data = GetGithubData('https://api.github.com/repos/' . $user . '/' . $repo . '/commits?path=' . $file_name);

			//Get new file contents
			$new_file_contents = GetGithubData('https://api.github.com/repos/' . $user . '/' . $repo . '/contents/' . $file_name . '?ref=' . $file_data[0]->sha);

			//Grab contents and decode
			$new_file = base64_decode(str_replace("\n", "", $new_file_contents->content));

			//Store in file pair
			$file_pair->new_file = $new_file;

			//echo $new_file;

			//Get old file by avoiding ones from the same commit payload
			foreach ($file_data as $file)
			{
				//print_r($commits);

				$is_found = false;

				//Checking commits from payload
				foreach($commits as $commit)
				{
					//Is this file in this commit?
					if($commit->id == $file->sha)
					{
						$is_found = true;
					}
				}

				if(!$is_found)
				{
					//Get new file contents
					$old_file_contents = GetGithubData('https://api.github.com/repos/' . $user . '/' . $repo . '/contents/' . $file_name . '?ref=' . $file->sha);

					//Grab contents and decode
					$old_file = base64_decode(str_replace("\n", "", $old_file_contents->content));

					//Store in file pair
					$file_pair->old_file = $old_file;

					//Insert into file_pairs
					array_push($file_pairs, $file_pair);

					break;
				}
			}

		}

		return $file_pairs;
	}


?>
