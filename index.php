<?php
  try {
    $pdo = new PDO('mysql:host=localhost;dbname=blogMvc; charset=utf8', 'root', '');
  } catch (\Exception $e) {
    die('Erreur : '.$e->getMessage());
  }
  $req = $pdo->query("SELECT title, description, date_created   FROM post ORDER BY date_created DESC LIMIT 0, 5");

  require('homeTemplate.php');
 ?>
