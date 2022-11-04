<?php
    //host del server (hosting)
    $host = 'localhost'; // el host es donde está alojado el servidor, tambien podemos colocar 127.0.0.1 o cualquier ip
    $usu ='root'; // usuario de la base de datos
    $pass ='12345678'; // la contraseña
    $bbdd ='registro'; //el nombre de la base de datos
    $bd = new mysqli(); //aqui le puedo dar cualquier nombre a la variable pero tengo que tener cuidado de que no se me valla a olvidar
    // $bd es el conector a la bbdd - objeto mysqli
    //se genera la conexion
    $bd->connect($host, $usu, $pass, $bbdd);

?>
