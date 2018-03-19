<?php
// the message
$mailid=$_REQUEST["email"];
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("HELLO","My subject",$msg);
?>