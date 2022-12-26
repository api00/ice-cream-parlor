<?php
// Start the session
session_start();
?>
<?php 
    include "../MODEL/dbread.php";
    $username = $password = "";
    $flag =false;
    $User_passwordEr = "";
    $User_NameEr ="";
    $User_ruleEr= "";
    
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     
    if (empty($_POST["username"])) {
        $User_NameEr = "UserName is required";
        $flag = true;
    }
    
    if (empty($_POST["password"])) {
        $User_passwordEr = "password is required";
        $flag = true;
    }
    
    
    if(!$flag){
        $username =  $_POST["username"];
        $password = $_POST["password"];
    
        $result =LOGIN($username,$password);

        if($result["RULE"] == 'ADMIN'){
            $_SESSION["PERSONID"]=$result["PERSONID"];
            $_SESSION["RULE"]=$result["RULE"];
            header("Location: ../VIEW/ADMIN/dashboard.php");
            die();
        }
        elseif ($result["RULE"] == 'CUSTOMER'){
            $_SESSION["PERSONID"]=$result["PERSONID"];
            $_SESSION["RULE"]=$result["RULE"];
            header("Location: ../VIEW/CUSTOMER/cusDashboard.php");
            die();
        }
        else{
            header("Location: ../VIEW/login.php");
              echo "<h2>" ."please check your username or password ". "</h2>";
        }

    
        /*
        if($result){
            //$_SESSION["username"]=$username;
          //header("Location: ../VIEW/ADMIN/dashboard.php");
          echo "done";
        }
        else
        {
            //header("Location: ../VIEW/login.php");
            echo "invalid";
       }*/
        }
    
    }
    ?>
    