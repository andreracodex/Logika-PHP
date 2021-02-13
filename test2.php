<?php
	$total_spent = 99;
	$discount_total = 100;
	if ($total_spent >= $discount_total) {
		print("10 percent discount applies to this order!");
	}
	else if($total_spent <= $discount_total) {
		print("Sorry – No discount!");
	}
?>