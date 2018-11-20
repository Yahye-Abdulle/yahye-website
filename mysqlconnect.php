<?php

$dbServername = "127.0.0.1";
$dbUsername = "root";
$dbPassword = "";
$dbName = "test";

$user_name = $_POST['username'];
$user_password = $_POST['Password'];

echo $user_name;
echo $user_password;

$conn = new mysqli($dbServername,$dbUsername,$dbPassword, $dbName,0,'"C:/xampp/mysql/mysql.sock"');

if ($conn->connect_error){
    die('Connection failed' . $conn->connect_error);
}

echo 'Successful';

$sql = "INSERT INTO user_details (Username, Password) VALUES ('$user_name', '$user_password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

include ('emailsend.php');

header("Location: emailsend.php");
die();

?>
