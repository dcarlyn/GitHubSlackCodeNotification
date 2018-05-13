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
		$tag = "Track: dcarlyn2018";
		$delete_positions = array();

		//Find file pairs to delete
		for ($i = 0; $i < count($file_pairs); $i++)
		{
			if(strpos($file_pairs[$i]->new_file, $tag) === false)
			{
				array_push($delete_positions, $i);
			}
		}

		//Delete non-tagged files
		for($j = count($delete_positions) - 1; $j >= 0; $j--)
		{
			unset($file_pairs[$j]);
		} 

	}

?>

