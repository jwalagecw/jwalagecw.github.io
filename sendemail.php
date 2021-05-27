<?php
// the message
$msg = "Test\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("sfigecwunit@gmail.com","My subject",$msg);
?>
