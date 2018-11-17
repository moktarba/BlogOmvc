<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>framework mvc by O </title>
  </head>
  <body>
    <!-- As a heading -->
    <nav class="navbar navbar-light bg-light">
      <span class="navbar-brand mb-0 h1">BlogOmvc</span>
    </nav>
    <div class="container">
      <h1>Liste des Articles</h1>
      <div class="jumbotron">
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      </div>

      <div class="row">

        <div class="col-md-12">
          <?php
            while ($post = $posts->fetch()) {
              echo '<div class="post col-lg-6 float-md-left">';
              echo '<h3>'.$post['title'].' <span style="font-size:10px" class="badge badge-secondary">'.$post['date_created_fr'].'</span></h3>';
              echo '<p>'.$post['description'].'</p>';
              echo '<button><a href=?action=post&id='.$post["id"].'>Détails </a></button><br>';
              echo '</div>';
            }
          ?>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <p></p>
    <footer>
      <nav class="navbar bottom navbar-light bg-light">
        <a class="navbar-brand" href="#">Fixed bottom</a>
      </nav>
    </footer>
    <?php $posts->closeCursor(); ?>
  </body>
</html>
