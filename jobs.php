<?php
include('db.php');

$SQL = "SELECT * FROM newuser";
$exeSQL = mysqli_query($conn, $SQL);
$id =  mysqli_num_rows($exeSQL);

if ($id != 0) {
    $arrayu = mysqli_fetch_array($exeSQL);
    $Message = "Success";
} else {
    $Message = "Does not have jobs in database";
}

$response[] = array("Message" => $Message, "list" => $arrayu);
echo json_encode($response);
