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
        foreach($client as $key=>$value){
            $$key=$value;
        }
        $sql = "SELECT * FROM city ORDER BY city";
        $result = mysqli_query($connex, $sql);
        // print_r($client);
    }else{
        header('location:client-index.php');
    }
}else{
    header('location:client-index.php');
}
?>

<?php
    $title="Client Edit";
    require_once('header.php');
?>
        <h1>Client Edit</h1>
        <form action="client-update.php" method="post">
            <input type="hidden" name="id" value="<?= $id; ?>">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="<?= $name;?>">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="<?= $address;?>">
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" value="<?= $phone;?>">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?= $email;?>">
            <label for="birthday">Birthday</label>
            <input type="date" id="birthday" name="birthday" value="<?= $birthday;?>">
            <label for="city">City</label>
            <select name="city_id">
                <?php
                foreach($result as $row){
                ?>
                    <option value="<?= $row['id'];?>" <?php if($row['id']==$city_id){ echo "Selected";}?> ><?= $row['city'];?></option>
                <?php
                }
                ?>
            </select>
            <input type="submit" value="Update" class="btn">
        </form>
<?php 
    require_once('footer.php');
?>