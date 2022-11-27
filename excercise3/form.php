<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<style >
		h1{
			color: blue;
			font-family: sans-serif;
		}
		table{
			background-color: lightgreen;

		}
		body{
			background-image: url('img.png');
		}
		p{
			color: yellow;
		}

		tr{
			color: yellow;
		}
td{
			color: yellow;
		}

	</style>
</head>
<body>
<form method="post" action="processor.php">
	<h1 align="center">Enter your inputs on the following form.</h1>
	<br><br><br><br>
	<table align="center" cellpadding="15" cellspacing="15" border="4">
		<tr><th>Email Address</th><td><input type="text" name="email"></td></tr>
		<tr><th>Password</th><td><input type="password" name="password"></td></tr>
		
	</table><br><br><br>
	<p align="center"><input type="submit" name="login" value="login"></p>
	<p align="center"><input type="checkbox" name="remember">Remember Me</p>
</form>
</body>
</html>