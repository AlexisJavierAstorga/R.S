<?php
session_start();
if(isset($_SESSION['u_usuario'])){
}else{
  header("Location: index.php");
}
?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es-es"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7" lang="es-es"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8" lang="es-es"><![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9" lang="es-es"><![endif]-->
<html lang="es-es"><head>

    <meta charset="utf-8" />
    <title>R.S. Textil</title>


          <meta name="description" content="Shop powered by R.S. Textil" />
            <meta name="generator" content="R.S. Textil" />
    <meta name="robots" content="index,follow" />
    <meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.0, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="shortcut icon" type="image/x-icon" href="themes/theme1362/img/icon/logo/LOGO.ico" />

<link rel="stylesheet" href="themes/theme1362/css/inputs.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/global.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/video.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/youtube-responsive.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/autoload/highdpi.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/autoload/jquery.bxslider.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/autoload/responsive-tables.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/autoload/uniform.default.css" media="all" />
              <link rel="stylesheet" href="js/jquery/plugins/fancybox/jquery.fancybox.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/product_list.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/blockcategories/blockcategories.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/blockcurrencies/blockcurrencies.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/blocklanguages/blocklanguages.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/blockcontact/blockcontact.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/blocknewsletter/blocknewsletter.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/blocktags/blocktags.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/blockviewed/blockviewed.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/homeslider/homeslider.css" media="all" />
              <link rel="stylesheet" href="js/jquery/plugins/bxslider/jquery.bxslider.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/themeconfigurator/css/hooks.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/blockpermanentlinks/blockpermanentlinks.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/smartblog/css/smartblogstyle.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/smartbloghomelatestnews/css/smartbloglatestnews.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/smartblogtag/css/smartblogtags.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/tmmegamenu/views/css/tmmegamenu.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/tmsociallogin/views/css/front.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/tmsearch/views/css/tmsearch.css" media="all" />
              <link rel="stylesheet" href="js/jquery/plugins/autocomplete/jquery.autocomplete.css" media="all" />
              <link rel="stylesheet" href="modules/tmrelatedproducts/views/css/tmrelatedproducts.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/blockcart/blockcart.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/tmhtmlcontent/css/hooks.css" media="all" />
              <link rel="stylesheet" href="modules/tmcategoryproducts/views/css/tmcategoryproducts.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/tmproductsslider/views/css/tmproductsslider.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/tmnewsletter/views/css/tmnewsletter.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/blockwishlist/blockwishlist.css" media="all" />
              <link rel="stylesheet" href="modules/tmsocialfeeds/views/css/hook.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/productcomments/productcomments.css" media="all" />
              <link rel="stylesheet" href="modules/tmproductvideos/views/css/video/video-js.css" media="all" />
              <link rel="stylesheet" href="modules/tmproductvideos/views/css/tmproductvideos.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/tmmegalayout/views/css/tmmegalayout.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/themeconfigurator/css/live_configurator.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/themeconfiglink/views/css/themeconfiglink.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/tmmediaparallax/views/css/tmmediaparallax.css" media="all" />
              <link rel="stylesheet" href="modules/tmmediaparallax/views/css/rd-parallax.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/tmheaderaccount/views/css/front.css" media="all" />

