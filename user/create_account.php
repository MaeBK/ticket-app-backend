<?php
include '../connection.php';

$userName $_POST['user_name'];
$userEmail $_POST['user_email'];
$userPassword md5($_POST['user_password']);
$pattern = '/^\S+@\S+.\S+$/';

$sqlQuery = "INSERT INTO users_table SET user_name = '$userName', user_email = '$userEmail', user_password = '$userPassword'";

$responseOfQuery = $connectNow->query($sqlQuery);

if($responseOfQuery){
    echo json_encode(array("success"=>true))
} else{
    echo json_encode(array("success"=>false))
}

if (preg_match($pattern, $email)) {
    echo "Email is valid according to regex.";
} else {
    echo "Email is invalid according to regex.";
}