<?php
include '../connection.php';

//POST (sending/save data -> MySQL)
//GET (getting data -> MySQL)

$userEmail $_POST['user_email'];
$userPassword md5($_POST['user_password']);

$sqlQuery = "SELECT* FROM users_table WHERE user_email = '$userEmail' AND user_password = '$userPassword'";

$responseOfQuery = $connectNow->query($sqlQuery);

if($responseOfQuery->num_rows > 0){

    $userRecord = array();
    while($rowFound = $resultOfQuery->fetch_assoc()){
        $userRecord = $rowFound;
    }

    echo json_encode(
        array(
            "success"=>true,
            "userData"=>$userRecord[0],
        ));
} else{
    echo json_encode(array("success"=>false));
}