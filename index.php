<?php

    session_start(); //inicia la sesión
    //entregamos un valor a la variable
    //superglobal app
    $_SESSION['app']='basito'; 
    header('Location: src/grillaForm.php');


