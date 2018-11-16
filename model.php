<?php
function getPosts() {
  try {
    $pdo = new PDO('mysql:host=localhost;dbname=blogMvc; charset=utf8', 'root', '');
  } catch (\Exception $e) {
    die('Erreur : '.$e->getMessage());
  }
  $req = $pdo->query("SELECT title, description, DATE_FORMAT(date_created, \" %d %M %Y à %Hh %min %ss\") as date_created_fr  FROM post ORDER BY date_created DESC LIMIT 0, 5");
  return $req;
}
