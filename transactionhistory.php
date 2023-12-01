<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style>
        body {
            background-color: #ececec;
        }

        .con img {
            height: 450px;
            padding-left: 30px;

            padding-top: 80px;
        }

        .table-responsive-sm {
            width: 60rem;
        }
    </style>
</head>

<body>

    <?php
    include 'navbar.php';
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="con">
                <img src="myimg/history2.webp" alt="">
            </div>
            <div class="col-md-6">
                <div class="container">
                    <h2 class="text-center pt-4" style="color :#6c757d;">Transaction History</h2>

                    <br>
                    <div class="table-responsive-sm">
                        <table class="table table-hover table-striped table-condensed table-dark table-bordered">
                            <thead style="color : white;">
                                <tr>
                                    <th class="text-center">S.No.</th>
                                    <th class="text-center">Sender</th>
                                    <th class="text-center">Receiver</th>
                                    <th class="text-center">Amount</th>
                                    <th class="text-center">Date & Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                include 'config.php';

                                $sql = "SELECT * FROM transaction";

                                $query = mysqli_query($conn, $sql);

                                while ($rows = mysqli_fetch_assoc($query)) {
                                ?>

                                    <tr style="color : white;">
                                        <td class="py-2"><?php echo $rows['sno']; ?></td>
                                        <td class="py-2"><?php echo $rows['sender']; ?></td>
                                        <td class="py-2"><?php echo $rows['receiver']; ?></td>
                                        <td class="py-2">Rs. <?php echo $rows['balance']; ?> /-</td>
                                        <td class="py-2"><?php echo $rows['datetime']; ?> </td>

                                    <?php
                                }

                                    ?>
                            </tbody>
                        </table>

                    </div>
                </div </body>

</html>