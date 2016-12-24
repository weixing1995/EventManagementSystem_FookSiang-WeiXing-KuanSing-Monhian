<?php 
header('Access-Control-Allow-Origin: *');
setcookie('user', $_COOKIE["user"], time() - 3600, '/'); 

?>