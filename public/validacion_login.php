<?php

// VERIFICACIÓN DATOS INICIO DE SESIÓN


include('./datb_conct.php');

if (isset($_POST['login'])) {

$email =$_POST['email'];
$contraseña =$_POST['contraseña'];

$contraseña = hash('MD5', $contraseña);



$result_log = mysqli_query($conn,"SELECT * FROM datos WHERE email ='$email' AND contraseña = '$contraseña' ");

$row = $result_log->fetch_assoc();

if (mysqli_num_rows($result_log) > 0){
    session_start();
    $_SESSION['usuario'] = $email;
    $_SESSION['rol'] = $row['rol'];
    header('location:../home.php');
    exit();
}else{

    echo '<script>
        alert("Datos Incorrectos, Recuerda usar adecuadamente las MAYUS y minus \n Estas siendo redirigido...")
        window.location = "../assets/login.php"
        </script>';
    
    
    


}}

mysqli_close($conn);



?>