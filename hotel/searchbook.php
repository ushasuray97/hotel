<?php include("memheader.php");?>
<?php include("session.php");?>
<br><br><br><br><br><br>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<div class="container">
    <div class="section-title text-center">
    <p>Menu Items are</p>
     <div style="overflow-x:auto;">
   <form action="bookitems.php" method="post">
  <table>
    <tr>
      <th>SNO</th>
      <th>Menu Type</th>
      <th>Item Name</th>
      <th>Item Price</th>
      <th>Item Quantity</th>
      <th>Item Description</th>
      <th></th>
      <th></th>
      
    </tr>
    <?php

$menutype=$_GET["menutype"];
$sql = "SELECT menuid, menutype, itemname, itemprice, itemquantity, image, itemdesc FROM menutl where menutype='$menutype'";
$rs = mysqli_query($db, $sql);
$index = 0;
$count = mysqli_num_rows($rs);
if ($count > 0) {
    while ($row = $rs->fetch_assoc()) {
        $index ++;
        $menuid=$row["menuid"];
        $menutype=$row["menutype"];
        $itemname=$row["itemname"];
        $itemprice=$row["itemprice"];
        $itemquantity=$row["itemquantity"];
        $image=$row["image"];
        $itemdesc=$row["itemdesc"];
        ?>
    <tr>
      <td><?php echo $index;?></td>
      <td><?php echo $menutype;?></td>  
      <td><?php echo $itemname;?></td>
      <td><?php echo $itemprice;?></td>  
       <td><?php echo $itemquantity;?></td>  
       <td><?php echo $itemdesc;?></td>  
        <td><img src="images/<?php echo $image;?>" height="100" width="100"/></td>
        <td>
        	<input type="number" name="quantity<?php echo $index;?>" value="0" >
        	<input type="hidden" name="menuid<?php echo $index;?>" value="<?php echo  $menuid;?>">
        </td>
    </tr>
 
    <?php }?>
    
       <tr>
    	<td colspan="8">
    	
    		 <input type="submit" value="Book" class="btn btn-success" >
    		 <input type="hidden" name="index" value="<?php echo $index;?>">
    	</td>
    </tr>
    <?php }?>
    </table>
    </form>
    
    </div>
    
    
    </div>
    
      </div>
     

<?php include("footer.php");?>