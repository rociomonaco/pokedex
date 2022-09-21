<?php


function renderOptions($i) {
    $array = array("agua","bicho","electrico", "fuego", "hada","hielo","lucha","normal", "planta", "psiquico","roca","tierra", "veneno", "volador");
    
    foreach ($array as &$valor) {
        echo    '<div class="d-flex flex-column px-2 py-1 border">
                    <label for='.$valor.'>
                        <img src="img/pokemontypes/Tipo_'.$valor.'.jpg"/>
                    </label>
                    <input type="radio" id='.$valor.' name="tipo'.$i.'" value='.$valor.'>
                </div>';
    }
    
}

?>