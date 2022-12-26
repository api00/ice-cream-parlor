<?php 
include_once "dbconnect.php";
function LOGIN($user,$pass){
  $conn = connect();
  $s = oci_parse($conn, "select username,password,rule,personid from log where USERNAME='$user' and PASSWORD='$pass'");
  oci_execute($s);
    while ($row = oci_fetch_assoc($s))
    {
        return $row;
    }
}
function readData($sid){
  $conn = connect();
  $s = oci_parse($conn, "select * FROM LOG where PERSONID='$sid' ");
  oci_execute($s);
    while ($row = oci_fetch_assoc($s))
    {
        return $row;
    }
}

  

?>