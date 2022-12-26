<?php
include_once "dbconnect.php";
  function Register($uname,$password,$email){
    $conn = connect();
    $ran = rand(1,10);
    $s = oci_parse($conn, "insert into log(PERSONID,USERNAME,PASSWORD,EMAIL,RULE) values('$ran','$uname','$password','$email','CUSTOMER')");     
    oci_execute($s);
die();

  

 
  }
  function Upload_flavour($INMAE, $SERIAL_NUMBER,$PORTION, $INGREDIENTS,$PRICE,$image){
    $conn = connect();
   
    $s = oci_parse($conn, "insert into menucard(INAME,SERIAL_NUMBER,PORTION,INGREDIENTS,PRICE,IMAGE) values('$INMAE','$SERIAL_NUMBER','$PORTION','$INGREDIENTS','$PRICE','$image')");     
    oci_execute($s);
die();

  

 
  }
  function insertOrders($PERSONID,$USERNAME,$EMAIL,$id){
    $conn = connect();
   
    $s = oci_parse($conn, "insert into MENUCARDORDERS(CUS_SERIAL,CUS_NAME,CUS_EMAIL,SERIAL_NUMBER) values('$PERSONID','$USERNAME','$EMAIL','$id')");     
  $result=  oci_execute($s);
  
  return $result;
    

 
  }

  function Employee($ENAME,$W1,$W2,$salary,$image){
    $conn = connect();
    $ran = rand(1,10);
    $s = oci_parse($conn, "insert into SALARAYSCALE(A_ID,EMPLOYEE_WORKING_HOUR1,EMPLOYEE_WORKING_HOUR2,EMPLOYEE_SALARY,ENAME,IMAGE) values('$ran','$W1','$W2','$salary','$ENAME','$image')");     
    oci_execute($s);
die();

  

 
  }


  ?>
 