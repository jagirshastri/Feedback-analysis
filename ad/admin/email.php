<?php
$to = "mail-id";
$subject = "My subject";
$txt = "Hello world!";

if(!mail($to,$subject,$txt,'From: javalpatel19@gnu.ac.in')){
	echo "not dome";
	
}
else{
	
	echo "sending";
}
?>
