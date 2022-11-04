<?php
    session_start();
    $app = $_SESSION['app'];
    include('baseDatos'); // este aqui está sobrando
    $id = $_GET['id'];
    $cont = $_GET['contenido'];

?>
<!doctype html>
<html lang="en">
  <head>
    <title>bienvenido a la aplicacion <?=$app ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="grabarRegistro.php" method="post"> 
                    <!-- aca no es necesario hacer lo de endenantes porque este es post -->
                    <!-- tenemos que pasar la informacion que traemos de la otra tabla -->
                    <b><u><h4>Formulario de registro</h4></u></b>
                    Identificador <br>
                    <input type="number" name="id" value = "<?= $id?>" disabled="false"><br>    
                    Contenido <br>
                    <input type="text" name="contenido" value= "<?= $cont ?>"> <br>
                    <input type="submit" value="Enviar">

                </form>
            </div>
        </div>
    </div>

    
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>