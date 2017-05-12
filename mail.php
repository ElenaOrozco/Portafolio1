<?
$para= "elena.orozcoch@gmail.com";
$nombre= $_POST["name"];
$asunto= "Sitio Personal enviado por $nombre: " ;
$message= $_POST['message'];
$de= $_POST["email"];
$tel= $_POST["phone"];
$message = "Nombre: $nombre\n E-Mail: $de \n Telefono: $tel \n Mensaje:\n $message";


$headers ="MIME-Version:1.0;\r\n";
$headers .="Content-type: text/html; \r\n charset=iso-8859-1; \r\n" ;
$headers .="From: $de \r\n";
$headers .="To: $para; \r\n Subjet: $asunto \r\n";

if(mail($para, $asunto, $message, $headers))
	echo "Enviado Correctamente";
else
	echo "Fallo en envio"
?>