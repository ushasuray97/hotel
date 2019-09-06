
<?php

include('config.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    if (true) {
   
        $name= mysqli_real_escape_string($db,$_POST['name']);
       
        
       
        $email= mysqli_real_escape_string($db,$_POST['email']);
       
        $phone=mysqli_real_escape_string($db,$_POST['phone']);
        $password=mysqli_real_escape_string($db,$_POST['password']);
        
        $sql = "insert into membertl(name,  email,  phone, password)values('$name', '$email',  '$phone', '$password')";
        echo  $sql;
        $result = mysqli_query($db,$sql);
		
    header("location:login.php");
    }
}
    
    
?>