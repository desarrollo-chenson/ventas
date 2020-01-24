<?php
session_start();

 ?>

<?php

include_once 'config.php';
$id = $_GET['id'];

$sql = 'DELETE FROM ventadeliquidacion WHERE id=:id';
$query = $pdo->prepare($sql);
$query->execute([
  'id' => $id
]);

header('location:admin.php');
 ?>
