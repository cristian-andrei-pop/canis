<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "canis";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Failed to connect!");
}