<?php

if($_SERVER['REQUEST_METHOD'] != "POST"){
    header('location:client-index.php');
}

require_once('db/connex.php');

foreach($_POST as $key=>$value){
    $$key = mysqli_real_escape_string($connex, $value);
}

$sql = "UPDATE client SET name = '$name', address = '$address', phone = '$phone', email = '$email', birthday = '$birthday', city_id = '$city_id' WHERE id = '$id'";


if(mysqli_query($connex, $sql)){
    header('location:client-index.php');
}else{
    echo "Error ".mysqli_error($connex);
}

