<!doctype html>
<html>
	<head> 
		<title>Variabel</title>
	</head>
	<body>
		<h1>Perubahan Variabel</h1>
		<?php
			$first_number = 10;
			$second_number = 20;
			$third_number = 100;
			$sum_total = $first_number + $second_number;
			$direct_text = 'Total is = ';
			print ($direct_text . $sum_total);
			
			//Version tambah kurang
			$sum_total = ($third_number - $second_number) + $first_number;
			print ("<br>(100-20)+10 = ".$direct_text . $sum_total);
			
			$sum_total = $third_number - ($second_number + $first_number);
			print ("<br>100-(20+10) = ".$direct_text . $sum_total);
			
			// versi multiply perkalian
			$first_number = 10;
			$second_number = 20;
			$sum_total = $second_number * $first_number;
			print ("<br> Multiply 20 * 10 = ".$direct_text.$sum_total);

			// versi divide bagi
			$first_number = 10;
			$second_number = 20;
			$sum_total = $second_number / $first_number;
			print ("<br> Divide 20/10 = ".$direct_text.$sum_total);
			
			
			$first_number = 10;
			$second_number = 20;
			$sum_total = $first_number / $second_number;
			print ("<br> Divide 10/20 = ".$direct_text.$sum_total);
			
			//versi campuran
			$first_number = 10;
			$second_number = 20;
			$third_number = 100;
			$sum_total = $third_number - $second_number / $first_number;
			print ("<br> 100 - 20 / 10".$direct_text.$sum_total);

			//Version oplosan
			$sum_total = $third_number - ($second_number / $first_number);
			print ("<br> 100 - (20 / 10)".$direct_text.$sum_total);

			//Version oplosan2
			$sum_total = ($third_number - $second_number) / $first_number;
			print ("<br> (100 - 20) / 10".$direct_text.$sum_total);

			//floatval
			$first_number = 10.2;
			$second_number = 2.5;
			$sum_total = $second_number + $first_number;
			print ("<br>".$direct_text.$sum_total);

		?>
	</body>
</html>