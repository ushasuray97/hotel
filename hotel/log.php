<?php
include("config.php");

$error="";
if($_SERVER["REQUEST_METHOD"] == "POST") {
	// username and password sent from form

	$myusername = mysqli_real_escape_string($db,$_POST['username']);
	$mypassword = mysqli_real_escape_string($db,$_POST['password']);

	$sql = "SELECT adminid, name, emailid, password FROM admintl WHERE emailid = '$myusername' and password = '$mypassword'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);



	$count = mysqli_num_rows($result);

	 
	if($count >0) {
		$adminid=$row['adminid'];
		 
		session_start();
		 
		$_SESSION['adminlogin_user'] = $adminid;
		 
		header("location:adminhome.php");
		 



	}else {
		$sql = "SELECT memberid, name,  email phone, password FROM membertl WHERE email = '$myusername' and password = '$mypassword'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);



		$count = mysqli_num_rows($result);

		 
		if($count >0) {
			$memberid=$row['memberid'];
			 
			session_start();
			 
			$_SESSION['login_user'] = $memberid;
			 
			header("location:memberhome.php");
			 



		}else {
			header("location:login.php");
		}
	}
}
?>