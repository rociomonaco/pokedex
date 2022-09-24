<?php

include_once("db/Database.php");

function getPokemonById($id){
    $db = new Database();
    $sql = "SELECT * FROM `pokemones` WHERE id = $id";
    $pokemon = $db->queryassoc($sql);

    return $pokemon;
}

?>