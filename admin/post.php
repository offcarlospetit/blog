<?php
include_once '../config.php';
$query = $pdo->prepare('SELECT * FROM blogs_posts ORDER BY id');
$query->execute();

$blogposts = $query->fetchAll(PDO::FETCH_ASSOC);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="jquery-3.2.1.min.js" charset="utf-8"></script>
    <title>Blog</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Blog Title</h1>
        </div>
      </div>
      <div class="row">
        <h2>Posts</h2>
        <div class="col-md-8">
          <a class="btn btn-primary" href="insertar-post.php">New Post</a>
          <table class="table">
            <tr>
              <th>Title</th>
              <th>edit</th>
              <th>delete</th>
            </tr>
            <?php
            foreach ($blogposts as $blogpost){
              echo '<tr>';
              echo '<td>'.$blogpost['titulo'].'</td>';
              echo '<td>Edit</td>';
              echo '<td>Del</td>';
              echo '<tr>';
            }
             ?>
          </table>
        </div>
        <div class="col-md-4">
          sidebar
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-md-12">
        <footer class="blockquote-footer">
          This is a footer
          <a href="admin/index.php">Panel de Administracion</a>
        </footer>
      </div>
    </div>

  </body>
</html>
