<?php
require 'db.php';
$id=$_GET['id'];
$sql="DELETE FROM people WHERE id=:id";
$stmt=$connection->prepare($sql);
if($stmt->execute([':id'=>$id])) {
    header('location: index.php');
}
