<?php

function client_insert($request){
    require_once(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key = mysqli_real_escape_string($connex, $value);
    }
    
    $sql = "INSERT INTO client (name, address, phone, email, birthday, city_id) VALUES ('$name' ,'$address','$phone','$email','$birthday','$city_id')";

    if(mysqli_query($connex, $sql)){
        return "ok";
    }else{
        return "not good";
    }
    
}


?>