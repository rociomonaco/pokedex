<?php

include_once("db/Database.php");
include_once("Pokemon.php");

function getAllPokemons(){
    $db = new Database();
    $sql = "SELECT * FROM `pokemones`";
    $pokemons = $db->query($sql);

    foreach ($pokemons as $pokemon) {     
        /* $pokemon["id"]; */

        echo '
        <div class="col-4 my-3">
            <div class="card shadow-sm">
            <div class="card-body">
                <div class="d-flex w-100 justify-content-between">
                    <div>'.$pokemon["nombre"].'</div>
                    <div>'.$pokemon["numero"].'</div>
                </div>
                <div class="py-5"><img class="w-100" src="img/'.$pokemon["img"].'"/></div>
                <p class="card-text">
                <p>Altura: '.$pokemon["altura"].' M</p>
                <p>Peso: '.$pokemon["peso"].' Kg</p>
                <p>Tipo: <img src="img/pokemontypes/Tipo_'.$pokemon["tipo1"].'.jpg"/> </p>
                <p>Tipo: <img src="img/pokemontypes/Tipo_'.$pokemon["tipo2"].'.jpg"/> </p>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a
                    href="/pokedex/detalles.php?'.$pokemon["id"].'"
                    class="btn btn-sm btn-outline-secondary"
                    >
                    Ver Detalles
                    </a>
                </div>';
              
    
            if(isset($_SESSION["logueado"])){
                echo '
                <div class="btn-group">
                    <button
                    type="button"
                    class="btn btn-sm btn-outline-secondary"
                    >
                    Eliminar
                    </button>

                    <button
                    type="button"
                    class="btn btn-sm btn-outline-secondary"
                    >
                    Editar
                    </button>
                </div>';
            }

            echo '</div></div></div></div>';
    };
}

?>