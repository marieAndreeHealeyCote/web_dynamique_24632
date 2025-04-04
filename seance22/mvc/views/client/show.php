<h1>Client Show</h1>
    <p><strong>Name: </strong> <?= $data['name'];?></p>
    <p><strong>Email: </strong> <?= $data['email'];?></p>
    <p><strong>Address: </strong> <?= $data['address'];?></p>
    <p><strong>Phone: </strong> <?= $data['phone'];?></p>
    <p><strong>Birthday: </strong> <?= $data['birthday'];?></p>
    <p><strong>City: </strong> <?= $data['city'];?></p>
    <a href="?controller=client&function=edit&id=<?= $data['id']?>" class="btn">Edit</a>
    <form action="?controller=client&function=delete" method="post">
        <input type="hidden" name="id" value="<?= $data['id'];?>">
        <input type="submit" value="Delete" class="btn-danger">
    </form>