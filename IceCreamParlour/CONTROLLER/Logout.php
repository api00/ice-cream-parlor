<?php
session_start();
session_unset();
header("Location: ../VIEW/login.php ");
die();
?>