<?php
session_start();
include "../../MODEL/dbread.php";
include "../../MODEL/dbinsert.php";

    $USERNAME="";
    $PERSONID="";
    $EMAIL="";
			$id = $_GET['SERIAL_NUMBER'];
            $sid =$_SESSION["PERSONID"];
            
            
           $row = readData($sid);
           $USERNAME = $row["USERNAME"];
            $PERSONID =$sid;
            $EMAIL = $row["EMAIL"];
      $DATA = insertOrders($PERSONID,$USERNAME,$EMAIL,$id);
      if($DATA){
        echo "<script>window.location.href='../../VIEW/index.php';</script>";
      }
?>