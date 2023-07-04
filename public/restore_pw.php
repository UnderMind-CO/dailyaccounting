<?php


require_once './datb_conct.php';
require './PHPMailer/Exception.php';
require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$email = $_POST['email'];
$sql_query = "SELECT * FROM datos WHERE email='$email' AND status=1 ";



$result = mysqli_query($conn, $sql_query);

$row = $result -> fetch_assoc();

$nombre_sql = $row['usuario'];

if ($result -> num_rows > 0 ){





    $mail = new PHPMailer(true);

    try {
        //Server configuración

        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp-mail.outlook.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'DailyRecovery@outlook.com';                     //SMTP username
        $mail->Password   = 'DailyAdmin123!';                               //SMTP password
/*         $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  */           //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('DailyRecovery@outlook.com', 'Daily Support Recovery ');
        $mail->addAddress($email, $nombre_sql);     //Add a recipient
                                                                //Name is optional

    
        //Attachments
        /* $mail->addAttachment('http://localhost/proyecto/assets/img/email_new.png'); */     //Add attachments
                                                                    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'DAILY RECOVERY | RECUPERACION DE CONTRASENA';
        $mail->Body    = 'Este es un mensaje Generado Manualmente para el restablecimiento de tu cuenta asociada al correo .$email \n , 
           <a href="localhost/proyecto/assets/restore_pass.php?id='.$row['id'].'">Click Aqui para Restablecer su contraseña</a> Si usted no solicito este servicio, Por favor, ignore este mensaje.
            <br><br><hr> Si no puede visualizar el enlace anterior, copie y pegue este en su navegador de preferencia, \n
            enlace : http://localhost/proyecto/assets/restore_pass.php?id='.$row['id'] ;

        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();

        header("location: ../assets/forgot_pass.php?message=ok");

    } catch (Exception $e) {

        header("location: ../assets/forgot_pass.php?message=error");
        
    }



}else{

        header("location: ../assets/forgot_pass.php?message=not_found");
}
?>