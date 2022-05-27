<?php
session_start();
$server = "localhost";
$dbuser = "root";
$dbpwd  = "";
$dbname = "finalwad2";

$conn = mysqli_connect($server, $dbuser, $dbpwd, $dbname);

if (!$conn) {
    die('Something went horribly wrong!' . mysqli_connect_error());
}