<?php
$dbHost = 'Localhost';
$dbName = 'D1818';
$dbUser = 'user1818';
$dbPass = 'D13Ze_4poY*';

try {
  $pdo = new PDO("mysql:host=$dbHost; dbname=$dbName", $dbUser, $dbPass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e){
  echo $e->getMessage();
}
