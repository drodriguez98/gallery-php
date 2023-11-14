<!--   Índex principal. Redirecciona a páginas de login y registro y muestra las imágenes activadas por los usuarios admin.   -->

<?php

  include "common/utils.php";
  include "common/config.php";
  include "common/database.php";

  $connection = connect($config['database']);
  $sqlAuthors = "select * from images where enabled = 1 order by imageId desc";
  $rowsAuthors = executeQuery($sqlAuthors, $connection);
  close( $connection);

?>

<!DOCTYPE html>

<html lang="en">

  <head>

      <title>Gallery</title>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">

      <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/bootstrap/css/thumbnail-gallery.css" rel="stylesheet">

  </head>

  <body>

      <!-- Nav -->

      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

          <div class="container">

              <div class="navbar-header">

                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>

                  </button>

                  <a class="navbar-brand" href="#">GALLERY</a>

              </div>

              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                  <ul class="nav navbar-nav"> <li> <a href="admin/index.php?page=login">Open application</a> </li> </ul>

              </div>

          </div>

      </nav>

      <!-- Page Content -->

      <div class="container">

        <div class="row">

          <div class="col-lg-12"> <h1 class="page-header">Gallery</h1> </div>

          <?php

            foreach ($rowsAuthors as $row)  {

              echo '<div class="col-lg-3 col-md-4 col-xs-6 thumb">

                    <a class="thumbnail" href="#">

                        <img class="img-responsive css_img" src="images/'.$row['file'].'" alt="">
                        
                    </a>'.$row['name'].'

                </div>';
            }

          ?>

        </div>

          <hr>

        <!-- Footer -->

        <footer>

            <div class="row"> <div class="col-lg-12"> <p></p> </div> </div>

        </footer>

      </div>

      <!-- jQuery -->

      <script src="assets/bootstrap/js/jquery.js"></script>

      <!-- Bootstrap Core JavaScript -->

      <script src="assets/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>