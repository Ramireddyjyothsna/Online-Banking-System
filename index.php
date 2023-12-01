<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <title>Online Banking System</title>
</head>

<body>
  <?php
  include 'navbar.php';
  ?>

  <div>
    <div class='main' style="background-color: aliceblue;">
      Here you can see your profile,make transactions.....successfully
    </div>

  </div>

  <!-- Activity section -->
  <div class="row activity text-center">
    <div class="col-md act">
      <img src="myimg/bankmang.webp" class="img-fluid" style="height:300px;">
      <br>
      <a href="userprofile.php"><button style="background-color : darkgreen;border-radius:5px;" style="border-radius:0%">User profile</button></a>
    </div>
    <div class="col-md act">
      <img src="myimg/pay.jpg" class="img-fluid" style="height:300px;">
      <br>
      <a href="removeuser.php"><button style="background-color : darkgreen;border-radius:5px;" style="border-radius:0%">Delete Users</button></a>
    </div>
    <div class="col-md act">
      <img src="myimg/tranfer2.webp" class="img-fluid" style="height:300px;">
      <br>
      <a href="transfermoney.php">
        <button style="background-color : darkgreen;border-radius:5px;">Make a Transaction</button></a>
    </div>


    <div class="col-md act">

      <img src="myimg/history.webp" class="img-fluid" style="height:300px;">
      <br>
      <a href="transactionhistory.php"><button style="background-color : darkgreen;border-radius:5px;">Transaction History</button></a>
    </div>

  </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>