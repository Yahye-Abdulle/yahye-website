<!-- REGISTER PHP PAGE -->

<html>
<head>
<link rel="stylesheet" href="index.css">
<body>

Name: <?php echo $_POST["username"]; ?><br>
Password: <?php echo $_POST["Password"]; ?><br>
Date: <?php echo date("Y-m-d") . (' '); ?><br>
Time: <?php echo date("h:i:sa"); ?> <br>
Gender: <?php echo $_POST['gender']; ?><br>
Age: <?php echo $_POST['age']; ?><br>
Email: <?php echo $_POST['Emai']; ?><br>

<?php
$user_data->Name = $_POST['username'];
$user_data->Password = $_POST['Password'];
$user_data->Date = date("Y-m-d");
$user_data->Time = date("h:i:sa");
$user_data->Gender = $_POST['gender'];
$user_data->Age = $_POST['age'];
$user_data->Email = $_POST['Email'];
$myJSON = json_encode($user_data);
echo $myJSON;
?>

<?php
header("Location: mysqlconnect.php");
die();
?>

</body>
</head>
</html>	