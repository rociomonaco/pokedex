<?php
// datos variables que nos van a llegar para hacer el insert del pokemon
    include_once("db/Database.php");

    $nombre = $_POST["nombre"];
    $tipo1 = $_POST["tipo1"];
    $tipo2 = empty($_POST["tipo2"]) ? null : $_POST["tipo2"];
    $numero = $_POST["numero"];
    $img = $_FILES["img"];
    $descripcion = $_POST["descripcion"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];


    var_dump($_POST);
    // validamos de que los campos no esten vacios para la insercion a la bd
    $error = false; 
    $campos = array($nombre,$tipo1,$numero,$descripcion,$peso,$altura);

     foreach ($campos as $clave => $campo) {
        if ($error){
            die('ERROR VALIDACION!');
        } else {
            $error = validacion($campo, $tipos[$clave]);
        }
    };

    echo "TODO BIEN";

    function validacion($variable, $tipo){
        $error = false;
        if (empty($variable)){
            $error = true;
            return $error;
        } 
    }

 /*    /if(!empty($nombre) && !empty($tipo1) && !empty($numero) && !empty($img) && !empty($descripcion) && !empty($peso) && !empty($altura)){

        subir_img($img);

     }
     */

    function subir_img($img){
        $nombre = $img["name"];
        $size = $img["size"];
        $type = $img["type"];
        
      /*   $carpeta_destino = $_SERVER["DOCUMENT_ROOT"] . "/pokedex/img/";
        move_uploaded_file($img["tmp_name"],$carpeta_destino . $nombre); */
    }

    function insertar_pokemon($nombre,$tipo1,$tipo2,$numero,$img,$descripcion,$peso,$altura){
        $db = new Database();
        $sql = "INSERT INTO `pokemones`(`nombre`, `tipo1`, `tipo2`, `numero`, `img`, `descripcion`, `peso`, `altura`) 
        VALUES ('$nombre','$tipo1','$tipo2','$numero','$img','$descripcion',',$peso','$altura')";
        $db->query($sql);
        header("location: index.php");
        
    }