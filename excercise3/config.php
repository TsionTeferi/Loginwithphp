<?php
$user="root";
$pword="";
$server="localhost";
$port="3307";
$db="phpcontents";

try {
	$pdo=new PDO("mysql:host=$server;port=$port;dbname=$db",$user,$pword);
	echo "connected successfully!";
	if(isset($_POST['login'])){
			$email=$_POST['email'];
			$pword=$_POST['password'];
			$stmt=$pdo->prepare("INSERT INTO login (email,password)
		VALUES ($email,$pword)");

		}
	}
catch (PDOException $pe) {
	die("could not connectto the database $db".$pe->getmessage());
}
?>