<html>
<head>
<link rel="stylesheet" href="index.css">
<body>
<?php

$server_name = 'localhost';
$username = 'root';
$password = 'Hooyohodan1977';
$name = 'login';

$conn = new mysqli_connect($server_name,$username,$password,$name);

if ($conn->connect_error) {	
	echo $conn->connect_error;
}

echo 'Connected'

$conn.close();


?>

</body>
</head>
</html>