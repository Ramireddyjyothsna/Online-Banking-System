<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style>
        button {
            transition: 1.5s;
        }

        button:hover {
            background-color: #616C6F;
            color: white;
        }

        .con img {
            height: 450px;
            padding-left: 30px;
            padding-right: 20px;
            padding-top: 80px;
        }

        .table-responsive-sm {
            width: 60rem;
        }
    </style>
</head>

<body style="background-color : #ececec;">
    <?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    ?>

    <?php
    include 'navbar.php';
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="con">
                <img src="myimg/pay.jpg" alt="">
            </div>
            <div class="col-md-6">
                <div class="container">
                    <h2 class="text-center pt-4" style="color : #6c757d;">Remove Users</h2>
                    <br>
                    <div class="row">
                        <div class="col">
                            <div class="table-responsive-sm">
                                <table class="table table-hover table-sm table-striped table-condensed table-bordered table-dark" style="border-color:white;">
                                    <thead style="color : white;">
                                        <tr>
                                            <th scope="col" class="text-center py-2">Id</th>
                                            <th scope="col" class="text-center py-2">Name</th>
                                            <th scope="col" class="text-center py-2">E-Mail</th>
                                            <th scope="col" class="text-center py-2">Total Balance</th>
                                            <th scope="col" class="text-center py-2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $cnt = 1;
                                        while ($rows = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <tr style="color : white;">
                                                <td class="py-2"><?php echo $cnt;; ?></td>
                                                <td class="py-2"><?php echo $rows['name'] ?></td>
                                                <td class="py-2"><?php echo $rows['email'] ?></td>
                                                <td class="py-2">Rs. <?php echo $rows['balance'] ?> /-</td>
                                                <td><a href="removeuserrq.php?id= <?php echo $rows['id']; ?>"> <button type="button" class="btn btn-danger" style="border-radius:0%;">Remove</button></a></td>
                                            </tr>
                                        <?php
                                            $cnt = $cnt + 1;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</body>

</html>