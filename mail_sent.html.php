 <?php

require_once 'app/info.php';
require_once 'app/pass.php';
/*Lo primero es añadir al script la clase phpmailer desde la ubicación en que esté*/
require 'list/PHPMailer/PHPMailerAutoload.php';

//Crear una instancia de PHPMailer
$mail = new PHPMailer();
//Definir que vamos a usar SMTP
$mail->IsSMTP();
//Esto es para activar el modo depuración. En entorno de pruebas lo mejor es 2, en producción siempre 0
// 0 = off (producción)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug  = 0;
//Ahora definimos gmail como servidor que aloja nuestro SMTP
$mail->Host       = 'smtp.gmail.com';
//El puerto será el 587 ya que usamos encriptación TLS
$mail->Port       = 587;
//Definmos la seguridad como TLS
$mail->SMTPSecure = 'tls';
//Tenemos que usar gmail autenticados, así que esto a TRUE
$mail->SMTPAuth   = true;
//Definimos la cuenta que vamos a usar. Dirección completa de la misma
$mail->Username   = "pinacotek.info@gmail.com";
//Introducimos nuestra contraseña de gmail
$mail->Password   = $pass_mail;
//Definimos el remitente (dirección y, opcionalmente, nombre)
$mail->SetFrom('pinacotek.info@gmail.com', 'pinacotek');
//Esta línea es por si queréis enviar copia a alguien (dirección y, opcionalmente, nombre)
$mail->AddReplyTo('pinacotek.info@gmail.com','pinacotek');
//Y, ahora sí, definimos el destinatario (dirección y, opcionalmente, nombre)
$mail->AddAddress( $email, $nombre);
//Definimos el tema del email
$mail->Subject = "prueba";
//Para enviar un correo formateado en HTML lo cargamos con la siguiente función. Si no, puedes meterle directamente una cadena de texto.
// $mail->MsgHTML(file_get_contents('correomaquetado.html'), dirname(ruta_al_archivo));
//Y por si nos bloquean el contenido HTML (algunos correos lo hacen por seguridad) una versión alternativa en texto plano (también será válida para lectores de pantalla)
$mail->Body = "lorem lorem";

// si el correo no se envia se imprime el error.
if(!$mail->Send() ){
	echo $mail->ErrorInfo;
}else{
	require_once $base_path.'login/login.html.php';
}
