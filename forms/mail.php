<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$formcontent="Form:$name \n Email:$message \n Phone:$phone \n Message:$message";
$recipient="vilaskarnake@gmail.com";
$ccemail="vilaskarnake@gmail.com";
$recipient.=': '.$ccemail;

$subject ="Contact form";
$mailheader ="From: $email \r\n";
mail($recipient,$subject,$formcontent,$mailheader ) or die("Error!");
echo"Thank You";
?>