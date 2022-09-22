<?php
include_once("db/Database.php");
include_once("Pokemon.php");
include_once("renderCards.php");

function buscarPokemon($query){
    $db = new Database();
    $sql = "SELECT * FROM `pokemones` WHERE nombre LIKE '%$query%' OR numero LIKE '%$query%' OR tipo1 LIKE '%$query%' OR tipo2 LIKE '%$query%'; ";
    $pokemons = $db->query($sql);
   

    return $pokemons;

}
?>