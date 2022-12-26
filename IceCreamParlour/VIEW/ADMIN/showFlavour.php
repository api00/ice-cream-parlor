<?php
session_start();
?>
<?php
if(($_SESSION["RULE"])=="CUSTOMER")
{
    header("Location: ../Login.php");
die();

}

?>
<?php  

include "../../MODEL/dbconnect.php";
require "../../CONTROLLER/Includes/header.php";
require "../../CONTROLLER/Includes/admin_sidebar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
#apartment-details {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#apartment-details td, #apartment-details th {
  border: 1px solid #ddd;
  padding: 8px;
}
#apartment-details tr{
	transition: all 0.6s;
}

#apartment-details tr:nth-child(even){background-color: #f2f2f2;}

#apartment-details tr:hover {background-color: #ddd;}

#apartment-details th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: brown;
  color: white;
}
	</style>
</head>
<body>
    
<?php 

?>

       


 
<table id="apartment-details">
	<thead>
		<tr style="padding:5px; background-color:yellow;">
			
			<th >  Name</th>
			<th>SERIAL NUMBER</th>
			<th>PORTION</th>
			<th>INGREDIENTS</th>
			<th>PRICE</th>
            <th>image</th>
		
            

		</tr>
	</thead>
	<tbody>
    <?php 
     $conn = connect();
     $s = oci_parse($conn, "select * FROM MENUCARD");
     oci_execute($s);
       while ($value = oci_fetch_assoc($s))
       {
          ?>
			<tr>
            <td><?php echo $value["INAME"] ?></td>
            <td><?php echo $value['SERIAL_NUMBER'] ?></td>
				
				<td><?php echo $value['PORTION']?></td>
				<td><?php echo $value['INGREDIENTS'] ?></td>
                <td><?php echo $value["PRICE"] ?></td>

                <td><img src="../images/<?php echo $value["IMAGE"]?>" height="100px" width="100px" alt="" srcset=""></td>

              
                
				<td><a href="../../CONTROLLER/AdminActions/deleteIceCream.php?SERIAL_NUMBER=<?php echo $value['SERIAL_NUMBER'] ?>" onclick="return confirm('Are you sure want to delete this ?')">delete</a></td> 
   

				
				
			</tr>
			
            <?php } ?>
		

	</tbody>
	

</table>

<?php require "../../CONTROLLER/Includes/footer.php";?>
</body>
</html>