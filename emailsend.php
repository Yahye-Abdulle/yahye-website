<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$user_data->Name = $_POST['username'];
$user_data->Password = $_POST['Password'];
$user_data->Date = date("Y-m-d");
$user_data->Time = date("h:i:sa");
$user_data->Gender = $_POST['gender'];
$user_data->Age = $_POST['age'];
$user_data->Email = $_POST['Email'];
$myJSON = json_encode($user_data);

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings                                // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'infonrdn@gmail.com';                 // SMTP username
    $mail->Password = 'Yahyeabdulle94';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $user_email = $_POST['Email'];
    $user_name = $_POST['username'];
    $mail->setFrom('nrdninfo@gmail.com', 'nrdn info');
    $mail->addAddress($user_email, $user_name);     // Add a recipient



    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'James Radley';
    $mail->Body    = "Info on NRDN Ltd <a href='#'>Test</a>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
} catch (Exception $e) {
    echo 'Message could not be sent. Email Address does not exist!: ', $mail->ErrorInfo;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="verify-email.css">
</head>
<body>

    <h2>Welcome, thank you for joining!</h2>
    <h3>Verify your email please</h3>

    <form method="POST" action="login.html">
        <button class="login">Login</button>
    </form>
</body>
</html>