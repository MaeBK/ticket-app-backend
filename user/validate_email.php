<?php

include '../connection.php';

$userEmail $_POST['user_email'];

$sqlQuery "SELECT * FROM users_tables WHERE user_email='$userEmail'";

$responseOfQuery = $connectNow->query($sqlQuery);

if($responseOfQuery -> num_rows > 0){
    echo json_encode(array("emailFound"=>true))
} else{
    echo json_encode(array("emailFound"=>false))
}