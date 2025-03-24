<?php
session_start();
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
    // 3 verifier le mot de passe
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //print_r($user);
    $dbPassword = $user['password'];

    if(password_verify($password, $dbPassword)){
        session_regenerate_id();
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] =  $user['name'];
        $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']);


        header('location:client-index.php');
    }else{
        header('location:login.php?msg=2');
    }
}else{
    header('location:login.php?msg=1');
}
