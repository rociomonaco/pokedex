<?php 
    session_start();
    include_once("header.php");
    include_once("getAllPokemons.php");
    include_once("buscarPokemon.php");
    

    $query = isset($_POST["query"]) ? $_POST["query"] : "";

    $pokemons;
    $hasResults;
    if ($query){
        $pokemons= buscarPokemon($query);
        $hasResults = !empty($pokemons) ? true : false;
        if (empty($pokemons)){
            $pokemons = getAllPokemons();
        }
    } else {
        $pokemons = getAllPokemons();
    }


    echo isset($pokemon["tipo2"]);
?> 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pokedex</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"
    />
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"
    ></script>
</head>

    <body>
        <div class="container">
            <?php  createHeader();?>
        </div>

        <div class="container">
            <form class="d-flex flex-md-row flex-column align-items-end mb-0" action="index.php" method="POST" enctype="application/x-www-form-urlencoded" >
              <input
                name="query" id="query" type="text"
                class="form-control form-control-dark text-bg-dark px-1 py-1"
                placeholder="Ingrese el nombre, tipo o número del pokémon"
                value="<?php echo !empty($query) ? $query : '' ?>"
                
              />
              <input
                  class="btn btn-primary bg-primary text-white mt-1"
                  type="submit"
                  value="¿Quién es este pokémon?"
              />
            </form>
            <a
            href="nuevo.php"
            class="btn btn-sm btn-outline-secondary mt-2"
            >Agregar pokemon
            </a>
        </div>
        
        <?php 
        if(isset($_GET["eliminarOk"])){?>
            <div class="w-50 container text-center alert alert-success" role="alert">
                El Pokemon con id <?php echo $_GET["eliminarOk"]; ?> se eliminó correctamente.
            </div>
        <?php
        }
        if(isset($_GET["editadoOk"])){?>
            <div   div class="w-50 container text-center alert alert-success" role="alert">
                El Pokemon <?php echo $_GET["editadoOk"]; ?> se editó correctamente.
            </div>
        <?php
        }
        ?>

        <div class="album">
        <div class="container">
            <?php 
             if ($query){ 
                if ($hasResults) { ?>
                    <div class="mt-2">
                        <span class="text-danger font-bold">Mostrando resultados para :</span> 
                        <span class="font-weight-bold"><?php echo $query; ?></span> 
                    </div>

                <?php } else { ?>
                    <div class="mt-2">
                        <span class="text-danger">Sin Resultados para :</span> 
                        <span class="font-weight-bold"><?php echo $query; ?></span> 
                    </div>
             <?php }} ?>
        <div class="row g-6">
            <?php
                foreach ($pokemons as $pokemon) { ?> 
                
                    <div class="col-md-4 col-sm-6 my-3">
                        <div class="card shadow-sm rounded h-100">
                            <div class="card-body h-100 d-flex flex-column justify-content-between">
                                <div >
                                    <div class="d-flex w-100 justify-content-between">
                                        <div class="text-danger font-weight-bold"><?php echo $pokemon["nombre"];?></div>
                                        <div class="text-muted font-weight-bold">N°<?php echo $pokemon["numero"];?></div>
                                    </div>
                                    <div class="py-5">
                                        <img class="w-100" src="img/<?php echo $pokemon["img"];?>"/>
                                    </div>
                                    <div class="card-text">
                                        <p class="text-muted">Altura: <span class="font-weight-bold text-muted"><?php echo $pokemon["altura"];?> M</span></p>
                                        <p class="text-muted">Peso: <span class="font-weight-bold text-muted"><?php echo $pokemon["peso"];?> Kg</span></p>
                                        <div class="d-flex">
                                            <p class="text-muted mr-1">Tipo:</p>
                                            <div class="mr-2">
                                                <img src="img/pokemontypes/Tipo_<?php echo $pokemon["tipo1"];?>.jpg"/>
                                            </div>
                                            <?php 
                                            if (!empty($pokemon["tipo2"])){ ?>
                                              <div>
                                                  <img src="img/pokemontypes/Tipo_<?php echo $pokemon["tipo2"];?>.jpg"/> 
                                              </div>
                                           <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="btn-group pb-2">
                                        <a
                                        href="/pokedex/detalles.php?id=<?php echo $pokemon["id"];?>"
                                        class="btn btn-sm btn-outline-secondary"
                                        >
                                        Ver Detalles
                                        </a>
                                    </div>
                            
                                    <?php if(isset($_SESSION["logueado"])){ ?>
                                            <div class="btn-group pb-2">
                                                <a href="deletePokemon.php?id=<?php echo $pokemon["id"]; ?>"
                                                type="button"
                                                class="btn btn-sm btn-outline-secondary"
                                                >
                                                Eliminar
                                                </a>
                            
                                                <a
                                                href="nuevo.php?id=<?php echo $pokemon["id"]; ?>"
                                                class="btn btn-sm btn-outline-secondary"
                                                >
                                                Editar
                                                </a>
                                            </div>
                                    <?php } ?>
                
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
        </div>

        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
