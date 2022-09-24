<?php 
    session_start();
    include_once("header.php");
    include_once("getPokemonById.php");
    $id = $_GET["id"];
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
        <?php 
            getPokemonById($id)
        ?>

    <!-- <div class="container mt-5">
        <div class="border border-danger d-flex flex-column justify-content-center p-4 align-items-center rounded">
            <div class="panel panel-default w-75 d-flex justify-content-between g-2">
                <div class="w-50 mr-4">
                    <div class="d-flex justify-content-center w-100" >name</div>
                </div>
                <div class="w-50 ml-4">
                <div class="d-flex justify-content-center w-100" >numero</div>
                </div>
            </div>
            <div class="panel panel-default w-75">
                <div class="panel-heading d-flex justify-content-center py-4">
                    <img src="img/Metapod.webp"/>
                </div>
                <div>
                    <div>Descripción</div>
                    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur deleniti fugiat necessitatibus debitis temporibus quia ea beatae. Voluptatem reprehenderit, natus in distinctio, totam cupiditate facilis, non saepe possimus maiores earum.</div> 
                </div>
                <div class="d-flex mt-4">
                    <div>Tipo : </div>
                    <div class="mx-2">
                        <img src ="img/pokemontypes/Tipo_agua.jpg"/>
                    </div>
                    <div class="mx-2">
                        <img src ="img/pokemontypes/Tipo_fuego.jpg"/>
                    </div>
                </div>
             
            </div>
        </div>
    </div> -->

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
