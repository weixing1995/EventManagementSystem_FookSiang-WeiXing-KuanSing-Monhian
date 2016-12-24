<?php
class MerchantLoginTest extends \PHPUnit_Framework_TestCase
{
	 public function testSimple()
     {
     	require 'connect.php';

		        $username = "Silverlake";
		        $password     = "silverlakewime";
		        
		        $sql          = "SELECT * FROM sponsor where sponsor_name = '$username' and sponsor_password = '$password'";
		        $result       = $conn->query($sql);
		        
		        $this->assertNotEquals(0, $result->num_rows);
		        
		    } 
		
}
