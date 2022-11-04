<?php
    //iniciamos session
    session_start(); 
    //traemos el nombre de la aplication o app o aplicacion
    $app = $_SESSION['app'];
    include('baseDatos.php'); // el include trae todos los registros del archivo especificado y lo deja como parte de este
    // if ($bd->connect_errno){ //errno es numero de error
    //     echo "<h1> hay un error en el servidor de bbdd</h1>"
    // }
    $sql = 'select id, contenido from appData;'; // esta es la consulta, la misma que ocipamos en mysql en cmd
    $res = $bd->query($sql);






//cuando tenemos html hay que cerrar el php, cunado no tenemos html no es necesario
?> 

<!doctype html>
<html lang="en">
  <head>
    <title>aplicacion <?= $app ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      
<div class="alert alert-dark" role="alert">
    <strong>bienvenido a la aplicacion <?=$app ?></strong>
</div>

       

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <table class="table table-hover table-inverse table-responsive">
                        <thead class="thead-inverse">
                            <tr> 
                                <!-- como solo tenemos 2 columnas colocamos 2 th -->
                                <th>identificador</th>
                                <th>contenido</th>
                                <th>Accion</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                // $res tiene el resultado de mysql el fetch lo estoy transoframndo en un arreglo y todo eso lo guardamos en $reg por eso $reg es un arreglo
                                    while ($reg = $res->fetch_array(MYSQLI_ASSOC)) {
                                        $id = $reg['id'];
                                        $cont = $reg['contenido'];
                                        // se crea una url llamando a modificarRegistro con un form get
                                        $accion = "modificarRegistro.php?id=$id&contenido=$cont";

                                    
                                ?>
                                <tr>
                                    <td scope="row">
                                        <?= $id ?>
                                    </td>
                                    <td>
                                        <?= $cont ?>
                                    </td>
                                    <td>
                                        <a href=" <?= $accion ?>">Modificar</a>
                                       
                                    </td>
                                </tr>  
                                <?php } ?>  
                            </tbody>
                    </table>
                    
                </div>
            </div>
        </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>