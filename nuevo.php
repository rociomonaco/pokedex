<?php 
    session_start();
    include_once("header.php");
    include_once("seleccionTipo.php");
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
        <form class="border border-danger d-flex flex-column justify-content-center p-4 align-items-center rounded" action="funciones.php" method="POST" enctype="multipart/form-data">
            <div class="panel panel-default w-75 d-flex justify-content-between g-2">
                <div class="w-50 mr-4">
                    <label for="nombre">Nombre</label>
                    <input required name="nombre" id="nombre" type="text" placeholder="Ingrese Nombre del Pokemon!" class="d-flex justify-content-center border w-100" />
                </div>
                <div class="w-50 ml-4">
                    <label for="numero">Numero</label>
                    <input required name="numero" id="numero" type="number" placeholder="Ingrese Numero del Pokemon!" class="d-flex justify-content-center border w-100" />
                </div>
            </div>
            <div class="panel panel-default w-75">
                <div class="panel-heading d-flex justify-content-center py-4">
                    <img id="img" alt="img" width="100" height="100" src="data:image/svg+xml;charset=utf8,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%3E%3C/svg%3E" />
                    <div class="d-flex justify-content-center align-items-center">
                        <input required type="file" name="img" accept="image/png, image/jpeg, image/webp"  class="mt-4" 
                            onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0])">
                    </div>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea required id="descripcion" class="form-control" name="descripcion" rows="2"></textarea>
                </div>
                <div class="d-flex flex-column justify-content-between g-4">
                    <div class="d-flex flex-column mb-2 justify-content-between">
                        <div class="w-100 d-flex flex-column mb-1">
                            <div>Tipo 1</div>
                            <div class="d-flex flex-wrap">
                                <?php
                                renderOptions(1);
                                ?>
                            </div>
                        </div>
                        <div class="w-100 d-flex flex-column mb-1">
                            <div>Tipo 2</div>
                            <div class="d-flex flex-wrap">
                                <?php
                                renderOptions(2);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex  mb-2 align-items-center"> 
                        <div class="w-100 d-flex mb-1 align-items-center justify-content-between">
                            <label  for="altura">Altura:</label>
                            <input required type="number" name="altura" id="altura" class="-flex justify-content-center border w-75">
                        </div>
                        <div class="w-100 d-flex mt-1 align-items-center justify-content-between">
                            <label for="peso">Peso:</label>
                            <input required type="number" name="peso" id="peso" class="d-flex justify-content-center border w-75">
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit"  value="Crear">
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
