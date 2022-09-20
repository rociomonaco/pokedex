<?php 
    include_once("db/Database.php");
    $db = new Database();
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    if(isset($user) && isset($pass)){
        $sql = "SELECT * FROM usuarios WHERE username = '$user' AND pass = '$pass'";
        $resultado = $db->query($sql);
        session_start();
        if(!empty($resultado)){
            // creamos una sesion
            $_SESSION["logueado"] = true;
        } else {
            $_SESSION["error"] = true;
        }
        header("location: index.php");
        exit();
    }
//prueba git chiara

    // si el resultado es vacio retornar a la pagina index.php
    // si los datos coinciden redirigimos al index.php -> pero con acceso a los botones de modificacion / eliminacion / agregar nuevo pokedex y buscar
