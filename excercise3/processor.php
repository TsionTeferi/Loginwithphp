<?php
if(isset($_POST['login'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	if($email=="" or $password==""){
		echo '<br><br><br><br><br><h1 style="color:red">Please fill all the required input places.</h1>';
	}else{
	if(isset($_POST['remember'])){
		setcookie('email',$email,time()+3600);
		setcookie('password',$password,time()+3600);
		include 'newpage.php';
	}else{
		include 'newpage2.php';
	}
}
}
?>