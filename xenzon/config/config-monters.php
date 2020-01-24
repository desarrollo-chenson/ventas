<?php
$dbHost = 'localhost';
$dbName = 'monsterb_Chenson';
$dbUser = 'monsterb_pedro';
$dbPass = 'Bm568WuxjpGnJ6M';

try {
  $pdo = new PDO("mysql:host=$dbHost; dbname=$dbName", $dbUser, $dbPass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e){
  echo $e->getMessage();
}
