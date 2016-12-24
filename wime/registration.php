<?php

header('Access-Control-Allow-Origin: *');

require 'connect.php';



if($_SERVER['REQUEST_METHOD']=='POST'){

	if(isset($_POST['username']) 

		&& isset($_POST['registrationID']) 

		&& isset($_POST['password']) 

		&& isset($_POST['phone'])&& isset($_POST['course']) ){

		$username = $_POST['username'];

		$registrationID = $_POST['registrationID'];

		$phone = $_POST['phone'];

		$course = $_POST['course'];

		$sql = "SELECT * FROM member where member_studentID = '$registrationID'";

		$result = $conn->query($sql);



		if ($result->num_rows == 0) {

			$password = md5("wimi");

			$password2 = md5($_POST['password']."a8091b645476ade34e378524c240517a");

			$passwordfull = $password2."|"."a8091b645476ade34e378524c240517a";

			$sql = "INSERT INTO member (member_name, member_password,member_studentID,member_contact,member_course) VALUES 

			('$username', '$passwordfull', '$registrationID','$phone','$course')";

			if($conn->query($sql)){

				echo "Register Success";

				$cookie_name = "user";

				$cookie_value = $registrationID;

				setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 

			}else{

				echo "Some error have occur when register, please try again later1";

			}

		}

		else{

			echo "Student ID have been register, please change another to register.";

		}

	}else{

		echo "Some error have occur when register, please try again later2";

	}

	

}

else{

		echo "Some error have occur when register, please try again later3";

	}

?>