<?php

include_once("db/Database.php");

function getAllPokemons(){
    $db = new Database();
    $sql = "SELECT * FROM `pokemones`";
    $pokemons = $db->query($sql);

    return $pokemons;  
}

?>