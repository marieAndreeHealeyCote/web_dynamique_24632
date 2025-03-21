<?php
if($_SERVER['REQUEST_METHOD'] != "POST"){
    header('location:client-index.php');
}

require('db/connex.php');

$id = mysqli_real_escape_string($connex, $_POST['id']);

$sql = "DELETE FROM client WHERE id = '$id'";

if(mysqli_query($connex, $sql)){
    header('location:client-index.php');
}else{
    echo "Error ".mysqli_errors($connex);
}


?>