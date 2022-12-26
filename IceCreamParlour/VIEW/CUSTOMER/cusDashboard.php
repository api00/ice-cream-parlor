<?php
session_start();
?>
<?php
if(!isset($_SESSION["RULE"]))
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
    <title>Document</title>
    <style>
        h1{
            text-align: center;
            text-transform: uppercase;
    font-family: 'Roboto', sans-serif;
    font-weight: 900;
        }
    </style>
</head>
<!--<label for="logout">LogOut</label>-->

<body style="background-color:antiquewhite ">

<?php
include "../../CONTROLLER/Includes/header.php";
?>

<a style="float: right" class="logout-e" href="../../CONTROLLER/Logout.php">LOG OUT</a>

<?php
include "../../CONTROLLER/Includes/sidebar_links.php";
?>

<h1>Welcome , <?php echo  $_SESSION["RULE"]?></h1>

<?php include "../../CONTROLLER/Includes/footer.php";?>

</body>
</html>

