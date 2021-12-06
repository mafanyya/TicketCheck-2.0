<?php

include "connect.php";
global $connect;

$selectId= "SELECT MAX(Passenger_id) FROM passengers";
$passengerID = mysqli_query($connect,$selectId);

$row = mysqli_fetch_assoc($passengerID);

$passenger_id = $row['MAX(Passenger_id)'];
var_dump($passengerID);

// 2 5  0 1 1 0 2 1 0

//da39a3ee5e6b4b0d3255bfef95601890afd80709
//da39a3ee5e6b4b0d3255bfef95601890afd80709