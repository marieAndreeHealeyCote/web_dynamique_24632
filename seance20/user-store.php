<?php
// print_r($_POST);
//Array ( [name] => Peter [username] => peter@gmail.com [password] => 123456 )
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location:user-create.php');
}

require('db/connex.php');

foreach($_POST as $key=>$value){
    $$key = mysqli_real_escape_string($connex, $value);
}

// echo $password;
// echo "<br>";
// echo md5($password);
// echo "<br>";
// echo password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
// echo "<br>";
$password =  password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);

$sql = "INSERT INTO user (name, username, password) VALUES ('$name', '$username', '$password')";

if(mysqli_query($connex, $sql)){
    header('location:login.php');
}else{
    echo "Error ".mysqli_error($connex);
}

?>