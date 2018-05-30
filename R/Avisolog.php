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
                  <a href="index.php" title="R.S. Textil">
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
                    <a class="it_06944254 top-level-menu-li-a tmmegamenu_item" href="compraslog.php">Compras</a>
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
      <a class="home" href="index.php" title="Return to Home">
        <i class="fa fa-home"></i>
      </a>
    </li>
                  <li class="last">Aviso de privacidad</li>
            </ul>
</div>

<!-- /Breadcrumb -->
                    <div class="row">
            <div class="large-left col-sm-12">
              <div class="row">
                <div id="center_column" class="center_column col-xs-12 col-sm-12">

      <div class="rte">
    <h1 style="text-align:center;">Aviso de privacidad</h1>
<div class="border_bottom" style="text-align:left;">
  <p ALIGN="justify">R.S. Textil es una empresa comprometida con el cliente respetando los datos personales que proporcione para proteger los datos de
    acuerdo a la Ley Federal de Protección de Datos Personales en Posesión de los Particulares en el que pone a disposición el tratamiento
    de información.
  </p>
  <p ALIGN="justify">1.- Al ingresar la página declara que está aceptando los términos y condiciones expuestas otorgando el consentimiento de proporcionar
  información. La empresa no se hace responsable si el usuario no lee detenidamente el Aviso de Privacidad.
  </p>
  <p ALIGN="justify">1.1.- Si el usuario no acepta, deberá evitar proporcionar datos personales que afecten su integridad por cualquier medio incluyendo
  esta página, tampoco será obligado a proporcionar lo dicho anterior.
  </p>
  <p ALIGN="justify">1.2.- El responsable del tratamiento de los datos personales es Astorgus S.A. de C.V. el cual se compromete a respetar lo establecido
  anteriormente y se cumplirá de acuerdo a LFPDPPP, es aplicable respecto de los a las personas físicas que R.S. Textil obtiene de los
  clientes con motivo de la venta en línea de productos diseñados por Ricardo Seco.
  </p>
  <p ALIGN="justify">1.3.- Astorgus S.A. de C.V. se encuentra ubicado en: Ezequiel Montes No. 118, Edificio B, colonia Tabacalera, delegación Cuauhtémoc,
  código postal 06030, Ciudad de México.
  </p>
  <p ALIGN="justify">2.1.- R.S. Textil podrá recabar y tratar los siguientes datos personales:
  </p>
  <p ALIGN="justify">2.1.1.- Nombre completo, teléfono, dirección (código postal, estado, país, ciudad o municipio, colonia, calle, número exterior e
  interior), R.F.C., correo electrónico.
  </p>
  <p ALIGN="justify">2.1.2.- R.S. Textil podrá obtener los datos personales del usuario a efecto de validar, actualizar y contactar al usuario
  respetando en todo momento la privacidad del mismo.
  </p>
  <p ALIGN="justify">2.2.- R.S. Textil usará información IP para analizar cualquier tipo de amenazas a la página, así como para recabar información, la
  información IP en ningún caso será utilizada para identificar a los usuarios, excepto cuando haya probabilidades de actividad fraudulenta.
  </p>
  <p ALIGN="justify">3.1.- R.S. Textil se hará uso de “cookies” para facilitar el uso del sitio web, guardar contraseñas y preferencias mientras el usuario
    navega en la página.
  </p>
  <p ALIGN="justify">3.2.- R.S. Textil podrá verificar la identidad del usuario para la provisión y entrega de productos ofrecidos por R.S. Textil.
  </p>
  <p ALIGN="justify">3.2.1.- Podrá entregarle los productos adquiridos conforme a las solicitudes formuladas mediante este sitio web.
  </p>
  <p ALIGN="justify">3.2.2.- Podrá registrar y actualizar los datos en el sistema de administración empresarial para el acceso a los datos personales por
  las personas autorizadas.
  </p>
  <p ALIGN="justify">3.3.- El usuario será contactado a fin de aclarar dudas, dar seguimiento de pagos o cualquier situación derivada de los productos.
  </p>
  <p ALIGN="justify">3.4.- Se elaborará la facturación electrónica.
  </p>
  <p ALIGN="justify">3.5.- Procesar los pagos recibidos del usuario para llevar a cabo la venta de productos, a través de cualquier medio que sea dentro de
  la página web de Ricardo Seco.
  </p>
  <p ALIGN="justify">3.6.- Acreditar las devoluciones del usuario en los casos que corresponda.
  </p>
  <p>3.7.- Generar un registro en la base de datos de los clientes que será conservado por el tiempo que duren las relaciones comerciales.
  </p>
  <p ALIGN="justify">3.8.- R.S. Textil proporcionará publicidad y promociones tales como boletines informativos e invitaciones a eventos.
  </p>
  <p ALIGN="justify">3.9.- Informar vía correo electrónico sobre cambios o nuevos productos que estén relacionado con el producto solicitado.
  </p>
  <p ALIGN="justify">3.10.- R.S. Textil informará sobre cambios en el Aviso de Privacidad.
  </p>

</div>

<br/>


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
