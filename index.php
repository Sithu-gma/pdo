<?php
require('db.php');

$sql="SELECT * FROM people";
$statement=$connection->prepare($sql);
$statement->execute();
$people=$statement->fetchAll(PDO::FETCH_OBJ);
$num=1;
?>
<?php require('header.php');?>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h1>All PEOPLE</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>ACTION</th>
                    </tr>
                    <?php foreach($people as $person): ?>
                    <tr>
                        <td><?=$num++ ?></td>
                        <td><?=$person->id ?></td>
                        <td><?=$person->name ?></td>
                        <td><?=$person->email ?></td>
                        <td>
                            <a href="edit.php?id=<?= $person->id ?>" class="btn btn-info">Edit</a>
                            <a onclick="return alert('Are u sure');" href="delete.php?id=<?= $person->id ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>


<?php 
require('footer.php');
?>
    