<?php

    $to = "pablogustavore@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];

	$headers = "From: " . $from . "\r\n";
	$headers .= "X-Mailer: PHP/". phpversion()."\r\n";
	$headers .= "Content-Type: text/plain";
	//$headers .= "Content-Type: text/html; charset=ISO-8859-1"."\r\n";
    
	$mensaje = "Correo Enviado Por: " .$name ."\r\n";
    $mensaje .="E-mail: " .$from ."\r\n";
	$mensaje .= "Mensaje: " .$message ."\r\n";
	$mensaje .= "Enviado el: " . date('d/m/Y',time());

	$send = mail($to, $subject, $mensaje, $headers);
	/*
    $logo = 'img/logo.png';
    $link = 'http://pablore.com.ar';
	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Nombre:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Asunto:</strong> {$subject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$message}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";
    $send = mail($to, $subject, $body, $headers);
    */

	header("location:contact.html");
?>