<script type="text/javascript">
var CUSTOMIZE_TEXTFIELD = 1;
var FancyboxI18nClose = 'Cerrar';
var FancyboxI18nNext = 'Siguiente';
var FancyboxI18nPrev = 'Previo';
var added_to_wishlist = 'El producto se ha añadido con éxito a su lista de deseos.';
var ajax_allowed = true;
var ajaxsearch = true;
var baseDir = 'index.php';
var blocking_popup = '1';
var comparator_max_item = 2;
var comparedProductsIds = [];
var contentOnly = false;
var currency = {"id":1,"name":"Dollar","iso_code":"USD","iso_code_num":"840","sign":"$","blank":"0","conversion_rate":"1.000000","deleted":"0","format":"1","decimals":"1","active":"1","prefix":"$ ","suffix":"","id_shop_list":null,"force_id":false};
var currencyBlank = 0;
var currencyFormat = 1;
var currencyRate = 1;
var currencySign = '$';
var customizationIdMessage = 'Personalización n°';
var delete_txt = 'Eliminar';
var displayList = false;
var freeProductTranslation = '¡Gratis!';
var freeShippingTranslation = 'Envío gratuito!';
var generated_date = 1511406115;
var hasDeliveryAddress = false;
var highDPI = false;
var homeslider_loop = 1;
var homeslider_pause = 3000;
var homeslider_speed = 500;
var homeslider_width = 10000;
var id_lang = 4;
var img_dir = 'themes/theme1362/img/index/slider/rs4.jpg';
var instantsearch = true;
var isGuest = 0;
var isLogged = 0;
var isMobile = false;
var is_logged = false;
var l_code = 'es_ES';
var loggin_required = 'Debe identificarse para administrar su lista de deseos.';
var max_item = 'No puede comparar más de 2 productos';
var min_item = 'Debe elegir al menos un producto';
var module_url = 'index.php';
var mywishlist_url = 'login.php';
var nbItemsPerLine = 4;
var nbItemsPerLineMobile = 2;
var nbItemsPerLineTablet = 3;
var page_name = 'index';
var placeholder_blocknewsletter = 'Introduzca su dirección de correo electrónico';
var popup_status = true;
var priceDisplayMethod = 1;
var priceDisplayPrecision = 2;
var quickView = true;
var removingLinkText = 'eliminar este producto de mi carrito';
var roundMode = 2;
var search_url_local = 'carta.php';
var static_token = '52fc77373dab56446353c7986f8743d9';
var tm_cps_carousel_auto = 0;
var tm_cps_carousel_auto_control = 0;
var tm_cps_carousel_auto_hover = 1;
var tm_cps_carousel_auto_pause = 3000;
var tm_cps_carousel_control = 0;
var tm_cps_carousel_hide_control = 1;
var tm_cps_carousel_item_scroll = 1;
var tm_cps_carousel_loop = 1;
var tm_cps_carousel_nb = 4;
var tm_cps_carousel_pager = 0;
var tm_cps_carousel_random = 0;
var tm_cps_carousel_slide_margin = 30;
var tm_cps_carousel_slide_width = 270;
var tm_cps_carousel_speed = 500;
var tmnewsletter_status = '2';
var tmolarkchat_status = '2';
var tmsearch_description = true;
var tmsearch_height = 180;
var tmsearch_image = true;
var tmsearch_limit = true;
var tmsearch_limit_num = 3;
var tmsearch_manufacturer = true;
var tmsearch_price = true;
var tmsearch_reference = true;
var tmsearch_scroll = false;
var toBeDetermined = 'A determinar';
var token = '7d00ee8810df500349cd55e3c68003aa';
var user_newsletter_status = 0;
var usingSecureMode = true;
var wishlistProductsIds = false;
</script>

              <script src="js/jquery/jquery-1.11.0.min.js"></script>
              <script src="js/jquery/jquery-migrate-1.2.1.min.js"></script>
              <script src="js/jquery/plugins/jquery.easing.js"></script>
              <script src="js/tools.js"></script>
              <script src="themes/theme1362/js/global.js"></script>
              <script src="themes/theme1362/js/autoload/10-bootstrap.min.js"></script>
              <script src="themes/theme1362/js/autoload/14-device.min.js"></script>
              <script src="themes/theme1362/js/autoload/15-jquery.total-storage.min.js"></script>
              <script src="themes/theme1362/js/autoload/15-jquery.uniform-modified.js"></script>
              <script src="themes/theme1362/js/autoload/16-jquery.scrollmagic.min.js"></script>
              <script src="themes/theme1362/js/autoload/17-jquery.scrollmagic.debug.js"></script>
              <script src="themes/theme1362/js/autoload/18-TimelineMax.min.js"></script>
              <script src="themes/theme1362/js/autoload/19-TweenMax.min.js"></script>
              <script src="themes/theme1362/js/autoload/20-jquery.bxslider.js"></script>
              <script src="themes/theme1362/js/autoload/20-modernizr_v2_7_2.min.js"></script>
              <script src="js/jquery/plugins/fancybox/jquery.fancybox.js"></script>
              <script src="themes/theme1362/js/products-comparison.js"></script>
              <script src="themes/theme1362/js/tools/treeManagement.js"></script>
              <script src="themes/theme1362/js/modules/blocknewsletter/blocknewsletter.js"></script>
              <script src="themes/theme1362/js/modules/homeslider/js/homeslider.js"></script>
              <script src="js/jquery/plugins/bxslider/jquery.bxslider.js"></script>
              <script src="modules/tmmegamenu/views/js/hoverIntent.js"></script>
              <script src="modules/tmmegamenu/views/js/superfish.js"></script>
              <script src="themes/theme1362/js/modules/tmmegamenu/views/js/tmmegamenu.js"></script>
              <script src="modules/tmsociallogin/views/js/front.js"></script>
              <script src="js/jquery/plugins/autocomplete/jquery.autocomplete.js"></script>
              <script src="themes/theme1362/js/modules/tmsearch/views/js/tmsearch.js"></script>
              <script src="themes/theme1362/js/modules/tmrelatedproducts/views/js/tmrelatedproducts.js"></script>
              <script src="themes/theme1362/js/modules/blockcart/ajax-cart.js"></script>
              <script src="js/jquery/plugins/jquery.scrollTo.js"></script>
              <script src="js/jquery/plugins/jquery.serialScroll.js"></script>
              <script src="modules/tmproductsslider/views/js/tmproductsslider.js"></script>
              <script src="js/validate.js"></script>
              <script src="modules/tmnewsletter/views/js/tmnewsletter.js"></script>
              <script src="themes/theme1362/js/modules/blockwishlist/js/ajax-wishlist.js"></script>
              <script src="modules/tmsocialfeeds/views/js/tmsocialfeeds.js"></script>
              <script src="modules/tmproductvideos/views/js/video/video.js"></script>
              <script src="themes/theme1362/js/modules/tmmegalayout/views/js/tmmegalayout.js"></script>
              <script src="modules/themeconfiglink/views/js/themeconfiglink.js"></script>
              <script src="modules/tmmediaparallax/views/js/jquery.rd-parallax.min.js"></script>
              <script src="modules/tmmediaparallax/views/js/jquery.youtubebackground.js"></script>
              <script src="modules/tmmediaparallax/views/js/jquery.vide.min.js"></script>
              <script src="modules/tmmediaparallax/views/js/tmmediaparallax.js"></script>
              <script src="modules/tmheaderaccount/views/js/front.js"></script>
              <script src="themes/theme1362/js/index.js"></script>

        <script>
        $(document).ready(function(){
            var elem = $('.parallax-box-1');
            if (elem.length) {
                $('body').append('        <div class=\"rd-parallax rd-parallax-1\">\r\n                                                                                                                            <div class=\"rd-parallax-layer\" data-offset=\"0\" data-speed=\"0.3\" data-type=\"media\" data-fade=\"false\" data-url=\" themes/theme1362/img/index/slider/moda.jpg\" data-direction=\"normal\"><\/div>\r\n                                                <div class=\"rd-parallax-layer\" data-offset=\"0\" data-speed=\"0\" data-type=\"html\" data-fade=\"true\" data-direction=\"normal\"><div class=\"parallax-main-layout\"><\/div><\/div>\r\n        <\/div>\r\n    ');
                var wrapper = $('.rd-parallax-1');
                elem.before(wrapper);
                $('.rd-parallax-1 .parallax-main-layout').replaceWith(elem);
                win = $(window);
                            }
        });
    </script>
    <script>
        $(document).ready(function(){
            $(window).on('load', function(){
                $.RDParallax();
                $('.rd-parallax-layer video').each(function(){
                    $(this)[0].play();
                });
            });
        });
    </script>
                </head>
                <!--Confirmed session-->
  <body id="index" class="index hide-left-column hide-right-column lang_es  one-column">
  <!--END block for older internet explorer-->
        <div id="page">
      <div id="preloader">
          <div class="cssload-dots"></div>
      </div>
      <!--#preloader -->
      <div class="header-container">
        <header id="header">
            <div class="nav">
              <div class="container">
                <div class="row">
                  <nav>

