<?php
$server = "localhost";
$dbuser = "root";
$dbpwd  = "";
$dbname = "finalwad2";

$conn = mysqli_connect($server, $dbuser, $dbpwd, $dbname);

if (!$conn) {
    die('Connection failed.' . mysqli_connect_error());
}