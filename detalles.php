<?php 
    session_start();
    include_once("header.php");
    include_once("getPokemonById.php");
    $id = $_GET["id"];

    $pokemon = getPokemonById($id);
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
        <div class="container d-flex">
            <div class="w-100 border shadow-sm rounded d-flex flex-md-row flex-column">
                <div class="col-md-6 col-sm-6 my-3">
                    <div class="h-100">
                        <div class="card-body h-100 d-flex flex-column justify-content-between">
                            <div class="d-flex w-100 justify-content-between">
                                <div class="text-danger font-weight-bold"><?php echo $pokemon["nombre"];?></div>
                                <div class="text-muted font-weight-bold">N°<?php echo $pokemon["numero"];?></div>
                            </div>
                            <div class="py-5 d-flex justify-content-center">
                                <img class="mh-50" src="img/<?php echo $pokemon["img"];?>"/>
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
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 my-3 d-flex flex-column">
                    <span class="text-muted">Descripcion:</span>
                    <p class="font-weight-bold text-muted">
                        <?php echo $pokemon["descripcion"] ?>
                    </p>
                </div>
            </div>
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
