<?php
 

// VERIFICACIÓN DE DATOS REGISTRO



if (isset($_POST['signup'])) {

    if (strlen($_POST['usuario_reg']) >= 1 && strlen($_POST['contraseña_reg']) >= 1 && strlen($_POST['email_reg']) >= 1 && strlen($_POST['fecha_reg']) ) {
    

    $usuario_reg = trim($_POST['usuario_reg']);

    $contraseña_reg = trim($_POST['contraseña_reg']);
    $cifrar_contra= hash('MD5', $contraseña_reg);
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

    


    