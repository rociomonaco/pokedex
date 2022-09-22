<?php

include_once("db/Database.php");
include_once("Pokemon.php");
include_once("renderCards.php");

function getAllPokemons(){
    $db = new Database();
    $sql = "SELECT * FROM `pokemones`";
    $pokemons = $db->query($sql);

    return $pokemons;  
}

?>