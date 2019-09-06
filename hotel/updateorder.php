
<?php

include('adminsession.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {


	if (true) {
		 

		$oid= mysqli_real_escape_string($db,$_POST['oid']);
		 
		$status= mysqli_real_escape_string($db,$_POST['status']);
		 
		$file_name="";

		 
		$sql = "update  ordertl set status='$status',modion=now() where orderid='$oid'";
		$result = mysqli_query($db,$sql);
		echo   $sql;
		header("location:adminorders.php");
	}
}


?>