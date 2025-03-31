<?php

function client_controller_index(){
    echo "Hello Client";
}

function client_controller_create(){
    require_once(MODEL_DIR."/city.php");
    $cities = city_select();
    //print_r($data);
   render('client/create.php', $cities);
}

function client_controller_store($request){
    require_once(MODEL_DIR."/client.php");
    $client = client_insert($request);

    echo $client;

}