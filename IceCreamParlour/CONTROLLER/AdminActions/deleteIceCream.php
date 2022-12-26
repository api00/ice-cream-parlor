<?php 
require_once '../../MODEL/dbdelete.php';
if (deleteMenu($_GET['SERIAL_NUMBER'])) {
    header('Location: ../../VIEW/ADMIN/showFlavour.php');
    die();
}
?>