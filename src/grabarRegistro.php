<?php
    session_start();
    $app = $_SESSION['app'];
    include('baseDatos.php');
    $id = $_POST['id'];
    $cont = $_POST['contenido'];
    $sql = "update appData set contenido = '$cont' where id = '$id'; ";
    $bd->query($sql); //nota esto obviando los errores
    header('Location:grillaForm.php');


