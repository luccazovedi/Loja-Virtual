<?php   
include "../PHPMailer-master/PHPMailerAutoload.php"; 
require '../PHPMailer-master/class.phpmailer.php';
require '../PHPMailer-master/class.smtp.php';
include "../StormStore/account/recuperarsenha.php";


$mail = new PHPMailer(); 
$mail->SMTPDebug = 2;
$mail->IsSMTP(); 
$mail->Host = "smtp.gmail.com"; 
$mail->Port = 587; 
$mail->SMTPAuth = true; 
$mail->Username = 'StormStoreVirtualLoja@gmail.com'; 
$mail->Password = 'StormStore5577'; 

$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 

$mail->From = "StormStore@gmail.com"; 
$mail->FromName = "Confirmação de Cadastro"; 
$mail->AddAddress('#email'); 

// Opcional: mais de um destinatário
// $mail->AddAddress('fernando@email.com'); 

$mail->IsHTML(true); 
$mail->CharSet = 'UTF-8'; 

$mail->Subject = "Recuperação de senha!"; 

// Corpo do email 
$mail->Body = 'Agradecemos sua participação!'; 

// Opcional: Anexos 
// $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 

$enviado = $mail->Send(); 
if ($enviado) 
{ 
    echo "Seu email foi enviado com sucesso!"; 
} else { 
    echo "Houve um erro enviando o email: ".$mail->ErrorInfo; 
} 


?>