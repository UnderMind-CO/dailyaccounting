<?php
 
// VERIFICACIÓN DATOS INICIO DE SESIÓN

session_start();
include('./datb_conct.php');

$usuario_log =$_POST['email'];
$contraseña_log =$_POST['contraseña'];

if (isset($_POST['login'])){
$consulta_log = "SELECT * FROM datos WHERE usuario ='$usuario_log' AND contraseña = '$contraseña_log' ";
$result_log = mysqli_query($conn,$consulta_log);

$revisar = mysqli_num_rows($result_log);

if ($revisar=true){
    header('location:../home.php');
}else{
    include ('../assets/login.php');
    ?>
    <h2>Error de Validación, Por favor Compruebe los datos</h2>
    <?php
    


}
mysqli_free_result($result_log);
mysqli_close($conn);

}


// VERIFICACIÓN DE DATOS REGISTRO



if (isset($_POST['signup'])) {

    if (strlen($_POST['usuario_reg']) >= 1 && strlen($_POST['contraseña_reg']) >= 1 && strlen($_POST['email_reg']) >= 1 && strlen($_POST['fecha_reg']) ) {
    

    $usuario_reg = trim($_POST['usuario_reg']);

    $contraseña_reg = trim($_POST['contraseña_reg']);
    $cifrar_contra= password_hash($contraseña_reg, PASSWORD_BCRYPT);
    password_verify($contraseña_reg, $cifrar_contra);


    $email_reg = trim($_POST['email_reg']);

    $fecha_reg = trim($_POST['fecha_reg']);

    $fecha_reg = date("d/m/y");

    include('./datb_conct.php');

    $consulta_reg = "INSERT INTO datos(usuario, contraseña, email, fecha_nacimiento) VALUES ( '$usuario_reg', '$cifrar_contra', '$email_reg', '$fecha_reg')";
    




    $result_reg = mysqli_query($conn,$consulta_reg);
    
    if($result_reg){
        
        ?>
        <h3 class="registrado">¡Registro Exitoso!, Estas sigendo redirigido...</h3>
        <meta http-equiv="Refresh" content="2;url=../assets/login.php">
        <?php

    }else{
        ?>
        <h3 class="error">¡Ops.. Ha Ocurrido Un Error!...</h3>
        <?php

    }
    }else{
        ?>
        <h3 class="error">¡Eror de Autentificación!, Por Favor Compruebe Los Datos...</h3>
        <meta http-equiv="Refresh" content="2;url=../assets/login.php">
        <?php

    }
}

    


    