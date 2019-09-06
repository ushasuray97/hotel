
<?php

include('adminsession.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    if (true) {
    	
      
        $menutype= mysqli_real_escape_string($db,$_POST['menutype']);
       
        $itemname= mysqli_real_escape_string($db,$_POST['itemname']);
        $itemprice= mysqli_real_escape_string($db,$_POST['itemprice']);
        $itemquantity= mysqli_real_escape_string($db,$_POST['itemquantity']);
        $itemdesc= mysqli_real_escape_string($db,$_POST['itemdesc']);
       
        $file_name="";
      if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
     
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
             
         $sql = "insert into menutl( menutype, itemname, itemprice, itemquantity, image, itemdesc)values( '$menutype', '$itemname', '$itemprice', '$itemquantity', '$file_name', '$itemdesc')";
        $result = mysqli_query($db,$sql);
		echo   $sql;
     header("location:adminmenu.php");
    }
}
    
    
?>