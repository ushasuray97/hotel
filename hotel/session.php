<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"SELECT memberid, name,  email,  phone, password FROM membertl where  memberid= $user_check ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['memberid'];
 
   if(!isset($_SESSION['login_user'])){
    header("location:index.php");
   }
?>