<!--  Listado de autores   -->

<?php

  include dirname( dirname( dirname( __FILE__))) . "/common/config.php";
  include dirname( dirname( dirname( __FILE__))) . "/common/database.php";


  $connection = connect($config['database']);
  $sqlAuthors = "select * from authors order by name asc";
  $rowsAuthors = executeQuery($sqlAuthors, $connection);
  close( $connection);

?>

<!--  Script para borrar autores del listado. Al pulsar el icono de eliminar autor se elimina el autor con ese id  -->

<script type="text/javascript">
  
  function deleteAuthor( authorId) {

    var ok = confirm("¿Seguro que quieres borrar este autor? ");
    
    if (!ok) { return false; } else { location.href = "delete.php?page=authors&authorId=" + authorId; }

  }

</script>


<!--  Tabla para el listado  -->

  <div class="container">

    <div class="row">

      <div class="col-lg-12 text-lett">

        <h2 class="mt-5">Authors</h2>

      </div>
  
    </div>
    
    <div class="row cuadro_listado_fotos">

      <div class="col-lg-12">

        <table class="table">

          <thead>

            <tr>

              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Created</th>
              <th scope="col">Active</th>
              <th scope="col">Delete</th>

            </tr>

            </tr>

          </thead>

          <tbody>

            <?php

              #   Mostramos los datos que sacamos de la base de datos y mostramos un icono de actividad u otro en función del estado de cada autor. Añadimos un enlace a la función delete_post que redirecciona a la página de borrado (borrando el autor con el id de esa fila).

              foreach ($rowsAuthors as $row) {

                if ( $row['enabled'] == "1") {

                  $enabled = "<img src='../assets/img/activo.png'  width=20px>";

                } else {

                  $enabled = "<img src='../assets/img/no_activo.png' width=20px>";

                }

                echo '

                  <td>'.$row['authorId'].'</td>
                  <td>'.$row['name'].'</td>
                  <td>'.$row['email'].'</td>
                  <td>'.date( "d/m/Y H:s:i", strtotime($row['created'])).'</td>
                  <td>'.$enabled.'</td>       
                             
                  <td><a href="#" OnClick="deleteAuthor('.$row['authorId'].')"><img src="../assets/img/delete_2.png"  width=20px></a></td>
                  </tr>
                '
                ;  

              }

            ?>

          </tbody>

        </table>

      </div>
      
    </div>

  </div>