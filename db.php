<?php
$conn = mysqli_connect('database-1.c2fj7fxdnxzk.ap-southeast-1.rds.amazonaws.com', 'admin', 'L1993Lapho');
$database = mysqli_select_db($conn, 'signintrial');

$encodedData = file_get_contents('php://input');  // take data from react native fetch API
$decodedData = json_decode($encodedData, true);
