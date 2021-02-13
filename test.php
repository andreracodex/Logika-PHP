<?php
	$correct_username = 'logmein';
	$what_visitor_typed = 'logmeins';
	
	if ($what_visitor_typed != $correct_username) {
		print("You're not a valid user of this site!");
	}
	else {
		print("Welcome back, friend!");
	}

?>