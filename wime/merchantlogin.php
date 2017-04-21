<?php
header('Access-Control-Allow-Origin: *');
require 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password     = $_POST['password'];
        
        $sql          = "SELECT * FROM sponsor where sponsor_name = '$username' and sponsor_password = '$password'";
        $result       = $conn->query($sql);
        
        if ($result->num_rows != 0) {
            echo "Login Success";
            $cookie_name = "user";
			$cookie_value = $username;
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
            setcookie("type", "merchant", time() + (86400 * 30), "/");  
        }else{
        	echo "Invalid username or password2";
        }
        
    } else {
        echo "Some error have occur when login, please try again later";
    }
    
} else {
    echo "Some error have occur when login, please try again later";
}
?>