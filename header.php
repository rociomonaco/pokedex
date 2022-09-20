<?php

 function createHeader() {
    echo '<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
          <a href="/" class="h2 d-flex align-items-center col-md-3 mb-2 mb-md-0 text-danger text-decoration-none font-weight-bold">Pokedex</a>';
    if(!isset($_SESSION["logueado"])){
        echo '<form action="login.php" method="post" class="d-flex col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input
                    class="form-control form-control-dark text-bg-dark mx-2 px-1 py-1"
                    placeholder="Usuario"
                    name="user"
                    />
                    <input
                    class="form-control form-control-dark text-bg-dark mx-2 px-1 py-1"
                    placeholder="Contraseña"
                    type="password"
                    name="pass"
                    />
                    <input
                    class="btn btn-primary me-2 col-2"
                    type="submit"
                    value="Ingresar"
                    />
            </form>';
    } else {
        echo '<form action="logout.php" method="post" class="d-flex w-50">
                    <input
                    class="btn btn-primary me-2 col-4"
                    type="submit"
                    value="Desloguear"
                    name="logout"
                    />
                </form>';
    }
    if(!isset($_SESSION["logueado"]) && isset($_SESSION["error"])){
        echo '<div>Error de autentificación</div>';
    }

    echo '</header>';
}

?>
