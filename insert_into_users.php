<?php
    include 'config.php';
    if (isset($_POST['submit'])) {
        $myname = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $balance = $_POST['balance'];
        $sql = "insert into users(name,email,password,balance) values('{$myname}','{$email}','{$password}','{$balance}')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script> alert('User has been created!');
                    window.location='userprofile.php';
                    </script>";
        }
    }
