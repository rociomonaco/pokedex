<?php
// datos variables que nos van a llegar para hacer el insert del pokemon
    $nombre = $_POST["nombre"];
    $tipo1 = $_POST["tipo1"];
    $tipo2 = $_POST["tipo2"];
    $numero = $_POST["numero"];
    $img = $_FILES["img"];
    $descripcion = $_POST["descripcion"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    // validamos de que los campos no esten vacios para la insercion a la bd
    /*$validacion = false; 

    validacion($nombre, "string");

    function validacion($variable, $tipo){
        switch($tipo){
            case "string" : $validacion = is_string($variable);
            break;
            case "number" : $

        }
    }*/

    // if(!empty($nombre) && !empty($tipo1) && !empty($numero) && !empty($img) && !empty($descripcion) && !empty($peso) && !empty($altura)){

        subir_img($img);

    // }

    function subir_img($img){
        $nombre = $img["name"];
        $size = $img["size"];
        $type = $img["type"];
        
        $carpeta_destino = $_SERVER["DOCUMENT_ROOT"] . "/pokedex/img/";
        move_uploaded_file($img["tmp_name"],$carpeta_destino . $nombre);
    }

    function insertar_pokemon(){
    }