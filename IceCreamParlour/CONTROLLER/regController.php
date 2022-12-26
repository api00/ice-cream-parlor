<?php
    include "../MODEL/dbinsert.php";
$full_name = $User_Name = $User_Rule = $User_Password = "";
$full_nameEr = $User_NameEr = $User_RuleEr = $User_PasswordEr = '';
$valid = false;
$successMesg = $errorMesg = "";







    if($_SERVER["REQUEST_METHOD"]=="POST"){

 
  

    if (!$valid) {

        $username = $_POST["username"];
        $password  = $_POST["password"];
        $email  = $_POST["email"];
         $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        if($password == $cpassword){
            $pattern = '/^([a-zA-Z]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/';
            if(preg_match($pattern, $email)){
            $result = Register($username, $password, $email);
           
            }
            if($result){
             echo "Sucessfully Register";
            }
            else{
             echo "There is a error occoured";
            }
        }
        else{
            echo "Please Check yourn Password";
        }
       
    
    
  
      
    }
}




?>