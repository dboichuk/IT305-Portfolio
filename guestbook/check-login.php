<?php
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

if(!isset($_SESSION['un'])) {
    //store current location

    $_SESSION['page']=$_SERVER['SCRIPT_URI'];

    header("location: login.php");
}