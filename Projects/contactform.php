<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
</head>
<body>
 <?php
 	$message_sent = false;
 if (isset($_POST['submit']) && $_POST['mail'] != '') {
 	$name = $_POST['name'];
 	$subject = $_POST['subject'];
 	$mailFrom = $_POST['mail'];
 	$message = $_POST['message'];

 	$mailTo = "drelumpkin99@gmail.com";
 	$headers = "From: ".$mailFrom;
 	$txt = "You have recieved an email from ".$name.".\n\n".$message;

 	 mail($mailTo, $subject, $txt, $headers);

 	header("Location: contact.html?mailsend");

 	$message_sent = true;
 }
 ?>
</body>
</html>