<div id="header-login">
  <?php
      echo $_SESSION['u_usuario'];
  ?>
    <div class="current header_user_info"><a href="#" onclick="return false;"> Tu cuenta </a></div>
    <ul id="header-login-content" class="toogle_content">
                    <li>
                <form action="existe.php" method="post" id="header_login_form">
                    <div id="create_header_account_error" class="alert alert-danger" style="display:none;"></div>
                    <div class="form_content clearfix">
                        <p>
                        <?php
                            echo "<br><br><a href='salir.php' class='create'>Salir de tu cuenta</a>";
                        ?>
                        </p>
                        <div class="clearfix">

                        </div>
                    </div>
                </form>
            </li>
            </ul>
</div></nav>
                </div>
              </div>
            </div>
                    <div class="top">
            <div class="container">
              <div class="row">
                <div id="header_logo">
                  <a href="index_.php" title="R.S. Textil">
                    <img class="logo img-responsive" src="themes/theme1362/img/icon/logo/LOGO.jpg" alt="R.S. Textil" width="275" height="71"/>
                  </a>
                </div>
                <div class="top_menu top-level rs">
                <div class="menu-title tmmegamenu_item">Menú</div>
                <!-- Inicia Menu desplegable-->
                <ul class="menu clearfix top-level-menu tmmegamenu_item">
                  <li class=" top-level-menu-li tmmegamenu_item it_22797818">
                    <a class="it_22797818 top-level-menu-li-a tmmegamenu_item" href="index_.php">Inicio </a>
                  </li>
                  <li class=" top-level-menu-li tmmegamenu_item it_06944254">
                    <!-- Comienza primer nav-->
                    <a class="it_06944254 top-level-menu-li-a tmmegamenu_item" href="compraslog.php">Mis compras</a>
                  </li>

                  <!-- Comienza segundo nav-->
                  <li class=" top-level-menu-li tmmegamenu_item it_19773019">
                  <a class="it_19773019 top-level-menu-li-a tmmegamenu_item" href="productoslog.php">Productos</a>
                  </li>
    <li class=" top-level-menu-li tmmegamenu_item it_22797818">
      <a class="it_22797818 top-level-menu-li-a tmmegamenu_item" href="#">Facturación </a>
    </li>
    <li class=" top-level-menu-li tmmegamenu_item it_29705307"><a class="it_29705307 top-level-menu-li-a tmmegamenu_item" href="perfillog.php"> Perfil</a></li></ul>

                </div>
              </div>
            </div>
          </div>
        </header>
      </div>
      <div class="columns-container">

        <div id="columns" class="container">
                      <!-- Breadcrumb -->

<div class="breadcrumb clearfix">
  <ul>
    <li class="home">
      <a class="home" href="index_.php" title="Return to Home">
        <i class="fa fa-home"></i>
      </a>
    </li>
                  <li class="last">Términos y condiciones</li>
            </ul>
</div>

<!-- /Breadcrumb -->
                    <div class="row">
            <div class="large-left col-sm-12">
              <div class="row">
                <div id="center_column" class="center_column col-xs-12 col-sm-12">

      <div class="rte">
    <h1 style="text-align:center;">Términos y condiciones</h1>
