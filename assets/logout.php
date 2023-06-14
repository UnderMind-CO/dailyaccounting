

<?php
include('./public/datb_conct.php');
include('./public/validacion.php');

if (!isset($_SESSION)) { session_start(); }
$_SESSION = array(); 
session_destroy(); 
header("Location: login.php");
exit();


?>