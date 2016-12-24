<?php
header('Access-Control-Allow-Origin: *');
require 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password     = md5("wimi");
        $password2    = md5($_POST['password'] . "a8091b645476ade34e378524c240517a");
        $passwordfull = $password2 . "|" . "a8091b645476ade34e378524c240517a";
        $sql          = "SELECT * FROM member where member_studentID = '$username' and member_password = '$passwordfull'";
        $result       = $conn->query($sql);
        
        if ($result->num_rows != 0) {
            echo "Login Success";
            $cookie_name = "user";
			$cookie_value = $username;
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
            setcookie("type", "student", time() + (86400 * 30), "/"); 
        }else{
        	echo "Invalid username or password";
        }
        
    } else {
        echo "Some error have occur when login, please try again later";
    }
    
} else {
    echo "Some error have occur when login, please try again later";
}
?>