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
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/apartment-action.js"></script>
    <title>Document</title>
    <style>
        input[type=text], select {
  width: 30%;
  margin: 0 auto;
  padding: 12px 20px;
  margin: 8px 0;
 
}
        input[type=number] {
  width: 30%;
  margin: 0 auto;
  padding: 12px 20px;
  margin: 8px 0;
 
}
.apartment-container{
    width: 50%;
    margin: 0 auto;
    text-transform: uppercase;
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
}
fieldset{
    margin-top: 10px;
}
.add{
    font-size: 18px;
    color: whitesmoke;
    border: 1px solid black;
    margin-top: 10px;
    display: inline-block;
    margin: 10px;
    padding: 10px;
    text-transform: uppercase;
    font-family: 'Roboto', sans-serif;
    font-weight: 900;
    cursor:pointer;
    background-color: brown;
    
}
    </style>
</head>
<body style="background-color:antiquewhite ">
<?php
include "../../CONTROLLER/Includes/header.php";

require "../../CONTROLLER/Includes/admin_sidebar.php";

require "../../CONTROLLER/AdminActions/addFlavourAction.php";
?>

<div class="apartment-container">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data">
<h2 style="text-align: center; color:aquamarine; background-color:blueviolet">Add New Flavour of Ice cream</h2>
    <fieldset>
       
        <legend> Ice cream Flavour Details</legend>
        <table>
        <tr>
                <td><label for="Aid">NAME</label> </td>
                <td>        <input type="text" name="INAME" required>   <br></td>
                
            </tr>
            <tr>
                <td><label for="Aid">SERIAL NUMBER</label> </td>
                <td>        <input type="number" name="SERIAL_NUMBER" required>   <br></td>
                
            </tr>
            <tr>
            <td>  <label for="Aname">Portion</label></td>
                <td>        <input type="text" name="PORTION" required>  <br>
</td>
            </tr>
            <tr>
                <td><label for="Aemail">INGREDIENTS</label></td>
                <td>        <input type="text" name="INGREDIENTS" requiredrequired>  <br>
</td>
            </tr>
            <tr>
                <td>        <label for="Aphone">    PRICE</label></td>
                <td>        <input type="text" name="PRICE" required>  <br></td>
            </tr>
            <tr>
                <td> <label for="Aphone">Image</label></td>
                <td><input type="file" name="IMAGE" required></td>
            </tr>
        </table>
        
      
        
       
        
    </fieldset>

    <input type="submit" class="add" name="submit" value="Add"> <br> <br>
    <a href="../../VIEW/ADMIN/showFlavour.php">Show All Flavour</a> 

  

</form>
</div>
<?php include "../../CONTROLLER/Includes/footer.php";?>
</body>
</html>