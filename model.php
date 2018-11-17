<?php
function getPosts() {
  $pdo = bddConnect();
  $res = $pdo->query("SELECT id, title, description, DATE_FORMAT(date_created, \" %d %M %Y à %Hh %min %ss\") as date_created_fr  FROM post ORDER BY date_created DESC LIMIT 0, 5");
  return $res;
}
function getPost($id) {
  $pdo = bddConnect();
  $req = $pdo->prepare("SELECT id, title, description, DATE_FORMAT(date_created, \" %d %M %Y à %Hh %min %ss\") as date_created_fr FROM post WHERE id = :id ");
  $req->execute(array(':id'=>$id));
  $post = $req->fetch();

  return $post;
}

function getComments($postid) {
  $pdo = bddConnect();
  $req = $pdo->prepare( "SELECT post_id, author, comment, DATE_FORMAT(comment_date, \"commenté le %d %m %Y à %Hh %min %ss\") as comment_date_fr FROM comment WHERE post_id = :postid " );
  $req->execute( array(':postid' => $postid ));
  $res = $req;

  return $res;
}

function bddConnect() {
  try {
    $pdo = new PDO('mysql:host=localhost;dbname=blogMvc; charset=utf8', 'root', '');
    return $pdo;
  } catch (\Exception $e) {
    die('Erreur : '.$e->getMessage());
  }
}
