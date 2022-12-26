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
			<th>ID</th>
			
			<th>Working Hour for Shift 1</th>
			<th>Working Hour for Shift 2</th>
            <th>Salary</th>
            <th>Image</th>
		
            

		</tr>
	</thead>
	<tbody>
    <?php 
     $conn = connect();
     $s = oci_parse($conn, "select * FROM SALARAYSCALE");
     oci_execute($s);
       while ($value = oci_fetch_assoc($s))
       {
          ?>
			<tr>
            <td><?php echo $value["ENAME"] ?></td>
            <td><?php echo $value['A_ID'] ?></td>
				
				<td><?php echo $value['EMPLOYEE_WORKING_HOUR1']?></td>
				<td><?php echo $value['EMPLOYEE_WORKING_HOUR2'] ?></td>
                <td><?php echo $value["EMPLOYEE_SALARY"] ?></td>

                <td><img src="../images/<?php echo $value["IMAGE"]?>" height="100px" width="100px" alt="" srcset=""></td>

              
                
   

				
				
			</tr>
			
            <?php } ?>
		

	</tbody>
	

</table>

<?php require "../../CONTROLLER/Includes/footer.php";?>
</body>
</html>