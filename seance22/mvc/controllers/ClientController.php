<?php

function client_controller_index(){
    require_once(MODEL_DIR."/client.php");
    $clients = client_select();
    render('client/index.php', $clients);
}

function client_controller_create(){
    require_once(MODEL_DIR."/city.php");
    $cities = city_select();
    //print_r($data);
   return render('client/create.php', $cities);
}

function client_controller_store($request){
    require_once(MODEL_DIR."/client.php");
    $client = client_insert($request);

    header('location:?controller=client&function=show&id='.$client);    

}

function client_controller_show($request){
    $id = $request['id'];
    require_once(MODEL_DIR."/client.php");
    $client = client_select_id($id);
    if($client){
        return render('client/show.php', $client);
    }else{
        echo "pas trouvé";
    }
}

function client_controller_edit($request){
    $id = $request['id'];
    require_once(MODEL_DIR."/client.php");
    $client = client_select_id($id);
    if($client){
        require_once(MODEL_DIR."/city.php");
        $cities = city_select();
        // echo "<pre>";
        // print_r($cities);
        
        // print_r($client);
        // echo "</pre>";
        // die();
        $client= array('client'=>$client);
        $cities= array('cities'=>$cities);
        $data = array_merge($client, $cities);
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // die();

        return render('client/edit.php', $data);
    }else{
        echo "pas trouvé";
    }
}

function client_controller_update($request){
    require_once(MODEL_DIR."/client.php");
    $client = client_update($request);
    if($client){
        header('location:?controller=client');
    }else{
        echo "error";
    }
}

function client_controller_delete($request){
    $id = $request['id'];
    require_once(MODEL_DIR."/client.php");
    $client = client_delete($id);
    if($client){
        header('location:?controller=client');
    }else{
        echo "error";
    }
}