<?php
if($_SERVER['REQUEST_METHOD'] != "POST"){
    header('location:client-index.php');
}

require('db/connex.php');

//print_r($_POST);

//Array ( [name] => Peter [address] => Pie IX [phone] => 546465 [email] => peter@gmail.co [birthday] => 2025-03-21 [city_id] => 3 )

// $name = mysqli_real_escape_string($connex, $_POST['name']);
// $address = $_POST['address'];
// $phone = $_POST['phone'];
// $email = $_POST['email'];
// $birthday = $_POST['birthday'];
// $city_id = $_POST['city_id'];


foreach($_POST as $key=>$value){
    $$key = mysqli_real_escape_string($connex, $value);
}

$sql = "INSERT INTO client (name, address, phone, email, birthday, city_id) VALUES ('$name' ,'$address','$phone','$email','$birthday','$city_id')";


if(mysqli_query($connex, $sql)){
    header('location:client-index.php');
}else{
    echo "Error ".mysqli_errors($connex);
}

?>