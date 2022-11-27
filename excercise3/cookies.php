<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Saved Cookies</title>
	<style >
	
		body{
			background-image: url('img3.png');
		}
		

	</style>
</head>
<body>
	<br><br><br><br><h1 style="color:darkgreen;" align="center"><?php
foreach ($_COOKIE as $key => $value)
	print( "<p> $key = $value</p>");		
?></h1></body>
</html>