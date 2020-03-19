<?php
require_once("vendor/autoload.php");
$client = new MongoDB\Client(
    'mongodb+srv://sj:CPfuPMuDtAAt4WY9@cluster0-ukc8e.mongodb.net/test?retryWrites=true&w=majority');

$db=$client->student; //database
$collection=$db->signup_data;

?>
