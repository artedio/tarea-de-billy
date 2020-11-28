<?php
session_start();
$varsession = $_SESSION['email'];
error_reporting(0);
if($varsession == null || $varsession = '') {
    echo'usted no tiene permisos para esta accion';
    die();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style/estilos_menu.css">
    <title>Radio</title>
</head>
<body>

    <section class="title" class="logotipo">
        <h1>Radio</h1>
    </section>

   


    <nav class="navegacion">
        <ul class="menu" >


            <li class="first-item">
                <a href="index.php">
                    <img src="img/home.jpg" alt="" class="imagen">
                    <span class="text-item">Inicio</span>
                    <span class="down-item"></span>
                </a>
            </li>

            <li>
                <a href="canales_nacionales.php">
                    <img src="img/canales_nacionales.jpg" alt="" class="imagen">
                    <span class="text-item">Nacionales</span>
                    <span class="down-item"></span>
                </a>
            </li>

            <li>
                <a href="canales_locales.php">
                    <img src="img/canales_locales.jpg" alt="" class="imagen">
                    <span class="text-item">Locales</span>
                    <span class="down-item"></span>
                </a>
            </li>

            <li>
                <a href="radio.php">
                    <img src="img/Radio.jpg" alt="" class="imagen">
                    <span class="text-item">Radio</span>
                    <span class="down-item"></span>
                </a>
            </li>

            <li>
                <a href="contactos.html">
                    <img src="img/contactos.jpg" alt="" class="imagen">
                    <span class="text-item">Contacto</span>
                    <span class="down-item"></span>
                </a>
            </li>

        </ul>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col">
               
                <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 my-4 mx-auto text-center" id="encabezado">
                    <p class="lead">Estamos trabajando en eso</p>
                </div>

            </div>
        </div>
    </div>
    
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>
</html>