<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <title>Confirmation</title>
</head>
<body>



<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
//echo "<pre>";
//var_dump($_POST);
//echo "</pre>";

/*
 * array(11) {
  ["firstName"]=>
  string(6) "Dmytro"
  ["lastName"]=>
  string(7) "Boichuk"
  ["jobTitle"]=>
  string(6) "Intern"
  ["company"]=>
  string(5) "Orion"
  ["url"]=>
  string(21) "https://something.com"
  ["email"]=>
  string(13) "adg@gmail.com"
  ["howWeMet"]=>
  string(5) "other"
  ["other"]=>
  string(12) "other option"
  ["message"]=>
  string(23) "Hi how are you, message"
  ["exampleCheck1"]=>
  string(2) "on"
  ["exampleRadios"]=>
  string(7) "option1"
}
 */

$first='';
$last='';
$email='';
$url='';
$howWeMet='';
$sus='No';

$job='';
$company='';
$other='';
$message='';

$emailFormat='';

if($_POST['company']!=""){
    $company=$_POST['company'];
}
if($_POST['jobTitle']!=""){
    $job=$_POST['jobTitle'];
}
if($_POST['other']!=""){
    $other=$_POST['other'];
}
if($_POST['message']!=""){
    $message=$_POST['message'];
}








require ('valid.php');

if(validName($_POST['firstName'])){
    $first=$_POST['firstName'];

}
else{
    die("First Name Required!");
}

if(validName($_POST['lastName'])){
    $last=$_POST['lastName'];
}
else{
    die("Last Name Required!");
}

if($_POST['email']!='') {
    if (validEmail($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        die("Provide valid email!");
    }
}

if(isset($_POST['exampleCheck1'])){
    $sus="Yes";
    if(!validEmail($_POST['email'])){
        die("Have to provide email for mailing list!");
    }
    if($_POST['exampleRadios']=="option1"){
        $emailFormat='HTML';
    }
    else if ($_POST['exampleRadios']=="option2"){
        $emailFormat='Text';
    }
}
if($_POST['url']!='') {
    if (validUrl($_POST['url'])) {
        $url = $_POST['url'];
    } else {
        die("Provide valid LinkedIn address!");
    }

}

if(validAnswer($_POST['howWeMet'])){
    $howWeMet=$_POST['howWeMet'];
}
else{
    die('Provide an answer to "How We Met"!');
}


require ("db.php");
$datestamp=date("Y-m-d");

$sql="INSERT INTO guestbook (firstName,lastName,jobTitle,company,linkedIn,email,howWeMet,other,message,mailingList,emailFormat,datestamp)
VALUES('$first','$last','$job','$company','$url','$email','$howWeMet','$other','$message','$sus','$emailFormat','$datestamp')";

mysqli_query($cnxn,$sql);


echo "<h1>Thank you!</h1>";
echo "<p>Name: $first, $last<br>Email: $email<br>LinkedIn Url: $url <br> How we met: $howWeMet<br>Suscription: $sus </p>"







?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>