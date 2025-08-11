<?php
include '../connection.php';

//POST (sending/save data -> MySQL)
//GET (getting data -> MySQL)

$userName $_POST['user_name'];
$userEmail $_POST['user_email'];
$userPassword md5($_POST['user_password']);

$sqlQuery = "INSERT INTO users_table SET user_name = '$userName', user_email = '$userEmail', user_password = '$userPassword'";

$responseOfQuery = $connectNow->query($sqlQuery);

if($responseOfQuery){
    echo json_encode(array("success"=>true))
} else{
    echo json_encode(array("success"=>false))
}