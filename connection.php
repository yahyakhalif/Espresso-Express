<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "haskha2000";
$dbname = "espresso_express";

if(!$con = mysqli_connect($dbhost,$dbuser, $dbpassword, $dbname))
{
    die("failed to connect");
}


