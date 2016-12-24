<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wime";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO sponsor (sponsor_category, sponsor_name, sponsor_qrcode)
VALUES ('Main', 'Silverlake', 'MainSilverlake')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "INSERT INTO sponsor (sponsor_category, sponsor_name, sponsor_qrcode)
VALUES ('Platinum', 'Hilti', 'PlatinumHilti')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "INSERT INTO sponsor (sponsor_category, sponsor_name, sponsor_qrcode)
VALUES ('Platinum', 'SAP', 'PlatinumSAP')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "INSERT INTO sponsor (sponsor_category, sponsor_name, sponsor_qrcode)
VALUES ('Gold', 'Accenture', 'GoldAccenture')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "INSERT INTO sponsor (sponsor_category, sponsor_name, sponsor_qrcode)
VALUES ('Gold', 'Public Bank', 'GoldPublic Bank')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "INSERT INTO sponsor (sponsor_category, sponsor_name, sponsor_qrcode)
VALUES ('Gold', 'Sangfor', 'GoldSangfor')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "INSERT INTO sponsor (sponsor_category, sponsor_name, sponsor_qrcode)
VALUES ('Gold', 'Pendrive', 'GoldPendrive')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "INSERT INTO sponsor (sponsor_category, sponsor_name, sponsor_qrcode)
VALUES ('Gold', 'Swisslog', 'GoldSwisslog')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "INSERT INTO sponsor (sponsor_category, sponsor_name, sponsor_qrcode)
VALUES ('Gold', 'Exabytes', 'GoldExabytes')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "INSERT INTO sponsor (sponsor_category, sponsor_name, sponsor_qrcode)
VALUES ('Gold', 'Finexus', 'GoldFinexus')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "INSERT INTO sponsor (sponsor_category, sponsor_name, sponsor_qrcode)
VALUES ('Gold', 'SNS Network', 'GoldSNS Network')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "INSERT INTO sponsor (sponsor_category, sponsor_name, sponsor_qrcode)
VALUES ('Exhibition Partner', 'Microsoft', 'Exhibition PartnerMicrosoft')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "INSERT INTO sponsor (sponsor_category, sponsor_name, sponsor_qrcode)
VALUES ('Exhibition Partner', 'MSI', 'Exhibition PartnerMSI')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




mysqli_close($conn);
?>
