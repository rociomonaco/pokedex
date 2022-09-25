<?php
    session_start();
    include_once("db/Database.php");


    //variables a actualizar
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $tipo1 = $_POST["tipo1"];
    $tipo2 = empty($_POST["tipo2"]) ? NULL : $_POST["tipo2"];
    $numero = $_POST["numero"];
    $img = !empty($_FILES["img"]["name"]) ? subir_img($_FILES["img"]) : "";
    $descripcion = $_POST["descripcion"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    function subir_img($img){
        $nombre = $img["name"];
        $size = $img["size"];
        $type = $img["type"];
        
        $carpeta_destino = $_SERVER["DOCUMENT_ROOT"] . "/pokedex/img/";
        move_uploaded_file($img["tmp_name"],$carpeta_destino . $nombre);
        return $nombre;
    }

    $error = false; 
    $campos = array($nombre,$tipo1,$numero,$descripcion,$peso,$altura);

    foreach ($campos as $campo) {
        if ($error){
            die('ERROR VALIDACION!');
        } else {
            $error = validacion($campo);
        }
    };

    function validacion($variable){
        $error = false;
        if (empty($variable)){
            $error = true;
            return $error;
        } 
    }

        $sql = "UPDATE pokemones
                SET nombre = '$nombre',
                tipo1 = '$tipo1',
                tipo2 = '$tipo2',
                numero = $numero,
                ";
    if(!empty($img)){
        $sql .= "img = '$img',";
    }
        $sql .= "descripcion = '$descripcion',
                peso = $peso,
                altura = $altura
                WHERE id = $id";

function updatePokemon($sql){
    $db = new Database();
    $db->execute($sql);
}   
if(isset($_SESSION["logueado"])){    
    updatePokemon($sql);
    header("Location: index.php?editadoOk=$nombre");
    exit();
}else{
    
    header("Location: index.php");
    exit();
}

