<?php
require('phpmailer/class.phpmailer.php');

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;  
$mail->Username = "praise.paul@outlook.com";
$mail->Password = "Praise2002!";
$mail->Host     = "smtp.office365.com";
$mail->Mailer   = "smtp";
$mail->SetFrom($_POST["email"], $_POST["name"]);
$mail->AddReplyTo($_POST["email"], $_POST["name"]);
$mail->AddAddress("recipient address");	
$mail->Subject = $_POST["subject"];
$mail->WordWrap   = 80;
$mail->MsgHTML($_POST["message"]);

$mail->IsHTML(true);

if(!$mail->Send()) {
	echo "<p class='error'>Problem in Sending Mail.</p>";
} else {
	echo "<p class='success'>Contact Mail Sent.</p>";
}	
?>