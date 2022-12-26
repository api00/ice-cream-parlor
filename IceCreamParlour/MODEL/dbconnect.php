<?php

function connect(){
    
    global $conn;
        $conn = oci_connect('FINALPROJECT', '1234', 'xe');
return $conn;

}




?>