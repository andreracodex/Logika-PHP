<!doctype html>
<html>
	<head> 
		<title>Variabel</title>
	</head>
	<body>
		<h1>Perubahan Variabel</h1>
		<?php
			$total_spent =101;
			$special_key ='SK12345';

			
			
			if ($total_spent ==100 || $special_key =='SK1s2345') {
				print("Discount Granted!");
			}
			else {
				print("No discount for you!");
			}

		?>
	</body>
</html>