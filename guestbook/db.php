<?php
    $username= 'dboichuk_grcuser';
    $database='dboichuk_grc';
    $password='Dimkab99!@#$';
    $hostname='localhost';

    $cnxn= @mysqli_connect($hostname,$username,$password,$database) or die("Error connecting to database: ". mysqli_connect_error());

