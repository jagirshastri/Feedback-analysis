<?php
if (isset($_COOKIE['a_user'])) {
    unset($_COOKIE['a_user']); 
    //setcookie('a_user', null, -1, '/'); 
	session_start();
	session_destroy();
	header('Location:admin_login.php');
	
    }
	else {
    header('Location:index.php');
}




?>