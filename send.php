<?php

	$form = $_POST['qForm'];

	switch ($form) {
		case 'inscripcion':
			//Datos de Inscripcion
			$nombre = utf8_decode( $_POST['qNombre'] );
			$mail = utf8_decode( $_POST['qMail'] );
			$nacionalidad = utf8_decode( $_POST['qNacionalidad'] );
			$skype = utf8_decode( $_POST['qSkype'] );
			$objetivo = utf8_decode( $_POST['qObjetivo'] );
			$mensaje = utf8_decode( $_POST['qMensaje'] );
			$curso = utf8_decode( $_POST['qCurso'] );
			$asunto = "Inscripción Aula5";

			//Cuerpo del Mail
			$cuerpo = "<strong><u>Inscripción Aula5</u></strong>";
			$cuerpo.= "<p><strong>Curso</strong>: ". $curso ."</p>\n";
			$cuerpo.= "<p><strong>Objetivo</strong>: ". $objetivo ."</p>\n";
			$cuerpo.= "<p><strong>Nombre</strong>: ". $nombre ."</p>\n";
			$cuerpo.= "<p><strong>E-Mail</strong>: " . $mail ."</p>\n";
			$cuerpo.= "<p><strong>Skype</strong>: " . $skype ."</p>\n";
			$cuerpo.= "<p><strong>Mensaje</strong>:</p>\n";
			$cuerpo.= "<blockquote>" . $mensaje . "</blockquote>";
		break;

		case 'contacto':
			//Datos de Contacto
			$nombre = utf8_decode( $_POST['qNombre'] );
			$mail = utf8_decode( $_POST['qMail'] );
			$asunto = "Contacto sobre " . utf8_decode( $_POST['qAsunto'] );
			$mensaje = utf8_decode( $_POST['qMensaje'] );

			//Cuerpo del Mail
			$cuerpo = "<strong><u>Contacto Aula5</u></strong>";
			$cuerpo.= "<p><strong>Nombre</strong>: ". $nombre ."</p>\n";
			$cuerpo.= "<p><strong>E-Mail</strong>: " . $mail ."</p>\n";
			$cuerpo.= "<p><strong>Mensaje</strong>:</p>\n";
			$cuerpo.= "<blockquote>" . $mensaje . "</blockquote>";
		break;

		case 'empresa':
			//Datos de Empresa
			$nombre = utf8_decode( $_POST['qNombre'] );
			$mail = utf8_decode( $_POST['qMail'] );
			$asunto = "Contacto para empresa";
			$mensaje = utf8_decode( $_POST['qMensaje'] );

			//Cuerpo del Mail
			$cuerpo = "<strong><u>Contacto Empresa Aula5</u></strong>";
			$cuerpo.= "<p><strong>Nombre</strong>: ". $nombre ."</p>\n";
			$cuerpo.= "<p><strong>E-Mail</strong>: " . $mail ."</p>\n";
			$cuerpo.= "<p><strong>Mensaje</strong>:</p>\n";
			$cuerpo.= "<blockquote>" . $mensaje . "</blockquote>";
		break;
	}

	$destinatario = "smessina5@gmail.com";

	$cabecera = "From: " . strip_tags($mail) . "\r\n";
	$cabecera.= "MIME-Version: 1.0\r\n";
	$cabecera.= "Content-Type: text/html; charset=UTF-8\r\n";

	if(mail($destinatario, $asunto, $cuerpo, $cabecera)) {
		echo true;
	} else {
		echo false;
	}

?>