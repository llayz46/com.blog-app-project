<?php

try {
  $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8mb4', DB_USER, DB_PASS);
} catch(PDOException $e) {
  die('Une erreur est survenue');

}