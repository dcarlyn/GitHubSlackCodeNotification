<?php
	/*
		File: get_file_paths.php
		Date: 4/17/2018
		Author: David Carlyn
		Description: given commits, repo, and user, return an array of file paths

	*/

	include 'get_github_data.php';

	function GetFilePaths($commits, $user, $repo)
	{
		$file_paths = array();

		foreach($commits as $commit)
		{
			$commit_data = GetGithubData('https://api.github.com/repos/' . $user . '/' . $repo . '/commits/' . $commit->id);

			$files = $commit_data->files;

			foreach($files as $file)
			{

				$is_found = false;

				foreach($file_paths as $file_path)
				{
					if($file_path == $file->filename)
					{
						$is_found = true;
					}
				}

				if(!$is_found)
				{
					array_push($file_paths, $file->filename);
				}

			}


		}

		return $file_paths;


	}


?>
