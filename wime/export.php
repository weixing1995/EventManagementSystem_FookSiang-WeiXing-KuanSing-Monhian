<?php

/*require 'connect.php';

// output headers so that the file is downloaded rather than displayed

header('Content-Type: text/csv; charset=utf-8');

header('Content-Disposition: attachment; filename=data.csv');



// create a file pointer connected to the output stream

$output = fopen('php://output', 'w');



// output the column headings

fputcsv($output, array('member_name', 'member_id', 'member_id', 'member_studentID'));



// fetch the data



$rows = mysql_query('SELECT m.member_name as member_name,m.member_id as member_id,m.member_id as member_id,m.member_studentID as member_studentID, FROM sponsor_member sm left join member m on sm.member_id = m.member_id left join sponsor s on sm.sponsor_id = s.sponsor_id');



// loop over the rows, outputting them

while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);*/

require 'connect.php';

header('Content-Type: application/excel');

header('Content-Disposition: attachment; filename="sample.csv"');



$list=array();



$sql = "SELECT m.member_name as member_name,m.member_contact as member_contact,m.member_course as member_course,m.member_studentID as member_studentID FROM sponsor_member sm left join member m on sm.member_id = m.member_id left join sponsor s on sm.sponsor_id = s.sponsor_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {



while($row = $result->fetch_assoc()) {

	array_push($list,$row['member_name'].",".$row['member_contact'].",".$row['member_course'].",".$row['member_studentID']);

}

}



$file = fopen("php://output","w");



foreach ($list as $line)

  {

  fputcsv($file,explode(',',$line));

  }



fclose($file); 



?>