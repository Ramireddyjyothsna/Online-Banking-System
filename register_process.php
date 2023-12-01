<?php
session_start();

$dbhost = 'localhost';
$dbname = 'banksysphp';
$dbuser = 'root';
$dbpass = '';

// connect to the database
$conn = mysqli_connect("$dbhost", "$dbuser", "$dbpass", "$dbname");

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// get the form data
$name = $_POST['name'];
$password = $_POST['pwd'];
$email = $_POST['email'];
$balance = $_POST['balance'];

// insert the data into the users table
$sql = "INSERT INTO users(name,password,email,balance) VALUES ('$name','$password', '$email', '$balance')";
$result = $conn->query($sql);

if ($result == TRUE) {
	// alert('Inserted successfully');
	$_SESSION['name'] = $name;
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $password;
	$_SESSION['balance'] = $balance;
	header('Location: userprofile.php');
	echo "<script>Data inserted successfully</script>";
	exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// close the database connection
mysqli_close($conn);

?>