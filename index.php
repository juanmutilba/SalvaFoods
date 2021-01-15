<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <title>Salvá Foods</title>
    <link rel="icon" href="css/images/SALVA-12.png" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="js/java.js" type="text/javascript"></script>
    <title>Salva Foods</title>
</head>

<body>
    <div class="conteiner_logo">
        <form action="">
            <input type="text" placeholder="Buscar">
            <button class="btn btn"><img src="./css/images/loop.png" class="loop" alt=""></button>


        </form>
        <img class="logo_principal" src="./css/images/Logo Principal.jpeg" alt="">
        <div class="cuenta">
            <button class="btn btn-dark">Iniciar Sesion / Registrarse</button>

            <img src="./css/images/carrito.png" class="carrito" alt="">
        </div>

    </div>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Productos</a>
                    <a class="nav-link" href="#nosotros">Nosotros</a>
                    <a class="nav-link" href="#contacto">Contacto</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="principal">


        <div class="fotos_carrusel">

            <div class="item" class="transicion">
                <img src="./css/images/Isologo1.jpeg">

            </div>
            <div class="item" class="transicion">
                <img src="./css/images/peanut.jpg">
            </div>
            <div class="item" class="transicion">
                <img src="./css/images/semillas.jpg">
            </div>
            <div class="item" class="transicion">
                <img src="./css/images/cuidado.jpg">

            </div>
            <div id="flechas">
                <p id="flecha-prev" class="flecha" class="center_y">
                    &#10094;
                </p>
                <p id="flecha-next" class="flecha" class="center_y">
                    &#10095;
                </p>
            </div>
            <div id="puntos" class="center_x">
                <div class="punto-nav"></div>
                <div class="punto-nav"></div>
                <div class="punto-nav"></div>
                <div class="punto-nav"></div>
            </div>
        </div>


        <div class="entrega">
            <div class="entregas">
                <img src="./css/images/envios_camion.svg" class="envios_camion" alt=""></button>
                <p> ENVÍOS A DOMICILIO </p>
                <p> Contra entrega en Tandil </p>
            </div>
            <div class="entregas">
                <img src="./css/images/envios_tarjeta.svg" class="envios_tarjeta" alt=""></button>
                <p> PAGÁ COMO QUIERAS </p>
                <p> Todos los medios de pago con Mercado Pago </p>
            </div>
            <div class="entregas">
                <img src="./css/images/envios_candado.svg" class="envios_candado" alt=""></button>
                <p> COMPRA CON TRANQUILIDAD </p>
                <p> Tus datos siempre protegidos </p>
            </div>
        </div>
        <div class="nosotros" id="nosotros">
            <p class="verde"> QUIENES SOMOS</p>

            <p>Somos Dani y Juan emprendedores y creadores de Salvá Foods que, más que un emprendimiento, es una
                familia-equipo de trabajo que ama la naturaleza como fuente de vida y felicidad.
            </p>
            <P class="verde">
                MISIÓN
            </P>
            <P>
                Brindar una opción alternativa rica, saludable para los productos lácteos.
            </P>
            <P class="verde">
                VISIÓN
            </P>
            <P>
                Favorecer al cambio alimenticio que queremos ver a nivel mundial.
                Facilitando y desestigmatizando el veganismo como forma de vida
            </P>

        </div>
        <div class="recetas_titulo">
            <p class="verde">Recetas recomendadas!</p>
        </div>
        <div class="recetas_foto">
            <div class="receta_foto">
                <img src="./css/images/torta_mani.jpg" class="recetas_imagen" alt="flan">
                <p> Torta de Maní </p>
                <a href="" id="verReceta" class="verReceta"> ver receta </a>
            </div>
            <div class="receta_foto" id="receta_foto2">
                <img src="./css/images/galletitas.jpg" class="recetas_imagen" id="imagen_receta2" alt="flan">
                <p> Galletitas </p>
                <a href="" id="verReceta" class="verReceta"> ver receta </a>
            </div>
            <div class="receta_foto">
                <img src="./css/images/barritas.jpg" class="recetas_imagen3" alt="Barritas">
                <p> Barritas </p>
                <button id="btn-abrir-popup"> ver receta </button>
            </div>
        </div>

        <div class="contacto" id="contacto">
            <p class="verde">CONTACTO</p>

            <form method="get" action="mail.php">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre">
                <label for="mail">Correo Electronico</label>
                <input type="text" name="mail" id="mail">
                <label for="mensaje">Mensaje</label>
                <textarea rows="6" cols="110" name="mensaje" id="mensaje" placeholder="escribe aqui tus comentarios"> </textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
    <div class="overlay" id="overlay">
        <div class="popup" id="popup">
            <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
            <h3>Receta</h3>
            <img src="./css/images/barritas.jpg" class="recetas_imagen_popup" alt="barritas">
            <div class="ingredientes">
                <ul>
                    <li>mani</li>
                    <li>crema</li>
                    <li>maicena</li>
                    <li>frutillas</li>
                    <li>coco</li>
                </ul>
            </div>
        </div>
    </div>
    <footer>
        <div class="div_copyright">Copyright Salvá Foods - 2020 - Todos los derechos reservados</div>
        <div class="div_redes">

            <a href=" https://www.facebook.com/salvafoodstandil/ " target="_blank "><img class="boton_redes " src="css/images/facebook.png" alt="facebook "></a>

            <a href="https://www.instagram.com/salvafoodstandil/?hl=es-la" target="_blank"><img class="boton_redes" src="css/images/instagram.png" alt="instagram"></a>

            <a href=" https://api.whatsapp.com/send?phone=5491124622673&text=&source=&data=&app_absent=" target=" _blank "><img class="boton_redes " src="css/images/whatsapp.png" alt="whatsapp "></a>

        </div>

    </footer>

</body>

</html>