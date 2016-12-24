<?php
header('Access-Control-Allow-Origin: *');
require 'connect.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['QRcode'])){
		$Qrcode = $_POST['QRcode'];
		$registrationID = "";
		if(isset($_COOKIE["user"])) {
			$registrationID = $_COOKIE["user"];
		}
		$sql = "SELECT * FROM sponsor_member ms left join sponsor s on ms.sponsor_id = s.sponsor_id left join member m on ms.member_id = m.member_id where m.member_studentID = '$registrationID' and s.sponsor_qrcode = '$Qrcode' ";
		$result = $conn->query($sql);

		if ($result->num_rows != 0) {
			echo "You have scan this qr code before!";
		}
		else{
			$sql = "SELECT * FROM sponsor where sponsor_qrcode = '$Qrcode' ";
			$result = $conn->query($sql);
			if ($result->num_rows != 0) {
				$point = 5;

			    	$sql = "SELECT * FROM member where member_studentID = '$registrationID'";
					$result = $conn->query($sql);
					$currentPoints = 0;
					if ($result->num_rows != 0) {
						while($row = $result->fetch_assoc()) {
					        $currentPoints =  $row["member_point"];

					    }
						$total = $currentPoints + intval($point);
						$sql2 = "UPDATE member SET member_point= '$total' WHERE member_studentID = '$registrationID'";

						if ($conn->query($sql2) === TRUE) {
						    echo "Points Updated: ".$point;
						} else {
						    echo "Error updating record: " . $conn->error;
						}
						$sql = "INSERT INTO sponsor_member (member_id, sponsor_id)
								VALUES ((select member_id from member where member_studentID = '$registrationID'),(SELECT sponsor_id FROM sponsor where sponsor_qrcode = '$Qrcode'))";

						if ($conn->query($sql) === TRUE) {
						    
						} else {
						    
						}

					}

			}else{
				 
			}
		}
	}else{
		echo "You have scan this qrcode before";
	}
}

?>