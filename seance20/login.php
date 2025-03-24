<?php
$msg = null;
if(isset($_GET['msg']) && $_GET['msg'] == 1){
    $msg = "Please check username";
}elseif(isset($_GET['msg']) && $_GET['msg'] == 2){
    $msg = "Please check password";
}

?>
<?php
    $title="Login";
    require_once('header.php');
?>
        <h1>Login</h1>
        <form action="auth.php" method="post">
            <?= "<span class='text-danger'>".$msg."</span>"; ?>
            <label for="username">Username</label>
            <input type="email" id="username" name="username">
            <label for="pwd">Password</label>
            <input type="password" id="pwd" name="password">
            <input type="submit" value="Login" class="btn">
        </form>
<?php 
    require_once('footer.php');
?>