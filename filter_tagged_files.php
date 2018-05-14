<?php
/*
	File: filter_tagged_files.php
	Author: David Carlyn
	Date: 5/11/2018
	Description: This function will take in a list of file pairs and
		     check its content for a tag. If it does not hava the tag,
		     then it is removed from the list.
*/

	include_once 'file_pair.php';

	function FilterTaggedFiles(&$file_pairs)
	{
		$new_file_pairs = array();
		$tag = "Track: dcarlyn2018";

		//Find tagged file pairs
		foreach ($file_pairs as $file_pair)
		{
			if(strpos($file_pair->new_file, $tag) !== false)
			{
				array_push($new_file_pairs, $file_pair);
			}
		}

		//Clear array of file pairs
		$file_pairs = array();

		//Insert into file pairs array
		$file_pairs = $new_file_pairs;


	}

?>


