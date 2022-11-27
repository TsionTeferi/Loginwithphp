<?php
$user="root";
$pword="";
$server="localhost";
$port="3307";
$db="phpcontents";

try {
	$pdo=new PDO("mysql:host=$server;port=$port;dbname=$db",$user,$pword);
	echo "connected successfully!";
	}
catch (PDOException $pe) {
	die("could not connectto the database $db".$pe->getmessage());
}

if(isset($_POST['login'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	if($email=="" or $password==""){
		echo '<br><br><br><br><br><h1 style="color:red">Please fill all the required input places.</h1>';
	}else{
	if(isset($_POST['remember'])){
		setcookie('email',$email,time()+3600);
		setcookie('password',$password,time()+3600);
		$sql="INSERT INTO login(email,password)VALUES(:email,:password)";
		$stmt=$pdo->prepare($sql);
		$stmt->execute(['email'=>$email,'password'=>$password]);
		include 'newpage.php';
	}else{
		$sql="INSERT INTO login(email,password)VALUES(:email,:password)";
		$stmt=$pdo->prepare($sql);
		$stmt->execute(['email'=>$email,'password'=>$password]);
		include 'newpage2.php';
	}
}
}
?>