<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['adminlogin_user'];
   
   $ses_sql = mysqli_query($db,"SELECT adminid, name, emailid, password FROM admintl where  adminid= $user_check ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['adminid'];
  // echo  $login_session;
 
   if(!isset($_SESSION['adminlogin_user'])){
    header("location:index.php");
   }
?>