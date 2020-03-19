<?php 

session_start();
if(empty($_SESSION['email'])){
  header("Location:LoginPage.php?value=You have to Login.");
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  


<style>
* {
  box-sizing:border-box;
 
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  
 
}

.container {
  padding: 64px;
}

.row:after {
  content: "";
  display: table;
  clear: both
}

.column-66 {
  float: left;
  width: 66.66666%;
  padding: 0px;
  line-height: 25px;
}

.column-33 {
  float: left;
  width: 33.33333%;
  padding: 20px;
  line-height: 25px;
}

.large-font {
  font-size: 48px;
}

.xlarge-font {
  font-size: 64px
}

.button {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  background-color: #4CAF50;
}

img {
  display: block;
  height: auto;
  max-width: 100%;
}

@media screen and (max-width: 1000px) {
  .column-66,
  .column-33 {
    width: 100%;
    /* text-align: center; */
    line-height: 25px;
    font-size:80%;
  }
  .xlarge-font {
  font-size: 250%;
}
  .fa {
  padding: 10px;
  font-size: 20px;
  width: 40px;
  text-align: center;
  text-decoration: none;
  margin: .75px .52px;
  border-radius: 50%;
}
  img {
    margin: auto;
  }
}
  .footer {
  padding: 20px;

  background: #ddd;
  margin-top: 20px;
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
.navbar2{
    padding-left: 5%;
    float: left;
   width: 33.33%;
  
   height: 90px;
   border-radius: 50%;

}



</style>
<title>Blog | 7WAVES</title>
</head>
<body>

<nav  style="background-color: rgb(32,31,37); font-family: sans-serif; font-size: 130% ;  text-align: center; ">
    <div class="navbar2" >
	<img src="Logopit_1571920426174.jpeg" style="border-radius: 50%;" alt="Cinque Terre" width="80" height="80">
	</div><br>
   
       <!-- </div> -->
       <div  style="  color: white; text-align: right; padding-right: 5%;">
   
         <a href="#" style="color: white"></a>
         <a href="index.php" style="color: white; padding-left: 20px;">Home</a>
         <a href="index.php#about" style="color: white ;padding-left: 20px;">About</a>
         <a href="index.php#courses" style="color: white ; padding-left: 20px;">Services</a>
         <!-- <a href="index.html" style="color: white;padding-left: 20px">Contact</a> -->
         <a href="logout.php" style="color: white ;padding-left: 20px;"><?php echo $_SESSION['logout'];?></a><br>
    <h2 class="navheading" style="text-align: center;padding-right: 35%;" ><strong>
         BLOG PAGE
       </strong></h2>
       
       
   
     </div>
   </nav>
  




<!-- Clarity Section -->
<div class="container" style="background-color:#f1f1f1">
  <div class="row">
    <div class="column-33"><img src="PicsArt_01-26-06.12.16.jpg" alt="App" width="335" height="471" style="padding-top:200px;"></div>
    <div class="column-66">
    <h1 class="xlarge-font"><b>Depression</b></h1>
 <p>
There are times in life when you feel like things will never get better and feelings of sorrow will never end. Now the 
question arises what can you do at these times, when you feel depressed, unambitious, or confused in life, the answer of all 
your mysteries is 7 WAVES.If you start to feel depressed, your first step should be to focus on your time and energy and 
yourself. Taking care of yourself emotionally, creatively, physically, and mentally can help you to turn your sad thoughts 
and feelings into more positive ones. 7 WAVES can help you to tackle all your problems and implementing those tips in life.
</p>
Here are some symptoms of Depression-
<ul>
<li>Feeling sad or having a depressed mood.</li>
<li>Loss of interest or enjoyment in activities once liked</li>
<li>Changes in appetite — weight loss or gain irrelevant to dieting</li>
<li>Trouble sleeping or sleeping too much</li>
<li>Loss of energy or increased tiredness</li>
<li>Increase in purposeless physical activity or slowed movements and speech</li> 
<li>Feeling worthless or guilty</li>
<li>Difficulty thinking, concentrating and making decisions</li>
<li>Thoughts of failure or self-destruction</li>
</ul>
Here are some steps that you can try to take care of yourself to feel better
<ul>
<li>Exercise regularly & eat healthy foods.</li>
<li>Get an adequate amount of sleep each night.</li>
<li>Find purpose. Put your focus on someone or something other than yourself.</li>
<li>Create a list of small goals to achieve, count them off as you accomplish them.</li>
<li>Journal your thoughts each night before bed to clear your</li>
<li>Listen to music or watch a movie that makes you happy.</li>
<li>Do a creative activity as a way of distraction.</li>
<li>Don't isolate yourself, be around people even you are doing nothing.</li>
<li>Be present at the moment. Recognize and appreciate your surroundings and the people in your life.</li>
<li>Meditate to relax and refocus your thoughts</li>
</ul>
<p>
Depression is a common but serious medical malady that negatively affects how you feel, how you act and the way 
you think. Fortunately, it is treatable. Depression causes a feeling of sadness and a loss of interest in activities 
once enjoyed. It leads to a variety of emotional and physical problems. It can decrease a person’s ability to perform both 
at work and home. We will ensure that once you get connected with 7 WAVES, you will be able to overcome depression</p>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="column-66">
    <h1 class="xlarge-font"><b>Motivation</b></h1>
<p>Motivation is a psychological phenomenon which helps you convert your abilities into performance.</p>

<ul><li>Motivation is goal-oriented.</li>
<li>Motivation is a continuous process.</li>
<li>Motivation may be positive or negative.</li>
<li>Motivation may be internal or external.</li>
<li>Motivation may be considered as a sum and not by parts.</li></ul>
 
 
<p>We at 7 WAVES aware people their internal motivation. We understand the value of internal motivation and the ways it can help someone who 
has lost hope in life.If you think your life isn't fair, think again.Don’t be afraid to fail. Don't be afraid to try. 
If you think there is no hope left in your life, we WELCOME YOU TO THE 7 WAVES. We will become your hope and assure you that you feel the difference 
from inside. The improvement in confidence, attitude, personality, and overall development will help you to meet a better version of yours.</p>
<p>TRUST US BECAUSE WE DON’T BELIEVE IN WASTING TIME. ONE LIFE, ONE CHANCE. A GREAT FUTURE DOESN’T REQUIRE A GREAT PAST IT JUST REQUIRES A CHANCE.</p>
    </div>
    <div class="column-33">
    <img src="PicsArt_02-05-12.46.24.jpg" width="335" height="471" style="
    padding-top: 100px;
">
    </div>
  </div>
</div>


<div class="container" style="background-color:#f1f1f1">
  <div class="row">
    <div class="column-33">
    <img src="PicsArt_02-01-12.24.08.jpg" alt="App" width="335" height="471" style="
    padding-top: 100px;
">
    </div>
    <div class="column-66">
	<p><h1 class="xlarge-font"><b>Introspection</b></h1>
Introspection means to know yourself.</p>
 <ul>
<li>It means to Understand your situation.</li>
<li>Dedicate time to yourself. </li>
<li>Spending time alone is the most enjoyable thing.</li>
<li>Stick to what’s in front of you.</li>
<li>THINK, ACT, GROW.</li></ul>
 <p>
DO YOU LOVE YOURSELF?
 WE ARE HERE WITH YOU to help you solve the puzzle of life.
Please visit us and believe that we will provide you the solutions for every difficult situation in life. We will provide you the best guidance available today. Also, we will share our experiences with you.</p>
<p>YOU CAN'T LIVE YOUR LIFE TO THE FULLEST UNLESS YOU INROSPECT YOURSELF.
YOU HAVE ALREADY GOT YOUR WINGS. ALL YOU NEED TO DO IS TO FLY. WE WILL HELP YOU IN THIS TRANSFORMATION.
WHEN THINGS AREN’T SUMMING UP TO YOUR LIFE THEN START SUBTRACTING THEM.</p>
    </div>
  </div>
</div>
<div class="container" style="background-color:#f1f1f1">
  <div class="row">
    <div class="column-33">
      <img src="PicsArt_02-02-02.37.07.jpg" alt="App" width="335" height="471">
    </div>
    <div class="column-66">
      <h1><b>CAREER CONSULTANCY</b></h1>
	<p>Dreams don't come true unless you do. The path to your dreams is not always easy to navigate. Remember to believe in yourself and your dreams. Only you have the patience, the courage, and the passion to turn things around. So, never give up because dreams don't come true through magic overnight.
     You need to work harder each day to make every step count in the staircase towards success.</p>
     <p><i>NOTHING HAPPENS UNLESS FIRST A DREAM<br>
  -CARL SANDBURG</i></p>
  <p>Choosing and being able to accomplish a job that you always dreamt of is a nutshell to crack. It's a dream come true. Dream job never exists, so don't just wish for your dream job, start working for it. Put all your will, dedication and determination to achieve the career you want. Things may seem tough at the start but you will notice how moving just one step closer towards your dream job gives you immense pleasure and happiness.</p>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="column-66">

      <h2><p><b>"NOTHING CAN DIM THE LIGHT WHICH SHINES FROM WITHIN."</b></p></h2>
<p>At some points in our life, we need to change the habits and lifestyle to gain more and more.
When a change is brought forward and people don't like it can often lead to hate.
But is it beneficial, is it leading you to your goal, is it worth? Think and apply. No matter what kind of challenges or painful situations you go
through during the change, but if you reach down and deep within yourself, you'll find your inner strength.
'This is for what change is required or necessary.'
"Be the change that you wish to see in the world."
To know the world, first you have to know yourself. Everyone think of changing the world, but no one thinks of changing himself. 
Some changes look negative on the surface but soon you will realize that space is being created in your life for something new to emerge.
"To improve is to change, so to be perfect is to have changed often" </p>
    </div>
    <div class="column-33">
        <img src="PicsArt_01-31-04.57.25.jpg" width="335" height="471" >
    </div>
  </div>
</div>

<!-- Clarity Section -->
<div class="container" style="background-color:#f1f1f1">
  <div class="row">
    <div class="column-33">
    <img src="PicsArt_02-04-11.20.51.jpg" alt="App" width="335" height="471" style="
    padding-top: 80px;
">
    </div>
    <div class="column-66">
      <h1><p><b>SAY HI TO 7WAVES!</b></p></h1>
      
      <p>Welcome to 7 Waves

‘7 Waves’ is our startup idea which will help people to tackle problems in their life efficiently and smartly. It is a platform where we help people to
 recognize their self-worth and make them realize their inner potential that lives within them. Life is also like a wave that has many ups and downs. 
 We encourage people to live their life in the most joyful way. We make them realize the beauty of life and the joy it can bring in their life when they 
 start to apply positive approach. Positive approach help you to think in a far better way.
The 7 of 7 Waves are our 7 parameters which help you to classify, recognize and solve your problem efficiently. 
So, let's recognize your wave or waves and work on them with us to propagate your waves of life smoothly.
The Wave of 7 Waves is like a wave of life that has many ups and downs. All the joyful and happy moments are ups and all depressing and failure are downs
 but how much high you bounce after hitting the bottom or down that is life. Don't stick to bottom made a progress and get ready to touch new up or bounce 
 back from new and old downs with us. </p>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="column-66">
      <h1><b>REINVENT YOURSELF</b></h1>
      <p>It is rightly said, "Never be afraid to reinvent yourself ." Today people are afraid to change for a better tomorrow. We at 7 WAVES help you
	  with your self-reinvention. Either you live your life with reasons of failure or start making significant changes for a better future. Give us a 
	  chance, we will help you. Never forget 7 WAVES works for making the impossible possible.

</p>
    </div>
    <div class="column-33">
        <img src="PicsArt_01-29-10.36.10.jpg" width="335" height="471" >
    </div>
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
