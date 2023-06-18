

<?php

session_start();

include('../public/datb_conct.php');
include('../public/validacion.php');

if (isset($_SESSION['usuario'])) { 

header("Location: ./login.php");
session_destroy(); 
exit();
}

?>