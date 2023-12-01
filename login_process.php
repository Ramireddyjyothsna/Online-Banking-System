<?php
session_start();

$dbhost = 'localhost';
$dbname = 'banksysphp';
$dbuser = 'root';
$dbpass = '';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$balance = $_POST['balance'];

$sql = "SELECT * FROM users WHERE name = '$name' AND email = '$email' AND password = '$password' AND balance = '$balance'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {

    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['balance'] = $balance;
}

if ($conn->query($sql) == TRUE) {
    header('Location: userprofile.php');
    exit();
} else {
    $error = "Invalid username or password";
}
$conn->close();
?>