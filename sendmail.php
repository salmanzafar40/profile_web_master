<?php

//echo phpinfo();
  if(isset($_POST['mail']))
  {

  	$email = $_POST['mail'];
  	$msg   = $_POST['msg'];
  	$sub ="abc";

$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <info@address.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

mail($email, $sub, $msg, $headers);
  }
?>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="post">
	<input type="email" name="email" required="">
	<textarea name="msg" required=""></textarea>
	<button name="mail">Send mail</button>
	</form>
</body>
</html>