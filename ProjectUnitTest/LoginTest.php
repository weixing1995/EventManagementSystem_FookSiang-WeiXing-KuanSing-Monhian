<?php
class Simple1Test extends \PHPUnit_Framework_TestCase
{
     public function testSimple()
     {
     			$dbhost='localhost';
			    $username = 'root';
			    $password = '';
			    $database = 'wime';
			    $conn = mysqli_connect($dbhost,$username,$password) or die("Could not connect");
			    mysqli_select_db($conn, $database);
		        $username = "16wad12222";
		        $password     = md5("wimi");
		        $password2    = md5("leo123". "a8091b645476ade34e378524c240517a");
		        $passwordfull = $password2 . "|" . "a8091b645476ade34e378524c240517a";
		        $sql          = "SELECT * FROM member where member_studentID = '$username' and member_password = '$passwordfull'";
		        $result       = $conn->query($sql);
          		$this->assertNotEquals(0, $result->num_rows);
     }
 
}