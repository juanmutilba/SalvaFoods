<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-29 10:44:32
  from '/home/u894195251/domains/salvafoods.com.ar/public_html/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_608a8e10029299_01444653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eadf5c76a85888d90f5b3ab55af987054eb979b3' => 
    array (
      0 => '/home/u894195251/domains/salvafoods.com.ar/public_html/templates/home.tpl',
      1 => 1619659979,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_608a8e10029299_01444653 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#productos">Productos</a>
                    <a class="nav-link" href="#nosotros">Nosotros</a>
                    <a class="nav-link" href="#contacto">Contacto</a>
                </div>
            </div>
        </div>
    </nav>

<div class="principal">
    <div class="fotos_carrusel">
        <div class="item" class="transicion">
            <img src="./css/images/banner1.jpg">
        </div>
        <div class="item" class="transicion">
            <img src="./css/images/banner2.jpg">
        </div>
        <div class="item" class="transicion">
            <img src="./css/images/banner3.jpg">
        </div>
        <div class="item" class="transicion">
            <img class="isologo" src="./css/images/banner4.jpg">
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
            <img src="./css/images/envios_tarjeta.svg   " class="envios_tarjeta" alt=""></button>
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
            Brindar una opción alternativa rica y saludable para poder alimentarse y vivir pleno.
        </P>
        <P class="verde">
            VISIÓN
        </P>
        <P>
            Favorecer al cambio alimenticio que queremos ver a nivel mundial.
            Facilitando y desestigmatizando el veganismo como forma de vida
        </P>

    </div>
    <div class="productos_titulo" id="productos">
        <p class="verde">Nuestra Pasta!</p>
    </div>
    <div class="recetas_foto">
        
        <div class="receta_foto">
            <img src="./css/images/mani.jpg" class="recetas_imagen" alt="pasta_mani">
        </div>
        <div class="receta_foto">
            <img src="./css/images/pasta_tapas2.jpg" class="recetas_imagen" alt="pasta_tapas">
        </div>
        <div class="receta_foto">
            <img src="./css/images/pasta_mani1.jpg" class="recetas_imagen" alt="pasta_mani1">
        </div>
    </div>
    <div class="recetas_titulo">
        <p class="verde">Nuestras Recetas!</p>
    </div>
    <div class="recetas_foto">
        <div class="receta_foto">
            <img src="./css/images/cheescake.jpg" class="recetas_imagen" alt="cheescake">
            <p> Cheesecake </p>
            <button class="btn-abrir-popup"> ver receta </button>
        </div>
        <div class="receta_foto" id="receta_foto2">
            <img src="./css/images/chips.jpg" class="recetas_imagen" id="imagen_receta2" alt="chips">
            <p> Chips </p>
            <button class="btn-abrir-popup"> ver receta </button>
        </div>
        <div class="receta_foto">
            <img src="./css/images/helado.jpg" class="recetas_imagen3" alt="helado">
            <p> Helado </p>
            <button class="btn-abrir-popup"> ver receta </button>
        </div>
    </div>

    <div class="contacto" id="contacto">
        <p class="verde">CONTACTO</p>

        <form method="POST" action="enviar">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
            <label for="mail">Correo Electronico</label>
            <input type="text" name="mail" id="mail">
            <label for="mensaje">Mensaje</label>
            <textarea rows="6" cols="110" name="mensaje" id="mensaje"
                placeholder="escribe aqui tus comentarios"> </textarea>
            <button type="submit" id=btn_enviar>Enviar</button>
        </form>
    </div>
</div>
<div class="overlay" id="overlay">
    <div class="popup" id="popup">
        <div>
            <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
        </div>
        <div>
            <h3>Receta</h3>
        </div>
        <div class="ingredientes">
            <img src="./css/images/cheescake.jpg" class="recetas_imagen_popup" alt="cheescake">
            <ul>
                <li>Manteca de Mani</li>
                <li>Azúcar Granulada</li>
                <li>Lecha en Polvo</li>
                <li>Chocolata Semi Amargo</li>
                <li>Esencia de vainilla</li>
            </ul>
        </div>
        <div class="preparacion">
            <ol>
                <li>El truco para conseguir que el dulce de azúcar sea suave y cremoso es cocinarlo adecuadame
                </li>
                <li> La temperatura de una mezcla de dulces puede aumentar lentamente y luego aumentar repentinamente.
                    Mire su termómetro cuidadosamente y retire la sartén del fuego cuando alcance la temperatura
                    deseada.r</li>
                <li>Si no puede usar un termómetro de caramelo, cocínelo durante aproximadamente 3-4 minutos después de
                    que comience a hervir (a fuego MEDIO).</li>
                <li>El producto final será suave como la seda. ¡Después de enfriar y cortar, coloque pequeños cuadrados
                    en bandejas para invitados o empaquete y regale!</li>
                <li>disfrutar una rica receta</li>
            </ol>
        </div>
    </div>
    <div class="popup" id="popup">
        <div>
            <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
        </div>
        <div>
            <h3>Receta</h3>
        </div>
        <div class="ingredientes">
            <img src="./css/images/chips.jpg" class="recetas_imagen_popup" alt="chips">
            <ul>
                <li>Mateca de Mani</li>
                <li>Crema</li>
                <li>Azucar</li>
                <li>Extracto de Vainilla</li>
                <li>Huevo</li>
                <li>Chips de chocolate</li>
            </ul>
        </div>
        <div class="preparacion">
            <ol>
                <li>Poner ingredientes en un bowl</li>
                <li>Mezclar</li>
                <li>Colocar la masa sobre las bandejas para hornear</li>
                <li>Hornee durante 10-12 minutos, o hasta que las galletas estén ligeramente doradas</li>
                <li>disfrutar una rica receta</li>
            </ol>
        </div>
    </div>
    <div class="popup" id="popup">
        <div>
            <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
        </div>
        <div>
            <h3>Receta</h3>
        </div>
        <div class="ingredientes">
            <img src="./css/images/helado.jpg" class="recetas_imagen_popup" alt="helado">
            <ul>
                <li>5 galletitas Lincoln + 3 cdas. de manteca + 1 cda. de azúcar negra</li>
                <li>1 taza de crema + 170 gramos de queso crema 1 y 1/2 taza de manteca de maní + 1 taza de azúcar
                    sencia de vainilla + 1/4 cdita. de canela</li>
                <li>1/2 taza de chocolate semi amargo picado + 1/2 taza de crema + 1/4 taza de nueces picadas</li>
                <li>mini chips de chocolate </li>
            </ul>
        </div>
        <div class="preparacion">
            <ol>
                <li>Precalentar el horno y preparar una asadera para muffins con pirotines. Combinar los primeros 3
                    ingredientes y batir hasta formar un crumble. Dividir la mezcla en los pirotines y presionar para
                    emparejar la base. Cocinar hasta que estén levemente dorados. </li>
                <li>Volcar la crema en un bowl y batir con una batidora hasta que esté espesa. En un bowl separado,
                    batir la mantequilla de maní y el queso crema hasta que esté suave. Agregar el azúcar glas, la
                    vainilla, la canela y la sal y seguir batiendo. Despacito volcar la crema batida sobre la mezcla de
                    mantequilla de maní hasta que estén completamente mezclados. Volcar la mezcla sobre la base y
                    freezar durante 1 hora.</li>
                <li>Mientras, prepara el granache de chocolate: volcar el chocolate y la crema en un bowl y calentar en
                    el microondas durante 1 minuto. Revolver y volver a calentar con intervalos hasta que el chocolate
                    esté completamente derretido. Dejar enfriar hasta que esté templado y volcarlo sobre los muffins.
                    Para decorar, derretir la mantequilla de maní y rociar sobre las tarteletas (con una manga queda
                    mejor). Esparcir los chips de chocolate sobre las tarteletas y freezar durante 4 horas. </li>
                <li>Disfrutar una rica receta</li>
            </ol>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
