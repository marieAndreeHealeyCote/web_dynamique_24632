<?php
if(isset($_GET['id']) && $_GET['id']!=null){

    //print_r($_GET);
    require('db/connex.php');

    $id = mysqli_real_escape_string($connex, $_GET['id']);

    $sql = "SELECT client.*, city FROM client INNER JOIN city ON city.id = city_id WHERE client.id = '$id'";

    $result = mysqli_query($connex, $sql);

    $count = mysqli_num_rows($result);

    if($count == 1){
        $client  = mysqli_fetch_array($result, MYSQLI_ASSOC);

        // print_r($client);
    }else{
        header('location:client-index.php');
    }
}else{
    header('location:client-index.php');
}

?>
<?php
    $title="Client Show";
    require_once('header.php');
?>

        <h1>Client Show</h1>
        <p><strong>Name: </strong> <?= $client['name'];?></p>
        <p><strong>Email: </strong> <?= $client['email'];?></p>
        <p><strong>Address: </strong> <?= $client['address'];?></p>
        <p><strong>Phone: </strong> <?= $client['phone'];?></p>
        <p><strong>Birthday: </strong> <?= $client['birthday'];?></p>
        <p><strong>City: </strong> <?= $client['city'];?></p>
        <a href="client-edit.php?id=<?= $client['id']?>" class="btn">Edit</a>
        <form action="client-delete.php" method="post">
            <input type="hidden" name="id" value="<?= $client['id'];?>">
            <input type="submit" value="Delete" class="btn-danger">
        </form>
<?php 
    require_once('footer.php');
?>