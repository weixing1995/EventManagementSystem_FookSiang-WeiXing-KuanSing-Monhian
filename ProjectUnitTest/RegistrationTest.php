<?php
class RegistrationTest extends \PHPUnit_Framework_TestCase
{
     public function testSimple()
     {
     	require 'connect.php';
		$username = "Elise";
		$registrationID = "16WAR02933";
		$phone = "0123456789";
		$course = "Software Development";
		$sql = "SELECT * FROM member where member_studentID = '$registrationID'";
		$result = $conn->query($sql);

		if ($result->num_rows == 0) {
			$password = md5("wimi");
			$password2 = md5("elise123"."a8091b645476ade34e378524c240517a");
			$passwordfull = $password2."|"."a8091b645476ade34e378524c240517a";
			$sql = "INSERT INTO member (member_name, member_password,member_studentID,member_contact,member_course) VALUES 
			('$username', '$passwordfull', '$registrationID','$phone','$course')";
			$this->assertEquals(true, $conn->query($sql));
		}
     }
 
}