<?php  

session_start();

require("conexion.php");

if( isset($_SESSION['user_id'])) {
    $sentenciaSQL = $conexion->prepare("SELECT dni, email, contrasena  FROM usuario WHERE dni=:dni");
    $sentenciaSQL->bindParam(':dni', $_SESSION['user_id']);
    $sentenciaSQL->execute();
    $cuenta = $sentenciaSQL->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if(count($cuenta) > 0) {
        $user = $cuenta;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyClothes</title>
    <link rel="shortcut icon" href="./img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container-fluid">
          
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="#">
              <img src="img/logotitulo.png" width="150" alt="">
            </a>

            <div class="collapse navbar-collapse" id="navbar-toggler">
                <a class="navbar-brand" href="#">
                </a>
                <ul class="navbar-nav d-flex justify-content-center align-items-center">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#remeras">Remeras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#pantalones">Pantalones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#zapatillas">Zapatillas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#buzos">Buzos</a>
                    </li>
                </ul>

                <div class="derecha" >
                <?php if(!empty($user)): ?>
                    <a class="botones boton-logout" href="logout.php">Cerrar Sesion</a>
                </div>

                <?php else: ?>
                    <a class="botones boton-login" href="iniciosesion.php"> Iniciar Sesion </a>
                    <a class="botones boton-register" href="registrarse.php"> Registrarse </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
      </nav>

      <main>
        <h1 class="title">Productos</h1>
            
        <section class="categorias" id="remeras">Remeras</section>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols g-4">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/remeracoralclaro.jpg" alt="Remera Coral Claro">
                        <div class="card-body">
                            <h5 class="card-title text-center">Remera Coral Claro</h5>
                            <p class="card-text text-center">Remera</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/remeracelesteoscuro.jpg" alt="Remera Celeste Oscuro">
                        <div class="card-body">
                            <h5 class="card-title text-center">Remera Celeste Oscuro</h5>
                            <p class="card-text text-center">Remera</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/remeraturquesa.jpg" alt="Remera Turquesa">
                        <div class="card-body">
                            <h5 class="card-title text-center">Remera Turquesa</h5>
                            <p class="card-text text-center">Remera</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/remeragris.jpg" alt="Remera Gris">
                        <div class="card-body">
                            <h5 class="card-title text-center">Remera Gris</h5>
                            <p class="card-text text-center">Remera</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/remeramarronclaro.jpg" alt="Remera Marron Claro">
                        <div class="card-body">
                            <h5 class="card-title text-center">Remera Marron Claro</h5>
                            <p class="card-text text-center">Remera</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/remeramostaza.jpg" alt="Remera Mostaza">
                        <div class="card-body">
                            <h5 class="card-title text-center">Remera Mostaza</h5>
                            <p class="card-text text-center">Remera</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/remerarosagastado.jpg" alt="Remera Rosa Gastado">
                        <div class="card-body">
                            <h5 class="card-title text-center">Remera Rosa Gastado</h5>
                            <p class="card-text text-center">Remera</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/remeramostazaintenso.jpg" alt="Remera Mostaza Intenso">
                        <div class="card-body">
                            <h5 class="card-title text-center">Remera Mostaza Intenso</h5>
                            <p class="card-text text-center">Remera</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/remeranegra.jpg" alt="Remera Negra">
                        <div class="card-body">
                            <h5 class="card-title text-center">Remera Negra</h5>
                            <p class="card-text text-center">Remera</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <section class="categorias" id="pantalones">Pantalones</section>
        <div class="pantalones container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols g-4">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/pantalogrisclaro.jpg" alt="Joggin Gris Claro">
                        <div class="card-body">
                            <h5 class="card-title text-center">Joggin Gris Claro</h5>
                            <p class="card-text text-center">Pantalon</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/pantalonamarillo.jpg" alt="Jean Amarillo">
                        <div class="card-body">
                            <h5 class="card-title text-center">Jean Amarillo</h5>
                            <p class="card-text text-center">Pantalon</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/pantalonazulpepejeans.jpg" alt="Joggin Azul Oscuro">
                        <div class="card-body">
                            <h5 class="card-title text-center">Joggin Azul Oscuro</h5>
                            <p class="card-text text-center">Pantalon</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/pantaloncelesteyblanco.jpg" alt="Joggin Nubes">
                        <div class="card-body">
                            <h5 class="card-title text-center">Joggin "Nubes"</h5>
                            <p class="card-text text-center">Pantalon</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/pantalongrisclaro.jpg" alt="Jean Gris">
                        <div class="card-body">
                            <h5 class="card-title text-center">Jean Gris</h5>
                            <p class="card-text text-center">Pantalon</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/pantalonnaranja.jpg" alt="Jean Naranja">
                        <div class="card-body">
                            <h5 class="card-title text-center">Jean Naranja</h5>
                            <p class="card-text text-center">Pantalon</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/pantalonsalmon.jpg" alt="Jean Rosa">
                        <div class="card-body">
                            <h5 class="card-title text-center">Jean Rosa</h5>
                            <p class="card-text text-center">Pantalon</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/pantalonjeanclaro.jpg" alt="Jean Estandar Claro">
                        <div class="card-body">
                            <h5 class="card-title text-center">Jean Estandar Claro</h5>
                            <p class="card-text text-center">Pantalon</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/pantalonjeanoscuro.jpg" alt="Jean Estandar Oscuro">
                        <div class="card-body">
                            <h5 class="card-title text-center">Jean Estandar Oscuro</h5>
                            <p class="card-text text-center">Pantalon</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <section class="categorias" id="zapatillas">Zapatillas</section>
        <div class="pantalones container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols g-4">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/adidasblancas.jpeg" alt="Adidas Blancas">
                        <div class="card-body">
                            <h5 class="card-title text-center">Adidas Blancas</h5>
                            <p class="card-text text-center">Zapatillas</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/adidasnegras.jpeg" alt="Adidas Negras">
                        <div class="card-body">
                            <h5 class="card-title text-center">Adidas Negras</h5>
                            <p class="card-text text-center">Zapatillas</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/adidasnegrorosa.jpeg" alt="Adidas Negro con Rosa">
                        <div class="card-body">
                            <h5 class="card-title text-center">Adidas Negro con Rosa</h5>
                            <p class="card-text text-center">Zapatillas</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/adidasverderosa.jpeg" alt="Adidas Verde con Rosa">
                        <div class="card-body">
                            <h5 class="card-title text-center">Adidas Verde con Rosa</h5>
                            <p class="card-text text-center">Zapatillas</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/asicsblancas.jpeg" alt="Asics Blancas">
                        <div class="card-body">
                            <h5 class="card-title text-center">Asics Blancas</h5>
                            <p class="card-text text-center">Zapatillas</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/jordanblancagris.jpeg" alt="Jordan Blanca Gris">
                        <div class="card-body">
                            <h5 class="card-title text-center">Jordan Blanca Gris</h5>
                            <p class="card-text text-center">Zapatillas</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/jordanblancorojo.jpeg" alt="Jordan Blanco Rojo">
                        <div class="card-body">
                            <h5 class="card-title text-center">Jordan Blanco Rojo</h5>
                            <p class="card-text text-center">Zapatillas</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/pumagris.jpeg" alt="Puma Gris">
                        <div class="card-body">
                            <h5 class="card-title text-center">Puma Gris</h5>
                            <p class="card-text text-center">Zapatillas</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/pumanegra.jpeg" alt="Puma Negra">
                        <div class="card-body">
                            <h5 class="card-title text-center">Puma Negra</h5>
                            <p class="card-text text-center">Zapatillas</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <section class="categorias" id="buzos">Buzos</section>
        <div class="pantalones container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols g-4">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/buzoamarillo.jpeg" alt="Buzo Amarillo">
                        <div class="card-body">
                            <h5 class="card-title text-center">Buzo Amarillo</h5>
                            <p class="card-text text-center">Buzo</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/buzoblanco.jpeg" alt="Buzo Blanco">
                        <div class="card-body">
                            <h5 class="card-title text-center">Buzo Blanco</h5>
                            <p class="card-text text-center">Buzo</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/buzoceleste.jpeg" alt="Buzo Celeste">
                        <div class="card-body">
                            <h5 class="card-title text-center">Buzo Celeste</h5>
                            <p class="card-text text-center">Buzo</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/buzomarron.jpeg" alt="Buzo Marron">
                        <div class="card-body">
                            <h5 class="card-title text-center">Buzo Marron</h5>
                            <p class="card-text text-center">Buzo</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/buzomarronoscuro.jpeg" alt="Buzo Marron Oscuro">
                        <div class="card-body">
                            <h5 class="card-title text-center">Buzo Marron Oscuro</h5>
                            <p class="card-text text-center">Buzo</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/buzonegrodiseño.jpeg" alt="Buzo Negro Con Diseño">
                        <div class="card-body">
                            <h5 class="card-title text-center">Buzo Negro Con Diseño</h5>
                            <p class="card-text text-center">Buzo</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/buzoverde.jpeg" alt="Buzo Verde">
                        <div class="card-body">
                            <h5 class="card-title text-center">Buzo Verde</h5>
                            <p class="card-text text-center">Buzo</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/buzoverdeoscuro.jpeg" alt="Buzo Verde Oscuro">
                        <div class="card-body">
                            <h5 class="card-title text-center">Buzo Verde Oscuro</h5>
                            <p class="card-text text-center">Buzo</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="img/buzovioleta.jpeg" alt="Buzo Violeta">
                        <div class="card-body">
                            <h5 class="card-title text-center">Buzo Violeta</h5>
                            <p class="card-text text-center">Buzo</p>
                            <a href="" class="btn btn-outline-dark w-100">Comprar</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        </main>
        <footer>
            <div class="container p-4">
                <div class="lista contenido-footer row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4 g-4">
                    <div class="col text-center">
                        <a href="info.html" class="info">Información sobre la página</a>
                    </div>
                    <div class="col text-center">
                        <a href="ayuda.html" class="ayuda">Ayuda al cliente</a>
                    </div>
                    <div class="col text-center">
                        <a href="micuenta.html" class="cuenta">Mi Cuenta</a>
                    </div>
                    <div class="col text-center">
                        <ul class="contactos">
                            <li>Contactos:</li>
                            <li>Gmail: myclothes@gmail.com</li>
                            <li>Teléfono: 11 3628-9032</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>copyright &copy;2023 MyClothes</p>
            </div>
        </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>
