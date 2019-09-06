<?php include("adminheader.php");?>
<?php include("adminsession.php");?>
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
 
  <table>
    <tr>
      <th>SNO</th>
      <th>Menu Type</th>
      <th>Item Name</th>
      <th>Item Price</th>
      <th>Item Quantity</th>
      <th>Item Description</th>
      <th>Ordered Count</th>
      <th></th>
      <th>Amount</th>
      
    </tr>
    <?php
    
    $sql1 = "SELECT orderid, memberid, createdon, status, modion FROM ordertl where status='Pending' order by orderid desc";
$rs1 = mysqli_query($db, $sql1);

$count1 = mysqli_num_rows($rs1);
if ($count1 > 0) {
    while ($row1 = $rs1->fetch_assoc()) {
    	$orderid=$row1["orderid"];
    	$createdon=$row1["createdon"];
    	$status=$row1["status"];
    	?>
    	<form action="updateorder.php" method="post">
    	 <tr>
        	<td colspan="9" bgcolor="#bdc722">
        	<strong>Ordered Date <?php echo $createdon;?>: Status <?php echo $status;?></strong>
        	<input type="hidden" name="oid" value="<?php echo $orderid;?>">
        	</td>
        </tr>

<?php 


$sql = "SELECT m.menuid as menuid, m.menutype as menutype, m.itemname as itemname, m.itemprice as itemprice, m.itemquantity as itemquantity, m.image as image, m.itemdesc as itemdesc,mo.menuorderid, mo.menuid as momenuid, mo.orderid, mo.quantity as mouantity FROM menutl m ,menuordertl mo where m.menuid=mo.menuid and mo.orderid='$orderid'";
$rs = mysqli_query($db, $sql);
$index = 0;
$count = mysqli_num_rows($rs);
if ($count > 0) {
	$totalamount=0;
    while ($row = $rs->fetch_assoc()) {
        $index ++;
        $menuid=$row["menuid"];
        $menutype=$row["menutype"];
        $itemname=$row["itemname"];
        $itemprice=$row["itemprice"];
        $itemquantity=$row["itemquantity"];
        $image=$row["image"];
        $itemdesc=$row["itemdesc"];
        $mouantity=$row["mouantity"];
        $total=(int)$mouantity*(int)$itemprice;
        $totalamount=$totalamount+(int)$total;
        
        ?>
       
    <tr>
      <td><?php echo $index;?></td>
      <td><?php echo $menutype;?></td>  
      <td><?php echo $itemname;?></td>
      <td><?php echo $itemprice;?></td>  
       <td><?php echo $itemquantity;?></td>  
       <td><?php echo $itemdesc;?></td>  
           <td><?php echo $mouantity;?></td>  
        <td><img src="images/<?php echo $image;?>" height="100" width="100"/></td>
        <td><?php echo  $total;?></td>
        
    </tr>
 
    <?php }?>
    
     <tr>
        	<td colspan="9" bgcolor="#1bbd5c">
        	<strong>Total Amount is : <?php echo $totalamount;?></strong>
        	</td>
        </tr>
         <tr>
        	<td colspan="9">
        		<input type="submit" value="Delivered" name="status">
        	
        	</td>
        </tr>
        </form>
    
    <?php }}}?>
    </table>
  
    
    </div>
    
    
    </div>
    
      </div>
     

<?php include("footer.php");?>