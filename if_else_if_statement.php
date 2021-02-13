<?php
	$kitten_image = 1;
	$church_image = 0;
	
	if ($kitten_image == 0) {
		print ("<IMG SRC =images/kitty.jpg>");
	}
	else if ($church_image == 1) {
		print ("<IMG SRC =images/dogy.jpg>");
	}
	else {
		print ("No value of 1 detected");
	}
?>