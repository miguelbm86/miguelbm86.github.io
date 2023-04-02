<?php
$proceso 			= $_POST['proceso'];
if($proceso=="EnviarComentario"){
	$nombres 		= utf8_decode($_POST['nombres']);
	$empresa 		= utf8_decode($_POST['empresa']);	
	$telefono 		= $_POST['telefono'];		
	$email	 		= $_POST['email'];
	$mensaje    	= utf8_decode($_POST['mensaje']);	
	//Prepara para enviar email
	$encabezado		 = "Contacto proveniente desde la web";
	$emailDestino	 = "miguelbullonm@gmail.com";//flexlaurac@gmail.com
	$mensaje = "
	<table width='100%' border='1' cellspacing='0' cellpadding='4'>
	  <tbody>
		<tr>
		  <td colspan='2' bgcolor='#800881'>
			<h2 style='text-align:center; color: #FFFFFF;'>DELTACOVER - Coberturas Industriales</h2>
			<p style='text-align: center; color: #FFFFFF;'>Formulario Contactanos - Datos del Usuario</p>
		  </td>
		</tr>		
		<tr>
		  <td width='39%'><p>Nombres y Apellidos</p></td>
		  <td width='61%'><p>$nombres</p></td>
		</tr>	
		<tr>
		  <td><p>Empresa</p></td>
		  <td><p>$empresa</p></td>
		</tr>	
		<tr>
		  <td><p>Telefono</p></td>
		  <td><p>$telefono</p></td>
		</tr>	
		<tr>
		  <td><p>Email</p></td>
		  <td><p>$email</p></td>
		</tr>
		<tr>
		  <td><p>Mensaje</p></td>
		  <td><p>$mensaje</p></td>
		</tr>
	  </tbody>
	</table>";	
	
	//Enviar datos
	$emailcabeceras = "Fron:".$email." <".$nombres.">\n"."Reply-To: ".$email."\n";
	$emailcabeceras .= 'MINE-Version: 1.0' . "\r\n"; 
	$emailcabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	@mail($emailDestino, $encabezado, $mensaje, $emailcabeceras);
	//Variable que se va aenviar a través del json
	$respuesta  = "Tus comentarios se enviaron con Exito...";	
	
}

//Crear array para convertir datos a json
$salidaJson 	= array("respuesta" => $respuesta);
echo json_encode($salidaJson);
?>