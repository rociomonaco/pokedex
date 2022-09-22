<?php
// datos variables que nos van a llegar para hacer el insert del pokemon
    include_once("db/Database.php");

    $nombre = $_POST["nombre"];
    $tipo1 = $_POST["tipo1"];
    $tipo2 = empty($_POST["tipo2"]) ? null : $_POST["tipo2"];
    $numero = $_POST["numero"];
    $img = subir_img($_FILES["img"]);
    $descripcion = $_POST["descripcion"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    $error = false; 
    $campos = array($nombre,$tipo1,$numero,$descripcion,$peso,$altura);

     foreach ($campos as $campo) {
        if ($error){
            die('ERROR VALIDACION!');
        } else {
            $error = validacion($campo);
        }
    };

    insertar_pokemon($nombre,$tipo1,$tipo2,$numero,$img,$descripcion,$peso,$altura);

    function validacion($variable){
        $error = false;
        if (empty($variable)){
            $error = true;
            return $error;
        } 
    }

    function subir_img($img){
        $nombre = $img["name"];
        $size = $img["size"];
        $type = $img["type"];
        
        $carpeta_destino = $_SERVER["DOCUMENT_ROOT"] . "/pokedex/img/";
        move_uploaded_file($img["tmp_name"],$carpeta_destino . $nombre);
        return $nombre;
    }

    function insertar_pokemon($nombre,$tipo1,$tipo2,$numero,$img,$descripcion,$peso,$altura){
        $db = new Database();
        $sql = "INSERT INTO `pokemones`(`nombre`, `tipo1`, `tipo2`, `numero`, `img`, `descripcion`, `peso`, `altura`) 
        VALUES ('$nombre','$tipo1','$tipo2','$numero','$img','$descripcion','$peso','$altura')";
        $db->execute($sql);
        header("location: index.php");
    }