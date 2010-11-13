<?php

	/*
		Name:			revision.php
		Author:			Shadiku Izayoi
		Description:	This file is a simple script that returns the current
						version of the Danbooru binaries from Subversion.
		License:		Creative Commons BY-NC-SA - 3.0
	*/

	// The filename of the current subversion database.
	$filename = "/home/gensokyo/svn/danbooru-desktop/db/current";
	
	// Open the file for reading.
	$handle = fopen($filename, "r");
	
	// Read the entire file.
	$contents = fread($handle, filesize($filename));
	
	// Close the file handle.
	fclose($handle);

	// Print contents.
	echo($contents);

?>