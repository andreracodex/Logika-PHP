<!doctype html>
<html>
	<head> 
		<title>Variabel</title>
	</head>
	<body>
		<h1>Perubahan Variabel</h1>
		<?php
			$first_number = 10;
			$direct_text = 'My variable contains the value of ';
			print($direct_text . $first_number);

			$first_number = 30;
			print ('<br/>My variable contains the value of ' . $first_number);

		?>
	</body>
</html>