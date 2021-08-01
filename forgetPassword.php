<?php

require("mongo-config.php");

//database=student $db
//collection=signup_data $collection

$email=$password=$cpassword='';
$nhpassword=$nhcpassword='';
$error=array('submit'=>'','success'=>'');

if(isset($_POST['submit'])){
	$email=htmlspecialchars($_POST['email']);
	$nhpassword=htmlspecialchars($_POST['password']);
	$nhcpassword=htmlspecialchars($_POST['cpassword']);
	$password=password_hash($nhpassword,PASSWORD_DEFAULT);
	$cpassword=password_hash($nhcpassword,PASSWORD_DEFAULT);
	if(!($cpassword=$password)){
		$error['submit']='The password must match. Please re-check your password!';
		exit;
	}else{
		$query = $collection->findOne(['email'=>$email]);
		if($query['email']=$email){
			if($query['password']=$password){
				$uppdateResult = $collection->updateOne(['name'=>$email],['$set'=>['password'=>$password]]);
				 //$error['success']='The pasword is updated successsfully!';
				 header("Location: LoginPage.php");
				 exit;
			}else{
				$error['submit']='User not found!';
				exit;
			}
		}else{
			$error['submit']='User not found!';
			exit;
		}
	}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forgot Password | 7 Waves</title>
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
        <h2><strong>Forgot Password</strong></h2>
    </nav>
    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">


                <form action="forgetPassword.php" method="POST">

                    <h4 style="text-align: center;">Please enter your valid Email id.</h4>
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

                            <label for="Password"> New Password</label>
                        </div>
                        <div class="col-75">
                            <input type="password" id="password" name="password" placeholder="Your Password"
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">

                            <label for="Password"> Confirm Password</label>
                        </div>
                        <div class="col-75">
                            <input type="password" id="psw" name="cpassword" placeholder="Confirm Password"
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                required>
                        </div>
                    </div>
                    <br>
                    <div style="color:green"><?php echo $error['success'];?></div>
                    <div style="color:red"><?php echo $error['submit'];?></div>
                    <div><input type="submit" name="submit" value="submit"></div>
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
        <script src="./js/loginpage.js"></script>
        <!--  -->
</body>

</html>