<div class="border_bottom" style="text-align:center;"> <h3>OBJETIVO</h3>
  <p ALIGN="justify">A continuación, te describiremos los términos y condiciones (en lo sucesivo “los Términos”), aplicables para el uso de nuestro
    Sitio web www.rsTextil.com.mx, así como la compra de los productos exhibidos y ofecidos, a través de éste medio, por lo que sí
    deseas adquirir los productos, desde cualquier servidor o computadora, aceptas expresamente los Términos, manifestando tu voluntad
    de conformidad con los artículos 1803 y 1834 bis del Código Civil Federal, así como los artículos 80, 81, 89 y demás relativos y
    aplicables al Código de Comercio y a la Ley Federal de Protección al Consumidor y demás legislaciones aplicables.
  </p>
  <p ALIGN="justify">Al navegar en este Sitio o hacer un pedido a través del mismo, aceptas quedar vinculado por estos Términos, por nuestro aviso de
    privacidad y por nuestra política de cookies, en lo sucesivo a estas dos últimas se les denominara Políticas de Protección de Datos, por
    lo que, si no estás de acuerdo con todos los Términos y con las Políticas de Protección de Datos, te sugerimos abandonar el Sitio.
  </p>
  <p ALIGN="justify">La sola utilización o visita del Sitio le otorga al público en general o a quien lo use, la condición de "Usuario" e implica la
    aceptación plena e incondicional, de todas y cada una de las condiciones generales y particulares incluidas en estos Términos,
    así como de las Políticas de Protección de Datos, publicadas por García en el momento mismo que el Usuario acceda al Sitio.
  </p>
  <p > <h3>DISPONIBILIDAD DEL SERVICIO</h3> </p>
  <p ALIGN="justify">Los productos que se venden a través de este Sitio, están únicamente disponibles para su envío dentro de la República Mexicana,
    salvo aquellas áreas o zonas que por la dificultad de acceso, comunicaciones o consideraciones similares se justifique que dicha oferta
    no esté disponible, sin ninguna responsabilidad para R.S Textil.
  </p>
  <p> <h3>DISPONIBILIDAD DE LOS PRODUCTOS</h3> </p>
  <p ALIGN="justify">R.S. Textil ofrecerá a la venta los productos que podrán ser consultados y seleccionados por el Usuario, en el Sitio. Las publicaciones
    podrán incluir textos descriptivos, gráficos, fotografías y otros contenidos y condiciones pertinentes para la venta de los productos.
    El producto ofrecido por García será descrito y mostrado de la mejor manera posible, en cuanto a sus condiciones y características
    relevantes, por lo que sus características e imágenes relacionadas, se interpretan como enunciativas y descriptivas, más no limitativas
    y no están sujetas a interpretación del Usuario, en caso de dudas acerca de los productos se ponen a disposición del Usuario, en el
    Sitio, un servicio de chat o línea telefónica. Todos los pedidos de productos están sujetos a la disponibilidad de los mismos. En este
    sentido, si se producen dificultades en cuanto al suministro de productos o si no quedan artículos en stock, nos reservamos el derecho
    de facilitarle al Usuario, información acerca de productos sustitutivos de calidad y valor igual o superior que el Usuario podrá encargar.
    Si no desea hacer un pedido de esos productos sustitutivos, le reembolsaremos el monto pagado a través del mismo método de pago usado y
    el tiempo aproximado del abono dependerá siempre de la entidad bancaria y podrá tarda hasta 30 días hábiles.
  </p>
    <p> <h3>CÓMO SE FORMALIZA EL CONTRATO</h3> </p>
    <p ALIGN="justify">Se entenderá que la compraventa de un producto se ha formalizado cuando la orden de compra haya sido expresamente aceptada
    por R.S Textil, mediante el envio de un correo electrónico a la dirección electrónica indicada por el propio Usuario denominado
    Confirmación de Pedido. Si su oferta no es aceptada y ya se hubiese realizado algún cargo en su cuenta, el importe del mismo le será
    reintegrado en su totalidad, a través del mismo método de pago usado, en un término aproximado de hasta 30 días hábiles, dependiendo
    de la entidad bancaria.
    </p>
    <p ALIGN="justify">Para realizar un pedido u orden de compra, el Usuario deberá seguir el procedimiento de compra en línea y hacer clic en "Autorizar
    pago". Tras esto, el Usuario recibirá un correo electrónico con la Confirmación de su Pedido. Todos los pedidos u órdenes de compra
    están sujetos a la aceptación de García, de la que será informado mediante la Confirmación de pedido.
    </p>
    <p ALIGN="justify">Serán objeto del Contrato únicamente aquellos productos relacionados en la Confirmación de pedido.
    </p>
    <p ALIGN="justify">Nos reservamos el derecho de retirar cualquier producto de este Sitio web en cualquier momento y de quitar o modificar cualquier
    material o contenido de la misma. Aunque haremos lo posible para tramitar siempre todos los pedidos, puede haber circunstancias
    excepcionales que nos obliguen a rechazar la tramitación de algún pedido después de haber enviado la Confirmación de Pedido, por lo
    que nos reservamos el derecho a hacerlo en cualquier momento, sin ninguna responsabilidad para García, salvo la de restituir las
    cantidades efectivamente pagadas, en la forma y plazos indicados.
    </p>
    <p> <h3>ENTREGA</h3> </p>
    <p ALIGN="justify">Sin perjuicio de lo establecido en la cláusula de DISPONIBILIDAD DE LOS PRODUCTOS anterior respecto de la disponibilidad de los
    productos y salvo que se produzcan circunstancias extraordinarias, tales como caso fortuito o fuerza mayor, conceptos que se definen
    más adelante, intentaremos enviar el pedido consistente en los producto/s relacionados en cada Confirmación de pedido, antes de la
    fecha de entrega que figura en la Confirmación de pedido, o bien, si no se especificase ninguna fecha de entrega, en el plazo indicado
    al seleccionar el método de envío y, en todo caso, en el plazo máximo de 10 días hábiles, contados desde la Confirmación del pago.
    </p>
    <p ALIGN="justify">Si por algún motivo no pudiésemos cumplir con la fecha de entrega, le informaremos de esta circunstancia y le daremos la opción de
    seguir adelante con la compra estableciendo una nueva fecha de entrega o bien cancelar el pedido con el reembolso total del precio
    pagado. Tenga en cuenta, en cualquier caso, que no realizamos entregas a domicilio los sábados, ni domingos, ni días festivos.
    </p>
    <p ALIGN="justify">La entrega de los productos adquiridos en el Sitio se realizará en la dirección registrada por el Usuario en el campo“dirección de
    entrega”, por lo que una vez que se haya recibido el pedido en el domicilio indicado, el riesgo de los productos se entenderá
    trasladado a el usuario, lo que se acreditará mediante la firma de la recepción del pedido, en la dirección de entrega convenida.
    </p>
    <p ALIGN="justify">Si fuere imposible efectuar la entrega de su pedido, su pedido será devuelto a nuestro almacén, dejándole una nota explicándole
    dónde se encuentra su pedido y cómo hacer para que le sea enviado de nuevo. Si no va a estar en el lugar de entrega a la hora convenida,
    el Usuario se deberá de poner en contacto con nosotros, para coordinar o modificar la fecha u hora acordada, de lo contrario R.S. Textil
    no será responsable del retraso en la entrega de los productos.
    </p>
    <p ALIGN="justify">En caso de que transcurridos 30 días naturales desde que su pedido esté disponible para su entrega, el pedido no ha sido entregado
    por causa no imputable a nosotros, entenderemos que desea desistirse del Contrato, por lo que lo consideraremos rescindido. Como
    consecuencia de dicha rescisión, le devolveremos las cantidades efectivamente pagadas en el plazo máximo de 30 días hábiles, contados
    a partir de que se considere rescindido, devolución que se realizará a través del mismo método de pago usado y el tiempo aproximado del
    abono dependerá siempre de la entidad bancaria. Por favor, tenga en cuenta que, derivado de la rescisión del Contrato, por esta causa,
    el transporte puede tener un costo adicional, por lo que estaremos autorizados a repercutirle los costes correspondientes y a retener
    las cantidades correspondientes, sin ninguna responsabilidad para García.
    </p>
    <p ALIGN="justify">El costo por los gastos de envío, dependerán de la distancia (código postal) mismas que serán comunicadas previamente al Usuario,
    antes de realizar el pago.
    </p>
    <p> <h3>PRECIO Y PAGO</h3> </p>
    <p ALIGN="justify">El precio de los productos será el que se estipule en cada momento en nuestro Sitio. Los precios de los artículos ya incluyen IVA,
    pero no incluyen los gastos de envío, por lo que el costo de éste último se añadirá al importe total de los productos adquiridos. Los
    precios pueden cambiar en cualquier momento, pero los posibles cambios no afectarán las órdenes de compra o pedidos realizados por el
    Usuario, siempre y cuando exista una Confirmación de Pedido, pues los Términos que regirán al contrato serán los que se encontraban
    vigentes al momento en que se efectuó la compra, por lo que si hubiera un incremento o disminución en los precios de esos mismos
    productos con posterioridad, García no tendrá derecho u obligación de reembolsar cantidad alguna o bien solicitar la diferencia del
    precio de los productos.
    </p>
    <p ALIGN="justify">Una vez que el Usuario haya seleccionado todos los artículos que desea comprar, estos se habrán añadido a su cesta y el paso
      siguiente será tramitar el pedido y efectuar el pago. Para ello, deberá seguir los pasos del proceso de compra, rellenando o
      comprobando la información que en cada paso se le solicita. Asimismo, durante el proceso de compra, antes de realizar el pago, podrá
      modificar los datos de su pedido.
    </p>
    <p ALIGN="justify">El usuario podrá utilizar como medio de pago deposito en efectivo, tarjetas de débito o crédito a través de las pasarelas de pago
    que se encuentren disponibles en el Sitio. Para minimizar el riesgo de acceso no autorizado, se encriptan los datos de la tarjeta de
    crédito o débito del Usuario. Una vez que recibamos su pedido, el cargo en su tarjeta se realizará en el momento en que su pedido sea
    confirmado por R.S Textil.
    </p>
    <p ALIGN="justify">Al hacer clic en "Autorizar Pago" el Usuario está confirmando que la tarjeta de crédito o débito es suya, por lo que García en
    ningún momento será responsable por el mal uso, suplantación, clonación, robo de identidades y/o algún otro supuesto relacionado con
    el uso indebido de éste medio de pago. Todas las tarjetas estarán sujetas a comprobaciones y autorizaciones por parte de la entidad
    emisora de las mismas, pero si dicha entidad no autorizare el pago, se le informará a el Usuario, mediante correo electrónico, García
    no será responsable por ningún retraso o falta de entrega de los productos o comisión que se generé por la falta de autorización o
    rechazo de cargo por parte de la entidad emisora del medio de pago.
    </p>
    <p ALIGN="justify">Tal y como lo establece las leyes fiscales, el usuario podrá solicitar su factura con los datos del ticket que se enviará junto con
    los Productos o bien el Usuario podrá generar su factura en el portal de facturación en línea disponible en el Sitio.
    </p>
    <p> <h3>POLÍTICA DE DEVOLUCIONES</h3> </p>
    <p ALIGN="justify">El Usuario tendrá derecho a la devolución y consecuente reembolso del precio de los Productos, por las siguientes causas: a) Por
    defecto (s) de los Productos entregados b) Por no corresponder con el pedido realizado por el Usuario (talla, modelo, color y demás
    especificaciones) o c) si los productos, no hubieren sido de su agrado.
    </p>
    <p ALIGN="justify">Todos los gastos de envío para hacer cambios por defecto (s) de fabricación de los Productos entregados o por no corresponder con
    la orden de compra o pedido realizado por el Usuario (talla, modelo color) y devoluciones sí los Productos no hubieren sido de su
    agrado corren a cargo de Garcia una vez que se compruebe la devolución de los mismos, así como el estado de los Productos, se realizara
    el reembolso a través del mismo método de pago empleado y el tiempo aproximado de devolución dependerá siempre de la entidad bancaria
    que puede ser hasta 30 días hábiles.
    </p>
    <p ALIGN="justify">Para solicitar la devolución o cambio el Usuario deberá enviar un correo electrónico o bien comunicarse al departamento de atención
    a clientes vía telefónica o chat, que se encuentran disponibles en el Sitio.
    </p>
    <p> <h3>VALORACIÓN DEL ESTADO DEL PRODUCTO Y, EN SU CASO, REEMBOLSO</h3> </p>
    <p ALIGN="justify">En caso de solicitar la devolución por las causas indicadas en la cláusula anterior, procederemos a examinar el estado del producto
    para constatar que el mismo se devuelve en las mismas condiciones en que el Usuario lo recibió. Tras examinar el o los productos,
    comunicaremos al Usuario, si tiene derecho al reembolso de los productos adquiridos. El reembolso se efectuará a través del mismo
    método de pago empleado, en un plazo de hasta 30 días hábiles, dependiendo de la institución bancaria, a partir de la fecha en la que
    le enviemos un correo electrónico confirmando que procede el reembolso, el cambio de producto se realizará en forma inmediata y/o
    el reembolso a través del mismo método de pago usado. El Usuario no incurrirá en ningún gasto como consecuencia del reembolso, salvo
    que no hubiera procedido a la devolución conforme a alguna de las opciones ofrecidas en la cláusula anterior.
    </p>
    <p ALIGN="justify">Las cantidades pagadas por aquellos productos que sean devueltos por las causas mencionadas, le serán reembolsadas íntegramente,
    excluyendo los gastos de entrega incurridos para la entrega del artículo.
    </p>
    <p> <h3>RESPONSABILIDAD Y EXONERACIÓN DE RESPONSABILIDAD</h3> </p>
    <p ALIGN="justify">Salvo que expresamente se disponga lo contrario en las presentes Condiciones, nuestra responsabilidad en relación con cualquier
    producto adquirido en nuestra tienda en línea, estará limitada estrictamente a las cantidades efectivamente pagadas.
    </p>
    <p ALIGN="justify">No obstante, lo anterior, nuestra responsabilidad no está excluida ni limitada en cualquier asunto en el que fuese ilegal o
    ilícito que excluyéramos, limitásemos o intentáramos excluir o limitar nuestra responsabilidad.
    </p>
    <p ALIGN="justify">Todas las descripciones de productos, informaciones y materiales que figuran en el Sitio web se suministran "como cuerpo cierto
    " y sin garantías expresas o implícitas sobre los mismos salvo las establecidas legalmente. En este sentido, estamos obligados a
    entregarle productos que sean conformes con el Contrato, respondiendo frente al Usuario de cualquier falta de conformidad que exista
    en el momento de la entrega del producto. Se entiende que los productos son conformes con el Contrato siempre que (I) se ajusten a la
    descripción realizada por nosotros y posean las cualidades que hayamos presentado en este Sitio (II) sean aptos para los usos a que
    ordinariamente se destinan los productos del mismo tipo y (III) presenten la calidad y prestaciones habituales de un producto del
    mismo tipo que sean fundadamente esperables.
    </p>
    <p ALIGN="justify">Con el alcance que permita la ley, excluimos todas las garantías, salvo aquéllas que no puedan ser legítimamente excluidas frente a
    los consumidores y usuarios. Únicamente seleccionamos los productos de la máxima calidad, pero las características naturales son
    inevitables y deben ser aceptadas como parte de la apariencia individual del producto. Lo dispuesto en la presente cláusula no afectará
    a sus derechos como consumidor y usuario, ni a su derecho a desistir del Contrato.
    </p>
    <p> <h3>PROPIEDAD INTELECTUAL</h3> </p>
    <p ALIGN="justify">La marca R.S. Textil y los signos distintivos, marcas, el nombre de dominio www.rsTextil.com.mx y sus logotipos,
    equivalen a marcas, avisos comerciales, nombres comerciales y nombres de dominio propiedad de García, protegidos por los Tratados
    Internacionales y Leyes aplicables a la materia correspondiente.
    </p>
    <p ALIGN="justify">Los Derechos de Autor sobre el contenido, organización, recopilación, compilación, información, transferencias magnéticas o
    electrónicas, conversión digital, logotipos, fotografías, imágenes, programas, aplicaciones o en general cualquier información
    contenida o publicada en el Sitio, se encuentran debidamente protegidos a favor de R.S. Textil, de conformidad con la legislación
    aplicable a Propiedad Industrial y Derechos de Autor.
    </p>
    <p ALIGN="justify">Se prohíbe expresamente al Usuario modificar, alterar o suprimir ya sea en forma total o parcial, los avisos comerciales, marcas,
    nombres comerciales, señas, anuncios, logotipos o en general cualquier indicación que se refiera a la propiedad de información
    contenida en el Sitio.
    </p>
    <p ALIGN="justify">En caso de que el usuario o visitante transmita a R.S. Textil cualquier información, programas, aplicaciones, software o en general
    cualquier material que requiera ser licenciado a través de García, el Usuario le otorga a ésta en este acto una Licencia perpetua,
    universal, gratuita, no exclusiva, mundial y libre de regalías, incluyendo entre los derechos otorgados el derecho de sub licenciar,
    vender, reproducir, distribuir, transmitir, crear trabajos derivados, exhibirlos y ejecutarlos públicamente.
    </p>
    <p ALIGN="justify">Lo establecido en el párrafo anterior se aplicará igualmente a cualquier otra información que el Usuario envíe o transmita a
    R.S. Textil(incluyendo sin limitación algunas ideas para renovar o mejorar el Sitio), ya sea que éstas hayan sido incluidas en
    cualquier área del Sitio en virtud de otros medios o modos de transmisión ya conocidos o en el futuro desarrollados.
    </p>
    <p ALIGN="justify">Por lo anterior, el Usuario renuncia expresamente en este acto a intentar cualquier acción legal, demanda o reclamación en contra de
    R.S. Textil por cualquier violación presente o futura relacionada con cualquier derecho de Propiedad Industrial o Derechos de Autor,
    derivado de la información, programas, aplicaciones, software, ideas y demás materiales que el propio "Usuario" envíe al sitio.
    </p>
    <p ALIGN="justify">Esta política tiene como fin actuar contra las violaciones que en materia de propiedad intelectual se pudieren generar u originar
    según lo estipulado en la Legislación aplicable, incluyendo la eliminación o el bloqueo del acceso a material que se encuentra sujeto
    a actividades que infrinjan el Derecho de Propiedad Intelectual de terceros.
    </p>
    <p> <h3>VIRUS, PIRATERÍA Y OTROS ATAQUES INFORMÁTICOS</h3> </p>
    <p ALIGN="justify">El usuario o visitante no debe realizar un uso indebido del Sitio web, mediante la introducción intencionada en la misma de virus,
    troyanos, gusanos, bombas lógicas o cualquier otro programa o material tecnológicamente perjudicial o dañino. Por lo que el Usuario se
    compromete a no atacar este Sitio, sus ordenadores y/o servidores donde se encuentre alojado el Sitio en ninguna de las formas
    existentes o por existir.
    </p>
    <p ALIGN="justify">El incumplimiento de esta cláusula podría llevar aparejada la comisión de infracciones o delitos tipificados por la normativa
    aplicable. Informaremos de cualquier incumplimiento de dicha normativa a las autoridades competentes y cooperaremos con ellas para
    descubrir la identidad del atacante. Asimismo, en caso de incumplimiento de la presente cláusula, dejará inmediatamente de estar
    autorizado a usar este Sitio.
    </p>
    <p ALIGN="justify">No seremos responsables de cualquier daño o pérdida resultante de un ataque de denegación de servicio, implantación o robo de
    identidades, virus o cualquier otro programa o material tecnológicamente perjudicial o dañino que pueda afectar a su ordenador,
    equipo informático, datos o materiales como consecuencia del uso de este Sitio o de la descarga de contenidos de la misma o a los que
    la misma redireccione.
    </p>
    <p> <h3>COMUNICACIONES POR ESCRITO</h3> </p>
    <p ALIGN="justify">La normativa aplicable exige que parte de la información o comunicaciones que le enviemos sean por escrito. Mediante el uso de este
    Sitio, el Usuario acepta que la mayor parte de dichas comunicaciones con nosotros sean electrónicas. Nos pondremos en contacto con el
    Usuario por correo electrónico o le facilitaremos información colgando avisos en el Sitio. A efectos contractuales, el Usuario
    consiente en usar este medio electrónico de comunicación y reconoce que todo contrato, notificación, información y demás comunicaciones
    que le enviemos de forma electrónica cumplen con los requisitos legales de ser por escrito. Esta condición no afectará a sus derechos
    reconocidos por ley.
    </p>
    <p ALIGN="justify">El usuario consiente que las notificaciones se realizarán vía correo electrónico por lo que se entenderá que las notificaciones han
    sido recibidas y han sido correctamente hechas, 24 horas después de haberse enviado un correo electrónico, o tres días después de la
    fecha de franqueo de cualquier carta. Para probar que la notificación ha sido hecha, será suficiente con probar, en el caso de una
    carta, que tenía la dirección correcta, estaba correctamente sellada y que fue debidamente entregada en correos o en un buzón y, en el
    caso de un correo electrónico, que el mismo fue enviado a la dirección de correo electrónico especificada por el receptor.
    </p>
    <p> <h3>CASO FORTUITO O FUERZA MAYOR</h3> </p>
    <p ALIGN="justify">R.S. Textil no será responsable por ningún incumplimiento o retraso de alguna de las obligaciones que asumamos al amparo de un
    Contrato, cuya causa se deba a acontecimientos que están fuera de nuestro control razonable, identificados como Caso Fortuito o
    Fuerza Mayor.
    </p>
    <p ALIGN="justify">Las Causas de Caso Fortuito o Fuerza Mayor incluirán cualquier acto, acontecimiento, falta de ejercicio, omisión o accidente que
    esté fuera de nuestro control razonable y entre otros.
    </p>
    <p ALIGN="justify">Pondremos todos los medios razonables para que finalice la Causa de Caso Fortuito o Fuerza Mayor o para encontrar una solución que
    nos permita cumplir nuestras obligaciones en virtud del Contrato a pesar de la Causa de Caso Fortuito o Fuerza Mayor.
    </p>
    <p> <h3>NUESTRO DERECHO A MODIFICAR ESTAS CONDICIONES</h3> </p>
    <p ALIGN="justify">Garcia se reserva el derecho de revisar y modificar los presentes Condiciones en cualquier momento, asi como los precios, los
    productos, etcétera, por lo que será responsabilidad del Usuario, leerlas previo a la autorización de pago.
    </p>
    <p ALIGN="justify">Usted estará sujeto a las políticas y Condiciones vigentes en el momento en que use el Sitio o efectúe cada pedido, salvo que por
    ley o decisión de organismos gubernamentales debamos hacer cambios con carácter retroactivo en dichas políticas, Condiciones o
    Declaración de Privacidad, en cuyo caso, los posibles cambios afectarán también a los pedidos que usted hubiera hecho previamente.
    </p>
    <p> <h3>LEGISLACIÓN APLICABLE Y JURISDICCIÓN</h3> </p>
    <p ALIGN="justify">Este convenio estará regido en todos sus puntos por las leyes vigentes en los Estados Unidos Mexicanos, en particular respecto de
    mensajes de datos, contratación electrónica y comercio electrónico se regirá por lo dispuesto por la legislación federal respectiva.
    Cualquier controversia derivada del presente acuerdo, su existencia, validez, interpretación, alcance o cumplimiento, será sometida a
    las leyes aplicables y a los tribunales competentes.
    </p>
    <p ALIGN="justify">Para la interpretación, cumplimiento y ejecución del presente convenio, las partes expresamente se someten a la jurisdicción de los
    tribunales competentes de la Ciudad de México, renunciando en consecuencia a cualquier fuero que en razón de su domicilio presente o
    futuro pudiera corresponderles.
    </p>
    <p ALIGN="justify">Para cualquier duda respecto a este documento o a los principios que rigen el "Sitio", sugerimos consultar a un asesor a través de
    los medios de contacto disponibles en el Sitio.
    </p>

