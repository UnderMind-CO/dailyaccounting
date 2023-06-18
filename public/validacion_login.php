<?php

// VERIFICACIÓN DATOS INICIO DE SESIÓN

session_start();
include('./datb_conct.php');

$email =$_POST['email'];
$contraseña =$_POST['contraseña'];

$contraseña = hash('MD5', $contraseña);



$result_log = mysqli_query($conn,"SELECT * FROM datos WHERE email ='$email' AND contraseña = '$contraseña' ");



if (mysqli_num_rows($result_log) > 0){

    $_SESSION['usuario'] = $email;
    header('location:../home.php');
    exit();
}else{

    echo '<script>
        alert("Datos Incorrectos, Recuerda usar adecuadamente las MAYUS y minus \n Estas siendo redirigido...")
        window.location = "../assets/login.php"
        </script>';
    
    
    


}

mysqli_close($conn);



?>