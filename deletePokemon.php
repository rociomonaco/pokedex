<?php 
    session_start();
    include_once("db/Database.php");
if(isset($_SESSION["logueado"])){
    $id = $_GET["id"];
    $db = new Database();

    if(isset($id) && !empty($id)){
        $sql = "DELETE FROM pokemones WHERE id = $id";
        $db->execute($sql);
        header("Location: index.php?eliminarOk=$id");
        exit();
    }
}else{
    header("Location: index.php");
    exit();
}



