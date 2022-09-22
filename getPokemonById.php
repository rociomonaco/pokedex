<?php

include_once("db/Database.php");
include_once("Pokemon.php");

function getPokemonById($id){
    $db = new Database();
    $sql = "SELECT * FROM `pokemones` WHERE id = $id";
    $pokemon = $db->queryassoc($sql);
   

    echo '<div class="container mt-5">
            <div class="border border-danger d-flex flex-column justify-content-center p-4 align-items-center rounded">
                <div class="panel panel-default w-75 d-flex justify-content-between g-2">
                    <div class="w-50 mr-4">
                        <div class="d-flex justify-content-center w-100" >'.$pokemon["nombre"].'</div>
                    </div>
                    <div class="w-50 ml-4">
                    <div class="d-flex justify-content-center w-100" >'.$pokemon["numero"].'</div>
                    </div>
                </div>
                <div class="panel panel-default w-75">
                    <div class="panel-heading d-flex justify-content-center py-4">
                        <img class="w-50" src="img/'.$pokemon["img"].'"/>
                    </div>
                    <div>
                        <div>'.$pokemon["descripcion"].'</div>
                    </div>
                    <div class="panel panel-default w-75 d-flex justify-content-between g-2">
                        <div class="w-50 mr-4">
                            <div class="d-flex justify-content-center w-100" >Peso: '.$pokemon["peso"].' Kg.</div>
                        </div>
                        <div class="w-50 ml-4">
                        <div class="d-flex justify-content-center w-100" >Altura: '.$pokemon["altura"].' M.</div>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <div>Tipo : </div>
                        <div class="mx-2">
                            <img src ="img/pokemontypes/Tipo_'.$pokemon["tipo1"].'.jpg"/>
                        </div>
                        <div class="mx-2">
                            <img src ="img/pokemontypes/Tipo_'.$pokemon["tipo2"].'.jpg"/>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>';
}

?>