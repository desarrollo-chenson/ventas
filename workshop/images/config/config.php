<?php
$dbHost = 'localhost';
$dbName = 'monsterb_Chenson';
$dbUser = 'monsterb_pedro';
$dbPass = 'n75b0Il)^)z]';

try {
  $pdo = new PDO("mysql:host=$dbHost; dbname=$dbName", $dbUser, $dbPass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e){
  echo $e->getMessage();
}
