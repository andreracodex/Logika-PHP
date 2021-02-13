<!doctype html>
<html>
	<head> 
		<title>Variabel</title>
	</head>
	<body>
		<h1>Perubahan Variabel</h1>
		<?php
			$username ='user';
			$password ='password1';
			
			
			if ($username =='user' && $password =='password') {
				print("Welcome back!");
			}
			else {
				print("Invalid Login Detected");
			}

		?>
	</body>
</html>