<?php

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$mailfrom = $_POST['email'];
	$message = $_POST['message'];

	$mailTo = "";
	$headers = "STROKES Mail from: ".$mailfrom;
	$txt = "You have recieved an e-mail from ".$name.".\n\n".$message;

	mail($mailTo, $txt, $headers);
	header("Location: index.html?mailsend")
}