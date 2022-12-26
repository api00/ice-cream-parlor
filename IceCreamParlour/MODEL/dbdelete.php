<?php

require "dbconnect.php";



function deleteMenu($id)
{
  
        $conn = connect();
       
        $s = oci_parse($conn, "DELETE FROM menucard WHERE SERIAL_NUMBER ='$id'");     
        $respone = oci_execute($s);
        return $respone;
       
      
    
     
      
}
?>

