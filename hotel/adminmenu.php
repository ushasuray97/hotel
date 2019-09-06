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
      <th></th>
      
    </tr>
    <?php


$sql = "SELECT menuid, menutype, itemname, itemprice, itemquantity, image, itemdesc FROM menutl";
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
    </tr>
    <?php }}?>
    </table>
    </div>
    
    
    </div>
    
      </div>
     

<?php include("footer.php");?>