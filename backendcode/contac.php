<?php

if (isset($_POST['mailsend'])) {
	# code...
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailform = $_POST['mail'];
	$massage = $_POST['massage'];

	$mailto = "my_mail_address@gmail.com";
	$headers = "From : ".$mailform;
	$text = "You Have A Mail From : ".$name.".\n\n".$massage;

	mail($mailto, $subject, $text, $headers);
	header("Location: ../pages/Contac.php?mail_send");
}