<?php
class UpdatePointsTest extends \PHPUnit_Framework_TestCase
{
     public function testSimple()
     {
     	require 'connect.php';
        $Qrcode = "ID019EIj2DE955ARQ268";
		$registrationID = "1";
		
		$sql = "SELECT * FROM member_scan where member_id = '$registrationID' and qrcode_id = '$Qrcode' ";
		$result = $conn->query($sql);

		if ($result->num_rows != 0) {
			echo "You have scan this qr code before!";
		}
		else{
			$sql = "SELECT * FROM qrcode where qrcode_code = '$Qrcode' ";
			$result = $conn->query($sql);
			if ($result->num_rows != 0) {
				$point = 0;
				while($row = $result->fetch_assoc()) {
			        $point =  $row["qrcode_points"];

			    }
			    	$sql = "SELECT * FROM member where member_studentID = '$registrationID'";
					$result = $conn->query($sql);
					$currentPoints = 0;
					if ($result->num_rows != 0) {
						while($row = $result->fetch_assoc()) {
					        $currentPoints =  $row["member_point"];

					    }
						$total = $currentPoints + intval($point);
						$sql2 = "UPDATE member SET member_point= '$total' WHERE member_studentID = '$registrationID'";
						
						$sql = "INSERT INTO member_scan (member_id, qrcode_id)
						VALUES ('$registrationID', '$Qrcode')";

						$this->assertEquals(true, $conn->query($sql));

					}
			    
			}else{
				 
			}
		}
     }
 
}
