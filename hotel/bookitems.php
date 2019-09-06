
<?php

include('session.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {


	if (true) {
			
			

		$size= mysqli_real_escape_string($db,$_POST['index']);
		$siz = (int)$size;
		$status="Pending";
		for ($index=1;$index<=$siz;$index++)
		{
				
			$menuid= mysqli_real_escape_string($db,$_POST['menuid'.$index]);
			$quantity= mysqli_real_escape_string($db,$_POST['quantity'.$index]);
			$q=(int)$quantity;
			if($q>0)
			{
			$sql = "SELECT count(orderid)as orderid FROM ordertl ";
			$rs = mysqli_query($db, $sql);
			$orderid=0;
			$count = mysqli_num_rows($rs);
			if ($count > 0) {
				if ($row = $rs->fetch_assoc()) {
					$orderid=$row["orderid"];
					 
				}
			}

			$orderid++;
			echo $orderid;

			$sql = "insert into ordertl(  orderid, memberid,  status)values('$orderid', '$login_session',  '$status')";
			$result = mysqli_query($db,$sql);

			$sql = "insert into menuordertl(  menuid, orderid, quantity)values('$menuid', '$orderid', '$quantity')";
			$result = mysqli_query($db,$sql);
			echo  $sql;
			}
		}



		header("location:memorders.php");
	}
}


?>