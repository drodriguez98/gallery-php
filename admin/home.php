<!--    Home (despues del login)   -->

<!--  http://galeria.local/admin/home.php  -->

<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Gallery - Home</title>

        <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/bootstrap/css/thumbnail-gallery.css" rel="stylesheet">        
        <link href="/assets/css/estilos.css" rel="stylesheet">

    </head>

    <body>

        <?php

          include "includes/menu.php";
          
          $page = $_GET['page'];

          switch ($page) {

            case 'images':

              #   http://galeria.local/admin/home.php?page=images
              include "actions/images-action.php";
              include "includes/images-include.php";
              break;

            case 'authors':

              #   http://galeria.local/admin/home.php?page=authors
              include "includes/authors-include.php";
              break;

            case 'new':

              #   http://galeria.local/admin/home.php?page=new
              include "includes/new-image-include.php";
              break;

            case 'edit':

              #   http://galeria.local/admin/home.php?page=edit
              include "includes/edit-image-include.php";
              break;
            
            default:

              break;
          }

          ?>

            <hr>

            <!-- Footer -->

            <footer>

                <div class="row"> <div class="col-lg-12"> <p></p> </div> </div>

            </footer>

        </div>

        <!-- jQuery -->

        <script src="/assets/bootstrap/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->

        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>

    </body>

</html>