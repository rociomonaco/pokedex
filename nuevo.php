<?php 
    session_start();
    include_once("header.php");
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

    <div class="container mt-5">
        <form class="border border-danger d-flex flex-column justify-content-center p-4 align-items-center rounded" action="" method="POST" enctype="multipart/form-data">
            <div class="panel panel-default w-75 d-flex justify-content-between g-2">
                <div class="w-50 mr-4">
                    <label for="nombre">Nombre</label>
                    <input name="nombre" id="nombre" type="text" placeholder="Ingrese Nombre del Pokemon!" class="d-flex justify-content-center border w-100" />
                </div>
                <div class="w-50 ml-4">
                    <label for="numero">Numero</label>
                    <input name="numero" id="numero" type="number" placeholder="Ingrese Numero del Pokemon!" class="d-flex justify-content-center border w-100" />
                </div>
            </div>
            <div class="panel panel-default w-75">
                <div class="panel-heading d-flex justify-content-center">
                    <input class="mt-4" type="file" id="img" name="img" accept="image/png, image/jpeg">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea id="descripcion" class="form-control" name="descripcion" rows="6"></textarea>
                </div>
                <div class="d-flex flex-column g-4">
                    <div class="d-flex flex-column mb-2">
                        <div class="w-50">
                            <label for="tipo1">Tipo 1:</label>
                            <select class="form-select" aria-label="Default select example" name="tipo1" id="tipo1" class="d-flex justify-content-center border w-100">
                                <option selected>Elija Tipo de Pokemon</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="w-50">
                            <label for="tipo1">Tipo 2:</label>
                            <select class="form-select" aria-label="Default select example" name="tipo2" id="tipo2" class="d-flex justify-content-center border w-100">
                                <option selected>Elija Tipo de Pokemon</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center"> 
                        <div class="mr-4">
                            <label for="tipo1">Altura:</label>
                            <input type="number" name="altura" id="altura" class="d-flex justify-content-center border w-100">
                        </div>
                        <div class="ml-4">
                            <label for="tipo1">Peso:</label>
                            <input type="number" name="peso" id="peso" class="d-flex justify-content-center border w-100">
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
