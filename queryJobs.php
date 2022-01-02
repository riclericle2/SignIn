<?php
include('db.php');

$Designation = $decodedData['Designation'];
print($searchStr);

$SQL = "SELECT * FROM employer_job WHERE designation = '$Designation'";
$exeSQL = mysqli_query($conn, $SQL);
$id =  mysqli_num_rows($exeSQL);


if ($id != 0) {
    $i = 0;
    $output = [];
    while($row = mysqli_fetch_array($exeSQL)){
        $output[$i] = $row;
        $i++;
    }
    $Message = "Success";
} else {
    $Message = "Does not have what you want in database";
}

$response[] = array("Message" => $Message, "list" => $output);
echo json_encode($response);
