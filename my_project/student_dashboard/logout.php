<?php 
session_start();
session_destroy();
header("Location: /my_project/login.html");
echo "<h5>Success fully log_out</h5>";
?>