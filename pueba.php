<?php
$email="hylian.andres@gmail.com";
$asunto="prueba";
$texto="correo de prueba";
$headers="";

require_once('AttachMailer.php'); 

$headers .= "From: MaReFu & Tooling < contacto@marefu-tooling.com >\r\n";



$mensaje = new AttachMailer("MaReFu & Tooling < contacto@marefu-tooling.com >", $email , $asunto , $texto );



$bool=$mensaje->send();
if($bool){
    echo "Mensaje enviado";
}else{
    echo "Mensaje no enviado";
}
//dirección del remitente 
/**
//Enviamos el mensaje a tu_dirección_email 
$bool = mail($email , $asunto , $texto , $headers);
if($bool){
    echo "Mensaje enviado";
}else{
    echo "Mensaje no enviado";
}
**/

?>

 

<br>
<button class="button" onclick="history.back()" > Regresar</button>