</div>

  </div>


              </div><!-- #center_column -->
                        </div><!--.large-left-->
          </div><!--.row-->
                    </div><!-- .row -->
        </div><!-- #columns -->
                                                </div><!-- .columns-container -->
                                                <div class="footer-container">
                                                          <div id="footer">
                                                            <div class="wrapper it_JADNISTKBNNA footer-1">
                                                            <div class="row it_ZIWFFSDESZUD full-width">
                                                            <div class="it_OTDNUESIOQFX col-xs-12    container">
                                                            <div class="row it_TMLVSLJZPFCD ">
                                                            <div class="it_YDIZQZQNWRBK col-xs-12 col-sm-8   ">
                                                            </div>
                                                            </div></div></div></div>
                      <div class="wrapper it_YEWVYNBVYLBM ">
                      <div class="row it_KSMNOOTVQKYH full-width">
                      <div class="it_DZDNDVWOMRPR col-xs-12    container cms-info">
                      <div class="row it_WZIBFUDLWJVN ">
                      <div class="it_YTSDYTDROFCP col-xs-12 col-sm-4 col-md-4  cms-info">  <!-- Block CMS module footer -->
                                                              <section class="footer-block" id="block_various_links_footer">
                                                                <h4>Información</h4>
                                                                <ul class="toggle-footer">
                                                                                            <li class="item">
                                                                      <a href="terminoslog.php" title="Nuestras tiendas">
                                                                        Términos y condiciones
                                                                      </a>
                                                                    </li>
                                                                                <li class="item">
                                                                      <a href="Avisolog.php" title="Términos y condiciones">
                                                                        Aviso de privacidad
                                                                      </a>
                                                                    </li>
                                                                </ul>

                                                              </section>
                                                                  <div class="bottom-footer">
                                                                  <div class="container">
                                                                    <a class="_blank" href="index_.php"> © 2017 - R.S. Textil </a>
                                                                  </div>
                                                                </div>
                                                                <!-- /Block CMS module footer -->
                                                            </div>
                                                            <div class="it_CGFNKPAEBTMT col-xs-12 col-sm-4   "><!-- Block myaccount module -->
                                                            <section class="footer-block">
                                                              <h4>
                                                                Notros
                                                              </h4>
                                                              <div class="block_content toggle-footer">
                                                                <ul class="bullet">
                                                                  <li>
                                                                    <a href="Quien y quelog.php" title="Mis compras" rel="nofollow">¿Quiénes somos?<br>¿Qué hacemos?</a>
                                                                  </li>
                                                                      </ul>
                                                              </div>
                                                            </section>
                                                            <!-- /Block myaccount module --></div>
                                                            <div class="it_CGFNKPAEBTMT col-xs-12 col-sm-4   "><!-- Block myaccount module -->
                                                            <section class="footer-block">

                                                            </section>
                                                            <!-- /Block myaccount module --></div>
                                                            <div class="it_PVMULUPUDNYH col-xs-12 col-sm-4 col-md-4  "><!-- MODULE Block contact infos -->
                                                            <section id="block_contact_infos" class="footer-block">
                                                              <div>
                                                                <h4>Redes sociales</h4>
                                                                <div class="block_content toggle-footer">
                                                                  <ul class="bullet">
                                                                    <li>
                                                                      <a title="Mis compras" rel="nofollow">Síguenos en nuestras redes sociales y dales LIKE</a>
                                                                    </li>
                                                                        </ul>
                                                                </div>
                                                              </div>
                                                            </section>
                                                            <!-- /MODULE Block contact infos --><section id="social_block">
                                                              <ul>
                                                                      <li class="facebook">
                                                                    <a target="_blank" href="https://www.facebook.com/AstorgusAsociados/" title="Facebook">
                                                                      <span>Facebook</span>
                                                                    </a>
                                                                  </li>
                                                                          <li class="twitter">
                                                                    <a target="_blank" href="https://mobile.twitter.com/rs_textil" title="Twitter">
                                                                      <span>Twitter</span>
                                                                    </a>
                                                                  </li>
                                                                          <li class="youtube">
                                                                    <a target="_blank" href="https://m.youtube.com/channel/UCl7PpI7rt27vB8qBAPXlA8g" title="Youtube">
                                                                      <span>Youtube</span>
                                                                    </a>
                                                                  </li>
                                                                              <li class="instagram">
                                                                    <a class="_blank" href="https://www.instagram.com/astorgusasociados/">
                                                                      <span>Instagram</span>
                                                                    </a>
                                                                  </li>
                                                                  </ul>
                                                              <h4>Síganos</h4>
                                                            </section>
                                                            <div class="clearfix"></div></div></div></div></div></div>
                                                            <div class="wrapper it_BBNZRPDZHJXZ ">
                                                            <div class="row it_RTICFYJVLNIL ">
                                                            <div class="it_LNTHOJLQFGRA col-xs-12    footer_hidden">
                                                            <!-- begin olark code -->
                                                            <script data-cfasync="false" type='text/javascript'>
                                                            /*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
                                                            f[z]=function(){
                                                            (a.s=a.s||[]).push(arguments)};var a=f[z]._={
                                                            },q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
                                                            f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
                                                            0:+new Date};a.P=function(u){
                                                            a.p[u]=new Date-a.p[0]};function s(){
                                                            a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
                                                            hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
                                                            return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
                                                            b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
                                                            b.contentWindow[g].open()}catch(w){
                                                            c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
                                                            var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
                                                            b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
                                                            loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});

                                                            /* custom configuration goes here (www.olark.com/documentation) */

                                                            olark.identify('7830-582-10-3714');



                                                            /*]]>*/</script>
                                                            <!-- end olark code --></div></div></div>
                                                                                </div>
                                                                                        </div>
                                                                        </div><!-- #page -->


                                                            <script type="text/javascript" src="themes/theme1362/js/ga.js"></script>
                                                            </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager --></html>
