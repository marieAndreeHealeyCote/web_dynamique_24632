<?php
require('db/connex.php');

$sql = "SELECT * FROM city ORDER BY city";

$result = mysqli_query($connex, $sql);


$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);


foreach($rows as $row){
    echo $row['city']."<br>";
}