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
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!-- bootstrap3links -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">

  @import url('https://fonts.googleapis.com/css?family=Quicksand');
.footer {
  padding: 20px;

  background: #ddd;
  margin-top: 20px;
}
body {
  font-family: Arial;
  
  background: #f1f1f1;
}

.fa2{
  padding: 20px;
  font-size: 30px;
  width: 70px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  /*border-radius: 50%;*/
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 70px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}
* {
  box-sizing: border-box;
}

input[type=text], select, textarea  {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=number], select, textarea  {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=Date], select, textarea  {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=password], select, textarea , pattern {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}


label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #dd4b39;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-align: center;
  
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  /*background-color: #f2f2f2;*/
  padding: 20px;
  text-align: center;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 45%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>

</head>
<body>
  <nav class="navbar navbar-default" style="background-color: rgb(32,31,37); font-family: sans-serif; font-size: 130% ;  text-align: center; " 
  >
  
   <!-- <div class="container-fluid"> -->
     <div class="navbar-header"><br>
       
 <div style="height:100px; ">
         <img src="Logopit_1571920426174.jpeg" class="rounded-circle" alt="Cinque Terre" width="80" height="80"></div>
 
     <!-- </div> -->
     <div  style="  color: white; text-align: center; >
 
       <a href="#" style="color: white"></a>
       <a href="index.php" style="color: white; padding-left: 20px;">Home</a>
       <a href="index.php#about" style="color: white ;padding-left: 20px;">About</a>
       <a href="index.php#courses" style="color: white ; padding-left: 20px;">Services</a>
       <!-- <a href="index.php" style="color: white;padding-left: 20px">Contact</a> -->
       <a href="LoginPage.php" style="color: white ;padding-left: 20px;">Login</a>
  <h2 class="navheading" ><strong>
       Forgot password
     </strong></h2>
     
 
   </div>
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
	  <div class ="row">
	   <div class="col-25">
          
        <label for="Password"> New Password</label>
      </div>
      <div class="col-75">
         <input type="password" id="password" name="password" placeholder="Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
      </div>
    </div>
    
	<div class="row">
      <div class="col-25">
          
        <label for="Password"> Confirm Password</label>
      </div>
      <div class="col-75">
         <input type="password" id="psw" name="cpassword" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
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


        




</body>
</html>