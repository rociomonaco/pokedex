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
            <form class="d-flex">
            <input
                class="form-control form-control-dark text-bg-dark px-1 py-1"
                placeholder="Ingrese el nombre, tipo o número del pokémon"
            />
            <input
                class="btn btn-primary bg-primary text-white col-4"
                type="submit"
                value="¿Quién es este pokémon?"
            />
            </form>
            <a
            href="nuevo.php"
            class="btn btn-sm btn-outline-secondary"
            >Agregar pokemon
            </a>
        </div>

        <div class="album py-5">
      <div class="container mt-5">
        <div class="row g-6 col-md-12 col-sm-6 col-3">
          <div class="col-4 my-3">
            <div class="card shadow-sm">
              <div class="card-body">
                <div class="bg-primary py-5">Imagen</div>
                <p class="card-text">
                  <p>Altura:</p>
                  <p>Peso: </p>
                  <p>Tipo: </p>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button
                      type="button"
                      class="btn btn-sm btn-outline-secondary"
                    >
                      Ver Detalles
                    </button>
                  </div>
                <?php 
                    if(isset($_SESSION["logueado"])){
                ?>
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
                    </div>
                <?php 
                    }
                ?>
                 
                </div>
              </div>
            </div>
          </div>

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