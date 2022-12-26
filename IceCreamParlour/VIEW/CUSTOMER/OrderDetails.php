<?php
session_start();
?>
<?php
if(($_SESSION["RULE"])!="CUSTOMER")
{
    header("Location: ../Login.php");
die();

}

?>
<?php  

include "../../MODEL/dbconnect.php";
require "../../CONTROLLER/Includes/header.php";
require "../../CONTROLLER/Includes/sidebar_links.php";
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
			
			<th >  NAME</th>
			<th> SERIAL</th>
			<th>EMAIL</th>
			<th>ICE CREAM TOCKEN NUMBER</th>
		
		
            

		</tr>
	</thead>
	<tbody>
    <?php 

    $id =$_SESSION["PERSONID"];
     $conn = connect();
     $s = oci_parse($conn, "select CUS_SERIAL,CUS_NAME,CUS_EMAIL,SERIAL_NUMBER FROM MENUCARDORDERS where CUS_SERIAL='$id'");
     oci_execute($s);
       while ($value = oci_fetch_assoc($s))
       {
          ?>
			<tr>
            <td><?php echo $value["CUS_NAME"] ?></td>
            <td><?php echo $value['CUS_SERIAL'] ?></td>
				
				<td><?php echo $value['CUS_EMAIL']?></td>
				<td><?php echo $value['SERIAL_NUMBER'] ?></td>   

				
				
			</tr>
			
            <?php } ?>
		

	</tbody>
	

</table>

<?php require "../../CONTROLLER/Includes/footer.php";?>
</body>
</html>