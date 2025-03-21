<?php
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location:login.php');
}

//print_r($_POST);
require('db/connex.php');

foreach($_POST as $key=>$value){
    $$key = mysqli_real_escape_string($connex, $value);
}

// 1 verifier l utilisateur

$sql =  "SELECT * FROM user WHERE username = '$username'";

$result = mysqli_query($connex, $sql);

// 2 count result user === 1

$count = mysqli_num_rows($result);
if($count == 1){
    echo "success";
}else{
    header('location:login.php?msg=1');
}
