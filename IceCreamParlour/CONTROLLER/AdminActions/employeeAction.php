<?php
    include "../../MODEL/dbinsert.php";
    $image="";
    $valid = false;







    if($_SERVER["REQUEST_METHOD"]=="POST"){

 
        if(empty($_FILES["IMAGE"]["name"]))
        {
            $valid = true;
        }
        else
        {
          
        move_uploaded_file($_FILES["IMAGE"]["tmp_name"], "../../VIEW/images/".$_REQUEST["ENAME"].".jpg");
        $image= $_REQUEST["ENAME"].".jpg";
        }

    if (!$valid) {
        $ENAME = $_POST["ENAME"];
        $W1 = $_POST["EMPLOYEE_WORKING_HOUR1"];
        $W2  = $_POST["EMPLOYEE_WORKING_HOUR2"];
        $salary  = $_POST["EMPLOYEE_SALARY"];
        

         $uploadFlavour = Employee($ENAME,$W1,$W2,$salary,$image);

       
        
       
    
    
  
      
    }
}




?>