<?php
include('db2.php');

$Email =  $decodedData['Email'];
$jobCate =  $decodedData['jobCate'];
$exp =  $decodedData['exp'];
$edu_level =  $decodedData['edu_level'];
$phone =  $decodedData['phone'];
$exp_salary =  $decodedData['exp_salary'];
$hkid =  $decodedData['hkid'];
$bank_id =  $decodedData['bank_id'];
$personal_des =  $decodedData['personal_des'];

$SQL2 = "UPDATE user SET jobCate =  $'jobCate',exp =  $'exp',edu_level =  $'edu_level',phone =  $'phone',exp_salary =  $'exp_salary',hkid =  $'hkid',bank_id =  $'bank_id',personal_des =  $'personal_des' WHERE email='$Email'";
$SQL = "SELECT * FROM user WHERE email = '$Email'"; 
$exeSQL = mysqli_query($conn, $SQL); 
$checkEmail = mysqli_num_rows($exeSQL);

if ($checkEmail != 0) {
$arrayu = mysqli_fetch_array($exeSQL);
$exeSQL = mysqli_query($conn, $SQL2);
$Message = 1;
}else {
$Message = 0;
}

$response[] = array("Message" => $Message);
echo json_encode($response);