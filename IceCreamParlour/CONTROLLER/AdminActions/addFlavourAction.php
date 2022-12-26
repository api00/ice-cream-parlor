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
          
        move_uploaded_file($_FILES["IMAGE"]["tmp_name"], "../../VIEW/images/".$_REQUEST["INAME"].".jpg");
        $image= $_REQUEST["INAME"].".jpg";
        }

    if (!$valid) {
        $INMAE = $_POST["INAME"];
        $SERIAL_NUMBER = $_POST["SERIAL_NUMBER"];
        $PORTION  = $_POST["PORTION"];
        $INGREDIENTS  = $_POST["INGREDIENTS"];
         $PRICE = $_POST['PRICE'];

         $uploadFlavour = Upload_flavour($INMAE, $SERIAL_NUMBER,$PORTION, $INGREDIENTS,$PRICE,$image);

       
        
       
    
    
  
      
    }
}




?>