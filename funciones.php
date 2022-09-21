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

    if(!empty($nombre) && !empty($tipo1) && !empty($numero) && !empty($img) && !empty($descripcion) && !empty($peso) && !empty($altura)){

        if($subir_img){
            // felices !!

        }else{
            // no se va a subir 
        }

    }else{
        // no se va a subir
    }

    function subir_img($img){
        $nombre = $img["name"];
        $size = $img["size"];
        $type = $img[""]


    }

    function insertar_pokemon(){
        // 
    }