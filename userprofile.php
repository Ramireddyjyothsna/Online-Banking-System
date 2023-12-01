<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href="profile.css">
    <style>
        .main-1 img {
            height: 450px;
            padding-left: 30px;
            padding-right: 20px;
            padding-top: 80px;
        }
    </style>
</head>

<body style="background-color : darkgrey;">

    <?php
    include 'navbar.php';
    ?>
    <h2 class="text-center pt-4">User Profile</h2>
    <br>

    <div class="main">
        <div class="main-1">
            <img src="myimg/userprofile.webp" alt="">
        </div>
        <div class="main-2">
            <label for="">Name</label> <br><br>
            <span><?php echo $_SESSION['name']; ?></span> <br><br>
            <label for="">Email-Id</label> <br><br>
            <span><?php echo $_SESSION['email']; ?></span> <br><br>
            <label for="">Password</label><br><br>
            <span><?php echo $_SESSION['password']; ?></span> <br><br>
            <label for="">Initial Balance</label><br><br>
            <span><?php echo $_SESSION['balance']; ?></span> <br><br>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26