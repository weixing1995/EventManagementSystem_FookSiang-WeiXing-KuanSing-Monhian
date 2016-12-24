<?php
    $dbhost='localhost';
    $username = 'root';
    $password = '';
    $database = 'wime';
    $conn = mysqli_connect($dbhost,$username,$password) or die("Could not connect");
    mysqli_select_db($conn, $database);
    
?>
