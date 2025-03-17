<?php
require('db/connex.php');

$sql = "SELECT client.*, city FROM client INNER JOIN city ON city.id = city_id ORDER BY name";

$result = mysqli_query($connex, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="client-index.php">Clients</a></li>
            <li><a href="client-create.php">Client Create</a></li>
        </ul>
    </nav>
    <main>
        <h1>Clients</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Birthday</th>
                    <th>City</th>
                    <th>Show</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($result as $row){
                ?>
                <tr>
                    <td><?= $row['name'];?></td>
                    <td><?= $row['address'];?></td>
                    <td><?= $row['email'];?></td>
                    <td><?= $row['phone'];?></td>
                    <td><?= $row['birthday'];?></td>
                    <td><?= $row['city'];?></td>
                    <td><a href="client-show.php?id=<?= $row['id'];?>">Show</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>