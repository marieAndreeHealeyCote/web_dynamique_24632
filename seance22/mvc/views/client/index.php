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
                foreach($data as $row){
                ?>
                <tr>
                    <td><?= $row['name'];?></td>
                    <td><?= $row['address'];?></td>
                    <td><?= $row['email'];?></td>
                    <td><?= $row['phone'];?></td>
                    <td><?= $row['birthday'];?></td>
                    <td><?= $row['city'];?></td>
                    <td><a href="?controller=client&function=show&id=<?= $row['id'];?>">Show</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>