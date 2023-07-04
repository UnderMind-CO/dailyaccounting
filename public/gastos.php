<?php

include_once './datb_conct.php';


if (isset($_POST['gastos'])) {

$cantidad = $_POST['cantidad'];
$categoria = $_POST['categoria'];
$descripcion = $_POST['descripcion'];



if (strlen($_POST['cantidad']) >= 1 && strlen($_POST['categoria']) >= 1 && strlen($_POST['descripcion']) ) {



$cantidad = trim($_POST['cantidad']);

$consult = "INSERT INTO gastos(cantidad, categoria, descripcion) VALUES ('$cantidad','$categoria','$descripcion')";


$query = mysqli_query($conn, $consult);


header('location: ../assets/modules/dashboard.php?message=ok');
mysqli_close($conn);
exit();
}

else{

    header('location: ../assets/modules/dashboard.php?message=error');
    mysqli_close($conn);
    exit();

}



}
else{

    header('location: ../assets/modules/dashboard.php?message=vacio');
    mysqli_close($conn);
    exit();

}





?>