<?php
//setcookie("uid","",time()-3600);
//setcookie("uname1", "", time()-3600);

if (isset($_COOKIE['uname'])) {
    unset($_COOKIE['uname']); 
    setcookie('uname', null, -1, '/'); 
	session_start();
	session_destroy();
	header('Location:index.php');
    } else {
    header('Location:index.php');
}




?>