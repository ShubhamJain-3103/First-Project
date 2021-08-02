<?php
session_start();
require("mongo-config.php");

$email = $password = $nhpassword = '';
$error = array('submit' => '', 'success' => '');

if (isset($_SESSION['_id'])) {
    header("Location:blogPage.php?id=" . rand());
}
if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error['submit'] = 'There are errors in the form!';
        exit;
    }
    $email = htmlspecialchars($_POST['email']);
    $nhpassword = htmlspecialchars($_POST['password']);
    $password = password_hash($nhpassword, PASSWORD_DEFAULT);

    $query = $collection->findOne(['email' => $email]);

    if ($query) {
        if ($query['password'] = $password) {
            //$error['success']='Signup success';
            $_SESSION['_id'] = $query['_id'];
            $_SESSION['email'] = $query['email'];
            $_SESSION['logout'] = 'Logout';
            header("Location:blogPage.php?id=" . rand());
        } else {
            $error['submit'] = 'The user not found. Please Signup';
        }
    } else {
        $error['submit'] = 'The user not found. Please Signup';
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page | 7 Waves</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!--  -->
    <link rel="stylesheet" href="./css/loginpage.css">
    <!--  -->

</head>

<body>
    <nav class="mynavbar">
        <img src="./images/Logopit_1571920426174.jpeg" />
        <ul>
            <a href="#"></a>
            <a href="./index.php">Home</a>
            <a href="./index.php#about">About</a>
            <a href="./index.php#courses">Services</a>
            <a href="./StudentRegistration.php">Sign up</a>
        </ul>
        <h2><strong>Login Page</strong></h2>
    </nav>

    <main>
        <div class="jumbotron">
            <div class="container">
                <form action="./LoginPage.php" method="POST">
                    <div class="row">
                        <div class="col-25">
                            <label for="Email">Email id</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="Email" name="email" placeholder="Your email id " required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="psw">Password</label>
                        </div>
                        <div class="col-75">

                            <input type="password" id="psw" name="password" placeholder="Type your password    "
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                required>
                        </div>
                    </div><br>
                    <div style="color:green"><?php echo $error['success']; ?></div>
                    <div style="color:red"><?php echo $error['submit']; ?></div>
                    <div><input type="submit" name="submit" value="Login"> </div>

                </form>
                <h5 style="text-align: center;"><a href="forgetPassword.php">Forgot Password?</a></h5>
                </form>
            </div>
        </div>
        <div class="footer">
            <h6>Developed and maintained by 7 Waves</h6><br>
            <a href="https://www.facebook.com/7waves-102331067869510/?ti=as" class="fa fa-facebook"></a>
            <a href="https://twitter.com/official7waves?s=08" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="https://instagram.com/official7waves?igshid=yzfg5tdez7s4" class="fa fa-instagram"></a>
            <h6 style="text-align: center;">&copy; 2020. All Rights Reserved.7 Waves.</h6>
        </div>
        <!--  -->
        <script src="./js/loginpage.js" type="text/javscript"></script>
        <!--  -->
</body>

</html>