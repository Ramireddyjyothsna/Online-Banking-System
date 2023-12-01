<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="register.css">

    <script src="https://kit.fontawesome.com/b51a79f38f.js" crossorigin="anonymous"></script>
    <link rel="icon" href="logo.ico.jpg">
</head>

<body>
    <header>

    </header>
    <div class="login">
        <div class="main-1">
            <img src="myimg/user-login.webp" alt="">
        </div>
        <div class="form-box">
            <a href="index.html" class="back">back to home page</a>
            <h1 id="title">User registration</h1>
            <p><span class="span">Fields marked with asterisk (*) are mandatory</p></span>
            <form name="" action='register_process.php' method="POST">
                <div class="input-group">
                    <table cellspacing="20px">
                        <tbody>
                            <tr class="input-field">
                                <td class="label">Account number*</td>
                                <td><input type="text"></td>
                                <td class="content">(Account number is available in your passbook)</td>
                            </tr>
                            <tr class="input-field">
                                <td class="label">User name*</td>
                                <td><input type="text" name="name"></td>
                                <td class="content">(Please enter your Username)</td>
                            </tr>
                            <tr class="input-field">
                                <td class="label">Country</td>
                                <td>
                                    <select name="c" id="" class="option">
                                        <option value="">--Select country</option>
                                        <option value="">India</option>
                                        <option value="">American Samoa</option>
                                        <option value="">Australia</option>
                                        <option value="">China</option>
                                        <option value="">DPR Korea</option>
                                        <option value="">Egypt</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="input-field">
                                <td class="label">Registered Password*</td>
                                <td><input type="password" name="pwd"></td>
                                <td class="content">(Please enter Password)</td>
                            </tr>
                            <tr class="input-field">
                                <td class="label">Registered Email Id</td>
                                <td><input type="email" name="email"></td>
                                <td class="content">(Please enter E-mail Id Registered with Bank)</td>
                            </tr>

                            <tr class="input-field">
                                <td class="label">Enter your initial balance*</td>
                                <td><input type="number" name="balance"></td>
                                <td class="content">(Please enter only in numbers)</td>
                            </tr>
                            <tr class="input-field">
                                <td class="label">Enter the text shown*</td>
                                <td><input type="text"></td>
                                <td><img src="Captha.jpg" alt=""></td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="sub" name="submit">Submit</button>
            </form>
        </div>

        <p>Dear customer, <br> <br> By clicking on "Submit" you hereby give consent for the user ID to be enabled. <br>
            Please do not share your login credentials with anyone.
        </p>

    </div>
    </div>
</body>

</html>