<?php
ini_set('display_errors',1);
error_reporting(E_ALL);


function validName($name){
    return !empty(trim($name));
}

function validEmail($email){
    return strpos($email,'@') && strpos($email,".");
}
function validUrl($url){
    return substr( $url, 0, 4 ) === "http" && substr($url,strlen($url)-4)==='.com';
}

function validAnswer($ans){
    $array=['meetup','jobFair','other','havent'];
    return in_array($ans,$array);
}



function validPhone ($phone){
    return strlen($phone)>= 7;
}