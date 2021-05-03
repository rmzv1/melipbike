<!DOCTYPE html>
<html lang="en">

<?php

include "admin/db.php";

$images = galeria_imgs();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melipbike/Proyectos</title>

</head>

<body>
    <header>
        <?php
        include('header.php');
        ?>
    </header>

    <nav class="navbar navbar-expand-md navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mt-1">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">INICIO <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nosotros.php">NOSOTROS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="servicios.php">SERVICIOS</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="trabajos.php">TRABAJOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">CONTACTO</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="row fondo-trabajos justify-content-center align-items-center">
        <div class="col-12 col-md-8 mt-4 mb-5">
            <h2>Nuestros Proyectos</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non natus quo iure! Molestiae, fuga fugiat? Suscipit corrupti aliquam, quibusdam quia fuga aperiam fugit inventore, assumenda impedit commodi facere, nulla aliquid illo delectus veritatis consectetur laudantium qui ducimus. Iure aperiam, a, hic voluptas repudiandae exercitationem officiis sint dolore ab vel quas?</p>
        </div>
    </div>

    <div class="row fondo-trabajos-realizados">
        <div class="col-12 titulo">
            <h1>Trabajos Realizados</h1>
        </div>
        <div class="row bicicletas-reparadas">
            <div class="col-12 mt-4">
                <div class="row">
                    <?php $cnt = 0;
                    foreach ($images as $img) : ?>
                        <div class="col-12 col-md-4 mb-3">
                            <img class="img-fluid bici" src="<?php echo 'admin/' . $img->folder . $img->src; ?>" alt="Imagen 1">
                        </div>
                    <?php $cnt++;
                    endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="modal fade" id="bicicletas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content ">
                    <img src="" class="obtener-imagen img-fluid">
                    <div class="modal-footer">
                        <p class="descripcion-imagen"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <?php
        include('footer.php');
        ?>
    </footer>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/modal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/fontawesome.min.js"></script>

    <?php
        include ('chatbot.php');
    ?>
    
</body>

</html>