<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melipbike/Servicios</title>

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
                <li class="nav-item active">
                    <a class="nav-link" href="servicios.php">SERVICIOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="trabajos.php">TRABAJOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">CONTACTO</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="row fondo-servicios align-items-center">
        <div class="offset-1 col-10 col-md-5 offset-md-1 informacion-servicios">
            <h2>Nuestros Servicios</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus exercitationem adipisci voluptates reiciendis provident illum praesentium minima amet animi consectetur voluptatibus doloribus, esse expedita aliquam molestias nostrum. Veritatis fugit, unde doloremque consequatur voluptatem officia accusantium. Cumque hic voluptatum qui ullam.</p>
        </div>
    </div>

    <div class="row categoria-servicios align-items-center justify-content-around">
        <div class="col-10 col-sm-7 col-md-4 col-lg-3 servicio-tecnico">
            <div class="card text-white card1">
                <img class="card-img-top mx-auto d-block img-fluid" src="img/servicio-tecnico.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Servicio Tecnico</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque laudantium corrupti ipsam eaque non quis et error sapiente modi dolor?</p>
                </div>
            </div>
        </div>
        <div class=" col-10 col-sm-7 col-md-4 col-lg-3 accesorios">
            <div class="card text-white card2">
                <img class="card-img-top mx-auto d-block img-fluid" src="img/accesorios.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Accesorios</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque laudantium corrupti ipsam eaque non quis et error sapiente modi dolor?</p>
                </div>
            </div>
        </div>
        <div class="col-10 col-sm-7 col-md-4 col-lg-3 asesorias">
            <div class="card text-white card3">
                <img class="card-img-top mx-auto d-block img-fluid" src="img/asesorias.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Asesorias</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque laudantium corrupti ipsam eaque non quis et error sapiente modi dolor?</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row fondo-servicios2 align-items-center">
        <div class="offset-1 col-10 offset-md-6 col-md-6 informacion">
            <h2>Contamos con la mejor tecnologia</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum eveniet dolorem laboriosam debitis minima facilis optio. Beatae quae, aliquam libero, nesciunt unde magni ullam facilis, illo at accusamus ab! Eum libero quo voluptatum maiores blanditiis explicabo, aspernatur quibusdam reprehenderit sunt exercitationem cum debitis eius placeat sed neque consequatur. Cum, ad.</p>
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