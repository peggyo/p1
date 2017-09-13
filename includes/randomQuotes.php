<?php
	// initialize an array of quotes. 
	$quotes = [
		0 => 'A computer once beat me at chess, but it was no match for me at kick boxing. -Emo Philips',
		1 => 'I always wanted to be somebody, but now I realize I should have been more specific. -Lily Tomlin',
		2 => "A deadline is negative inspiration. Still, it's better than no inspiration at all. -Rita Mae Brown",
		3 => 'Ideas come from everything -Alfred Hitchcock',
		4 => 'A book is a device to ignite the imagination. -Alan Bennett'
	];
	
	// the shuffle array function rearranges arrays to a random order - easy to use for choosing a random array value
	shuffle($quotes);
	
	// I am using a var to store the value. Could directly reference in the html if desired.
	$myquote = $quotes[0];

?>