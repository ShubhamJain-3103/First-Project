<?php 

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$emailfrom=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	
	$mailto="official7wave@gmail.com";
	$headers="From : ".$mailfrom;
	$txt="You have recieved mail from : ".$name."\n\n".$message;
	
	mail($mailto,$subject,$txt,$headers);
	echo "Mail send successfully!";
}


?>

<html>
<head><title>Contact Us | 7 Waves</title></head>
<body>

<form action="mail.php" method="POST">

<input type="text" name="name" placeholder="Your Name" required/>
<input type="mail" name="email" placeholder="Your E-Mail" required/>
<input type="text" name="subject" placeholder="Your Subject" required/>
<textarea type="text" name="message" placeholder="Your Message"></textarea>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>