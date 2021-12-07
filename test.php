<?php
include "connect.php";
global $connect;
//$hash = fgets(STDIN);
$hash = "9e6a55b6b4563e652a23be9d623ca5055c356940";

$q = "SELECT IF(COUNT(*) >0, TRUE,FALSE) as Hash FROM booking WHERE Hash = '$hash'";
$isHash = mysqli_query($connect, $q);

$row = mysqli_fetch_assoc($isHash);

$isHash = $row['Hash'];
var_dump($isHash);


