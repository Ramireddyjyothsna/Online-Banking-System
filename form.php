<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="loginstyle.css">
    <script src="https://kit.fontawesome.com/b51a79f38f.js" crossorigin="anonymous"></script>
</head>

<body>
    
    <div class="container">
        <div class="form-box">
            <h2 id="title">Sign up</h2>
            <form name="myform"  action='login_process.php' method="POST"> 
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="name" placeholder="User name" required>
                    </div>


                    <div class="input-field" id="namefield">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" placeholder="Enter e-mail here">
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" placeholder="Enter password here" required>
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="number" name="balance" placeholder="Initial Balance" required>
                    </div>
                </div>

                <div class="butn">
                    <button type="submit" id="signupBtn" class="signupBtn" name="submit">Sign up</button>
                    <div>
                        <p>Want to login without Email-Id<br> Then
                        </p>
                    </div>
                    <button type="submit" id="signinBtn" class="disable" name="submit"><a href="index.php">Sign in</a></button>
                </div>
            </form>
            <div>

            </div>

        </div>
    </div>
    <script>
        let signupBtn = document.getElementById("signupBtn");
        let signinBtn = document.getElementById("signinBtn");
        let namefield = document.getElementById("namefield");
        let title = document.getElementById("title");

        signinBtn.onclick = function() {
            namefield.style.maxHeight = "0";
            title.innerHTML = "Sign in";
            signupBtn.classList.add("disable");
            signinBtn.classList.remove("disable");
        }
        signupBtn.onclick = function() {
            namefield.style.maxHeight = "60px";
            title.innerHTML = "Sign up";
            signupBtn.classList.remove("disable");
            signinBtn.classList.add("disable");
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>