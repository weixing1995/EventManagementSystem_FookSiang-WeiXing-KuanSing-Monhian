<?php
header('Access-Control-Allow-Origin: *');
require 'connect.php';


	if(isset($_GET['memberID'])){
		$registrationID = $_GET['memberID'];
		
			    	$sql = "SELECT * FROM member where member_studentID = '$registrationID'";
					$result = $conn->query($sql);
					$currentPoints = 0;
					if ($result->num_rows != 0) {
						while($row = $result->fetch_assoc()) {
					        $currentPoints =  $row["member_point"];

					    }
					    echo $currentPoints;
					}
					

			}else{
				 
			}
?>