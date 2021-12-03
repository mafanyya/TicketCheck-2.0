<?php
namespace App;

$hostname = 'localhost';
$username = 'root';
$password = 'root';
$database = 'ticketcheck';
$connect = mysqli_connect($hostname,$username,$password,$database);


if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($connect);
