<?php

require_once './datb_conct.php';

$password = $_POST['contraseña'];
$password1 = $_POST['contraseña1'];
$id = $_POST['id'];

if ($password == $password1){

    $password = hash('md5',$password);
    
    $consult = "UPDATE datos SET contraseña='$password' WHERE id='$id' ";
    $result = mysqli_query($conn, $consult);

    header("location: ../assets/restore_pass.php?message=ok");

    exit();
}
else{

    header("location: ../assets/restore_pass.php?message=error");
}

mysqli_close($conn);
?>
