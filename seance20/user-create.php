<?php
    $title="User Create";
    require_once('header.php');
?>
        <h1>User Create</h1>
        <form action="user-store.php" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
            <label for="username">Username</label>
            <input type="email" id="username" name="username">
            <label for="pwd">Password</label>
            <input type="password" id="pwd" name="password">
            <input type="submit" value="Save">
        </form>
<?php 
    require_once('footer.php');
?>