<?php
session_start();
if(isset($_SESSION['u_usuario'])){
  echo "<script>alert('Bienvenido, ya puedes realizar tus compras!!')</script>";
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
var baseDir = 'index_.php';
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
var module_url = 'index_.php';
var mywishlist_url = 'loginlog.php';
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
var search_url_local = 'cartalog.php';
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
                <form action="existelog.php" method="post" id="header_login_form">
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

<div class="wrapper it_RBTBAWPZQVDN mg_mod">
<div class="row it_QDWMMPCDTHDI wrap-1-top-1">
<div class="it_JXOVCBWVVDZK col-xs-12 col-sm-9   wrap-1-top-1-div">  <!-- Module HomeSlider -->
      <div id="homepage-slider">
            <ul id="homeslider" style="max-height:812px;">
                              <li class="homeslider-container">
              <a href="productosloglog.php" title="Gran marca">
                <img src="themes/theme1362/img/index/slider/rs1.jpg" width="1920" height="812" alt="Gran marca" />
              </a>
                              <div class="homeslider-description"><h2>Grandes marcas usan nuestros diseños</h2>
<h3>Lo nuevo de New Balance</h3>
<p><button class="btn btn-default"><span>Cómpralo ya!</span></button></p></div>
                          </li>
                                        <li class="homeslider-container">
              <a href="productosloglog.php" title="Dis estupendo">
                <img src="themes/theme1362/img/index/slider/rs2.jpg" width="1920" height="812" alt="Dis estupendo" />
              </a>
                              <div class="homeslider-description"><h2>Diseños estupendos para ti</h2>
<h3>Pensamos en el placer de la moda huichol</h3>
<p><button class="btn btn-default"><span>Cómpralo ya!</span></button></p></div>
                          </li>
                                        <li class="homeslider-container">
              <a href="productosloglog.php" title="Deseo">
                <img src="themes/theme1362/img/index/slider/rs5.jpg" width="1920" height="812" alt="Deseo" />
              </a>
                              <div class="homeslider-description"><h2>Tus deseos son realidad</h2>
<h3>Grandes estrellas están con nosotros</h3>
<p><button class="btn btn-default"><span>Cómpralo ya!</span></button></p></div>
                          </li>
                        </ul>

    </div>
    <!-- /Module HomeSlider -->
</div>
<div class="it_JGJRPDEGLFSK col-xs-12 col-sm-3   wrap-1-top-1-div">    <div id="htmlcontent_top">
    <ul class="htmlcontent-home clearfix row">
              <li class="htmlcontent-item-1 col-xs-4">
                      <a href="productosloglog.php" class="item-link" title="">
                                    <img src="themes/theme1362/img/index/rs6.jpg" class="item-img" title="" alt="" width="471" height="608"/>
                                                  <div class="item-html">
                <h2>50%
off</h2>
<p><button>Cómpralo ya!</button></p>
              </div>
                                  </a>
                  </li>
          </ul>
  </div>
</div></div></div>

        <div id="columns" class="container">
                    <div class="row">
            <div class="large-left col-sm-12">
              <div class="row">
                <div id="center_column" class="center_column col-xs-12 col-sm-12">

                  <ul id="home-page-tabs" class="nav nav-tabs clearfix">
                <li class="homefeatured">
            <a data-toggle="tab" href="#homefeatured" class="homefeatured"><span></span>-Nuestros diseños-</a>
          </li>
              </ul>
    <div class="tab-content">


  <!-- Products list -->
  <ul id="homefeatured" class=" product_list grid row homefeatured tab-pane">
    <li class=" ajax_block_product col-xs-12 col-sm-4 col-md-3 first-in-line first-item-of-tablet-line first-item-of-mobile-line">
      <div class="product-container">
        <div class="left-block">
          <div class="product-image-container">
            <a title="Cuadrib" itemprop="url">
              <img class="replace-2x img-responsive" src="themes/theme1362/img/index/cata/c1.jpg" alt="Cuadrib" title="Cuadrib" itemprop="image" />

            </a>

                                          <a class="sale-box" href="#">
                <span class="sale-label">&iexcl;Oferta!</span>
              </a>
                        </div>

        </div>
        <div class="right-block">
          <h5 itemprop="name">
                          <a class="product-name" title="Cuadrib" itemprop="url" >
              <span class="list-name">Cuadrib</span>
              <span class="grid-name">Cuadrib</span>
            </a>
          </h5>
                      <p class="product-desc" itemprop="description">
            <span class="list-desc">Vete elegante a cualquier parte con nuestra moda huichol.</span>
            <span class="grid-desc">Vete elegante a cualquier parte...</span>
          </p>
          <?php
          include("conexion.php");
          $result = mysqli_query($con, "SELECT cantidad,talla FROM tbl_inventarioProductos WHERE nombre='Cuadrib'");
          if ($row = mysqli_fetch_array($result)){
            echo "<p><span class='grid-desc'>Cantidad: ".$row["cantidad"]."</span></p>";
            echo "<p><span class='grid-desc'>Tallas: ".$row["talla"]."</span></p>";
          } else {
          echo "¡ No se ha encontrado ningún registro !";
          }
          ?>
                        <div class="content_price">

                <span class="price product-price product-price-new">
                  $19.20                  </span>

                  <span class="old-price product-price">
                    $24.00
                  </span>

                                        <span class="price-percent-reduction">-20%</span>



                            </div>
                                    <div class="hook-reviews">
              <div class="comments_note" itemprop="aggregateRating">
    <div class="star_content clearfix">
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star"></div>
                              <div class="star"></div>
                  <meta itemprop="worstRating" content = "0" />
    <meta itemprop="ratingValue" content = "3" />
    <meta itemprop="bestRating" content = "5" />
    </div><br>
    <?php
      echo "<a href='desclog.php'> <p><button class='btn btn-default'><span>Cómpralo ya!</span></button></p></a>";
    ?>
    </div>
    </div>
    </div>
    </div><!-- .product-container> -->
    </li>




                      <li class=" ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-mobile-line">
      <div class="product-container">
        <div class="left-block">
          <div class="product-image-container">
            <a  href="desc1log.php" title="Tappib" itemprop="url">
              <img class="replace-2x img-responsive" src="themes/theme1362/img/index/cata/c2.jpg" alt="Tappib" title="Tappib" itemprop="image" />

            </a>

                                          <a class="sale-box" href="#">
                <span class="sale-label">&iexcl;Oferta!</span>
              </a>
                        </div>

        </div>
        <div class="right-block">
          <h5 itemprop="name">
                          <a class="product-name" href="#" title="Tappib" itemprop="url" >
              <span class="list-name">Tappib</span>
              <span class="grid-name">Tappib</span>
            </a>
          </h5>
                      <p class="product-desc" itemprop="description">
            <span class="list-desc">A que no sabías que podemos ser más frescos con nuestros nuevos modelos de huichol.</span>
            <span class="grid-desc">A que no sabías que podemos ser más frescos...</span>
          </p>
          <?php
          include("conexion.php");
          $result = mysqli_query($con, "SELECT cantidad,talla FROM tbl_inventarioProductos WHERE nombre='Tappib'");
          if ($row = mysqli_fetch_array($result)){
            echo "<p><span class='grid-desc'>Cantidad: ".$row["cantidad"]."</span></p>";
            echo "<p><span class='grid-desc'>Tallas: ".$row["talla"]."</span></p>";
          } else {
          echo "¡ No se ha encontrado ningún registro !";
          }
          ?>
                        <div class="content_price">

                <span class="price product-price product-price-new">
                  $32.00                  </span>

                  <span class="old-price product-price">
                    $40.00
                  </span>

                                        <span class="price-percent-reduction">-20%</span>



                            </div>
                                    <div class="hook-reviews">
              <div class="comments_note" itemprop="aggregateRating">
    <div class="star_content clearfix">
                      <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star"></div>
                  <meta itemprop="worstRating" content = "0" />
    <meta itemprop="ratingValue" content = "4" />
    <meta itemprop="bestRating" content = "5" />
    </div>
    <span class="nb-comments"><span itemprop="reviewCount">1</span> Comentario(s)</span>
    </div><br>
    <?php
    echo "<a href='desc1log.php'> <p><button class='btn btn-default'><span>Cómpralo ya!</span></button></p></a>";
    ?>
            </div>
                                  </div>


      </div><!-- .product-container> -->
    </li>



                      <li class=" ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-tablet-line first-item-of-mobile-line">
      <div class="product-container">
        <div class="left-block">
          <div class="product-image-container">
            <a  href="desc2log.php" title="Casual Hollow Lace" itemprop="url">
              <img class="replace-2x img-responsive" src="themes/theme1362/img/index/cata/c3.jpg" alt="Casual Hollow Lace" title="Casual Hollow Lace" itemprop="image" />

            </a>

                                          <a class="sale-box" href="desc2log.php">
                <span class="sale-label">&iexcl;Oferta!</span>
              </a>
                        </div>

        </div>
        <div class="right-block">
          <h5 itemprop="name">
                          <a class="product-name" href="desc2log.php" title="Casual Hollow Lace" itemprop="url" >
              <span class="list-name">Casual Hollow Lace</span>
              <span class="grid-name">Casual Hollow Lace</span>
            </a>
          </h5>
                      <p class="product-desc" itemprop="description">
            <span class="list-desc">La prenda más popular para estar a la moda.</span>
            <span class="grid-desc">La prenda más popular para...</span>
          </p>
          <?php
          include("conexion.php");
          $result = mysqli_query($con, "SELECT cantidad,talla FROM tbl_inventarioProductos WHERE nombre='Casual hollow lace'");
          if ($row = mysqli_fetch_array($result)){
            echo "<p><span class='grid-desc'>Cantidad: ".$row["cantidad"]."</span></p>";
            echo "<p><span class='grid-desc'>Tallas: ".$row["talla"]."</span></p>";
          } else {
          echo "¡ No se ha encontrado ningún registro !";
          }
          ?>
                        <div class="content_price">

                <span class="price product-price product-price-new">
                  $28.00                  </span>

                  <span class="old-price product-price">
                    $35.00
                  </span>

                                        <span class="price-percent-reduction">-20%</span>



                            </div>
                                    <div class="hook-reviews">
              <div class="comments_note" itemprop="aggregateRating">
    <div class="star_content clearfix">
                      <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star"></div>
                              <div class="star"></div>
                  <meta itemprop="worstRating" content = "0" />
    <meta itemprop="ratingValue" content = "3" />
    <meta itemprop="bestRating" content = "5" />
    </div>
    <span class="nb-comments"><span itemprop="reviewCount">1</span> Comentario(s)</span>
    </div><br>
    <?php
    echo "<a href='desc2log.php'> <p><button class='btn btn-default'><span>Cómpralo ya!</span></button></p></a>";
    ?>
            </div>


                                  </div>


      </div><!-- .product-container> -->
    </li>



                      <li class=" ajax_block_product col-xs-12 col-sm-4 col-md-3 last-in-line first-item-of-tablet-line last-item-of-mobile-line">
      <div class="product-container">
        <div class="left-block">
          <div class="product-image-container">
            <a  href="desc3log.php" title="Loose Floral" itemprop="url">
              <img class="replace-2x img-responsive" src="themes/theme1362/img/index/cata/c4.jpg" alt="Loose Floral" title="Loose Floral" itemprop="image" />

            </a>

                                          <a class="sale-box" href="desc3log.php">
                <span class="sale-label">&iexcl;Oferta!</span>
              </a>
                        </div>

        </div>
        <div class="right-block">
          <h5 itemprop="name">
                          <a class="product-name" href="desc3log.php" title="Loose Floral" itemprop="url" >
              <span class="list-name">Loose Floral</span>
              <span class="grid-name">Loose Floral</span>
            </a>
          </h5>
                      <p class="product-desc" itemprop="description">
            <span class="list-desc">Lo nuevo que Ricardo Seco tiene solo para ti.</span>
            <span class="grid-desc">Lo nuevo que Ricardo Seco...</span>
          </p>
          <?php
          include("conexion.php");
          $result = mysqli_query($con, "SELECT cantidad,talla FROM tbl_inventarioProductos WHERE nombre='Loose floral'");
          if ($row = mysqli_fetch_array($result)){
            echo "<p><span class='grid-desc'>Cantidad: ".$row["cantidad"]."</span></p>";
            echo "<p><span class='grid-desc'>Tallas: ".$row["talla"]."</span></p>";
          } else {
          echo "¡ No se ha encontrado ningún registro !";
          }
          ?>
                        <div class="content_price">

                <span class="price product-price product-price-new">
                  $16.00                  </span>

                  <span class="old-price product-price">
                    $20.00
                  </span>

                                        <span class="price-percent-reduction">-20%</span>



                            </div>
                                    <div class="hook-reviews">
              <div class="comments_note" itemprop="aggregateRating">
    <div class="star_content clearfix">
                      <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                  <meta itemprop="worstRating" content = "0" />
    <meta itemprop="ratingValue" content = "5" />
    <meta itemprop="bestRating" content = "5" />
    </div>
    <span class="nb-comments"><span itemprop="reviewCount">1</span> Comentario(s)</span>
    </div><br>
    <?php
    echo "<a href='desc3log.php'> <p><button class='btn btn-default'><span>Cómpralo ya!</span></button></p></a>";
    ?>
            </div>


                                  </div>


      </div><!-- .product-container> -->
    </li>



                      <li class=" ajax_block_product col-xs-12 col-sm-4 col-md-3 first-in-line last-line first-item-of-mobile-line">
      <div class="product-container">
        <div class="left-block">
          <div class="product-image-container">
            <a  href="desc4log.php" title="Blusa azul con cenefa" itemprop="url">
              <img class="replace-2x img-responsive" src="themes/theme1362/img/index/cata/c5.jpg" alt="Blusa azul con cenefa" title="Blusa azul con cenefa" itemprop="image" />

            </a>

                                          <a class="sale-box" href="desc4log.php">
                <span class="sale-label">&iexcl;Oferta!</span>
              </a>
                        </div>

        </div>
        <div class="right-block">
          <h5 itemprop="name">
                          <a class="product-name" href="desc4log.php" title="Blusa azul con cenefa" itemprop="url" >
              <span class="list-name">Blusa azul con cenefa</span>
              <span class="grid-name">Blusa azul con cenefa</span>
            </a>
          </h5>
                      <p class="product-desc" itemprop="description">
            <span class="list-desc">Luce elegante con esta blusa.</span>
            <span class="grid-desc">Luce elegante con...</span>
          </p>
          <?php
          include("conexion.php");
          $result = mysqli_query($con, "SELECT cantidad,talla FROM tbl_inventarioProductos WHERE nombre='Blusa azul con cenefa'");
          if ($row = mysqli_fetch_array($result)){
            echo "<p><span class='grid-desc'>Cantidad: ".$row["cantidad"]."</span></p>";
            echo "<p><span class='grid-desc'>Tallas: ".$row["talla"]."</span></p>";
          } else {
          echo "¡ No se ha encontrado ningún registro !";
          }
          ?>
                        <div class="content_price">

                <span class="price product-price">
                  $27.00                  </span>



                            </div>
                                    <div class="hook-reviews">
              <div class="comments_note" itemprop="aggregateRating">
    <div class="star_content clearfix">
                      <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star"></div>
                  <meta itemprop="worstRating" content = "0" />
    <meta itemprop="ratingValue" content = "4" />
    <meta itemprop="bestRating" content = "5" />
    </div>
    <span class="nb-comments"><span itemprop="reviewCount">1</span> Comentario(s)</span>
    </div><br>
    <?php
    echo "<a href='desc4log.php'> <p><button class='btn btn-default'><span>Cómpralo ya!</span></button></p></a>";
    ?>
            </div>


                                  </div>


      </div><!-- .product-container> -->
    </li>



                      <li class=" ajax_block_product col-xs-12 col-sm-4 col-md-3 last-line last-item-of-tablet-line last-item-of-mobile-line">
      <div class="product-container">
        <div class="left-block">
          <div class="product-image-container">
            <a  href="desc5log.php" title="Lady Flor" itemprop="url">
              <img class="replace-2x img-responsive" src="themes/theme1362/img/index/cata/c6.jpg" alt="Lady Flor" title="Lady Flor" itemprop="image" />

            </a>

                                          <a class="sale-box" href="desc5log.php">
                <span class="sale-label">&iexcl;Oferta!</span>
              </a>
                        </div>

        </div>
        <div class="right-block">
          <h5 itemprop="name">
                          <a class="product-name" href="desc5log.php" title="Lady Flor" itemprop="url" >
              <span class="list-name">Lady Flor</span>
              <span class="grid-name">Lady Flor</span>
            </a>
          </h5>
                      <p class="product-desc" itemprop="description">
            <span class="list-desc">Esta blusa te hará sentir más fashion.</span>
            <span class="grid-desc">Esta blusa te hará...</span>
          </p>
          <?php
          include("conexion.php");
          $result = mysqli_query($con, "SELECT cantidad,talla FROM tbl_inventarioProductos WHERE nombre='Lady flor'");
          if ($row = mysqli_fetch_array($result)){
            echo "<p><span class='grid-desc'>Cantidad: ".$row["cantidad"]."</span></p>";
            echo "<p><span class='grid-desc'>Tallas: ".$row["talla"]."</span></p>";
          } else {
          echo "¡ No se ha encontrado ningún registro !";
          }
          ?>
                        <div class="content_price">

                <span class="price product-price">
                  $40.00                  </span>



                            </div>
                                    <div class="hook-reviews">
              <div class="comments_note" itemprop="aggregateRating">
    <div class="star_content clearfix">
                      <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star"></div>
                  <meta itemprop="worstRating" content = "0" />
    <meta itemprop="ratingValue" content = "4" />
    <meta itemprop="bestRating" content = "5" />
    </div>
    <span class="nb-comments"><span itemprop="reviewCount">1</span> Comentario(s)</span>
    </div><br>
    <?php
    echo "<a href='desc5log.php'> <p><button class='btn btn-default'><span>Cómpralo ya!</span></button></p></a>";
    ?>
            </div>
                                  </div>


      </div><!-- .product-container> -->
    </li>



                      <li class=" ajax_block_product col-xs-12 col-sm-4 col-md-3 last-line first-item-of-tablet-line first-item-of-mobile-line last-mobile-line">
      <div class="product-container">
        <div class="left-block">
          <div class="product-image-container">
            <a  href="desc6.hmtl" title="Bleu" itemprop="url">
              <img class="replace-2x img-responsive" src="themes/theme1362/img/index/cata/c7.jpg" alt="Bleu" title="Bleu" itemprop="image" />

            </a>

                                          <a class="sale-box" href="desc6log.php">
                <span class="sale-label">&iexcl;Oferta!</span>
              </a>
                        </div>

        </div>
        <div class="right-block">
          <h5 itemprop="name">
                          <a class="product-name" href="desc6log.php" title="Bleu" itemprop="url" >
              <span class="list-name">Bleu</span>
              <span class="grid-name">Bleu</span>
            </a>
          </h5>
                      <p class="product-desc" itemprop="description">
            <span class="list-desc">Luce esta blusa para estar primaveral.</span>
            <span class="grid-desc">Luce esta blusa para...</span>
          </p>
          <?php
          include("conexion.php");
          $result = mysqli_query($con, "SELECT cantidad,talla FROM tbl_inventarioProductos WHERE nombre='Bleu'");
          if ($row = mysqli_fetch_array($result)){
            echo "<p><span class='grid-desc'>Cantidad: ".$row["cantidad"]."</span></p>";
            echo "<p><span class='grid-desc'>Tallas: ".$row["talla"]."</span></p>";
          } else {
          echo "¡ No se ha encontrado ningún registro !";
          }
          ?>
                        <div class="content_price">

                <span class="price product-price">
                  $34.00                  </span>



                            </div>
                                    <div class="hook-reviews">
              <div class="comments_note" itemprop="aggregateRating">
    <div class="star_content clearfix">
                      <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star"></div>
                              <div class="star"></div>
                  <meta itemprop="worstRating" content = "0" />
    <meta itemprop="ratingValue" content = "3" />
    <meta itemprop="bestRating" content = "5" />
    </div>
    <span class="nb-comments"><span itemprop="reviewCount">1</span> Comentario(s)</span>
    </div><br>
    <?php
    echo "<a href='desc6log.php'> <p><button class='btn btn-default'><span>Cómpralo ya!</span></button></p></a>";
    ?>
            </div>


                                  </div>


      </div><!-- .product-container> -->
    </li>



                      <li class=" ajax_block_product col-xs-12 col-sm-4 col-md-3 last-in-line last-line last-item-of-mobile-line last-mobile-line">
      <div class="product-container">
        <div class="left-block">
          <div class="product-image-container">
            <a  href="desc7log.php" title="Canesú Jean" itemprop="url">
              <img class="replace-2x img-responsive" src="themes/theme1362/img/index/cata/c8.jpg" alt="Canesú Jean" title="Canesú Jean" itemprop="image" />

            </a>

                                          <a class="sale-box" href="desc7log.php">
                <span class="sale-label">&iexcl;Oferta!</span>
              </a>
                        </div>

        </div>
        <div class="right-block">
          <h5 itemprop="name">
                          <a class="product-name" href="desc7log.php" title="Canesú Jean" itemprop="url" >
              <span class="list-name">Canesú Jean</span>
              <span class="grid-name">Canesú Jean</span>
            </a>
          </h5>
                      <p class="product-desc" itemprop="description">
            <span class="list-desc">Tan única como coqueta.</span>
            <span class="grid-desc">Tan única como...</span>
          </p>
          <?php
          include("conexion.php");
          $result = mysqli_query($con, "SELECT cantidad,talla FROM tbl_inventarioProductos WHERE nombre='Canesu jean'");
          if ($row = mysqli_fetch_array($result)){
            echo "<p><span class='grid-desc'>Cantidad: ".$row["cantidad"]."</span></p>";
            echo "<p><span class='grid-desc'>Tallas: ".$row["talla"]."</span></p>";
          } else {
          echo "¡ No se ha encontrado ningún registro !";
          }
          ?>
                        <div class="content_price">

                <span class="price product-price">
                  $30.00                  </span>



                            </div>
                                    <div class="hook-reviews">
              <div class="comments_note" itemprop="aggregateRating">
    <div class="star_content clearfix">
                      <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star star_on"></div>
                              <div class="star"></div>
                  <meta itemprop="worstRating" content = "0" />
    <meta itemprop="ratingValue" content = "4" />
    <meta itemprop="bestRating" content = "5" />
    </div>
    <span class="nb-comments"><span itemprop="reviewCount">1</span> Comentario(s)</span>
    </div><br>
    <?php
    echo "<a href='desc7log.php'> <p><button class='btn btn-default'><span>Cómpralo ya!</span></button></p></a>";
    ?>
            </div>
                                  </div>


      </div><!-- .product-container> -->
    </li>
      </ul>

</div>


              </div><!-- #center_column -->
                        </div><!--.large-left-->
          </div><!--.row-->
                    </div><!-- .row -->
        </div><!-- #columns -->

<div class="wrapper it_WSZEAMICCDQE ">
<div class="row it_XABPLTZITKHO full-width">
<div class="it_MYDZOWWEWFDG col-xs-12    container">
<div class="row it_YELMHJGLDMBI ">
<div class="it_IZEJKBTRTUFS col-xs-12    second_home">

                <script type="text/javascript">
                    $(document).ready(function(){
                        setNbCatItems();
                        tmCategoryCarousel1_27 = $('#block-category-1_27 > ul').bxSlider({
                            responsive:true,
                            useCSS: false,
                            minSlides: tm_cps_carousel_nb_new,
                            maxSlides: tm_cps_carousel_nb_new,
                            slideWidth: tm_cps_carousel_slide_width,
                            slideMargin: tm_cps_carousel_slide_margin,
                            infiniteLoop: tm_cps_carousel_loop,
                            hideControlOnEnd: tm_cps_carousel_hide_control,
                            randomStart: tm_cps_carousel_random,
                            moveSlides: tm_cps_carousel_item_scroll,
                            pager: tm_cps_carousel_pager,
                            autoHover: tm_cps_carousel_auto_hover,
                            auto: tm_cps_carousel_auto,
                            speed: tm_cps_carousel_speed,
                            pause: tm_cps_carousel_auto_pause,
                            controls: tm_cps_carousel_control,
                            autoControls: tm_cps_carousel_auto_control,
                            startText:'',
                            stopText:'',
                        });

                        var tm_cps_doit;
                        $(window).resize(function () {
                            clearTimeout(tm_cps_doit);
                            tm_cps_doit = setTimeout(function() {
                                resizedwtm_cps1_27();
                            }, 201);
                        });
                    });
                    function resizedwtm_cps1_27(){
                        setNbCatItems();
                        tmCategoryCarousel1_27.reloadSlider({
                            responsive:true,
                            useCSS: false,
                            minSlides: tm_cps_carousel_nb_new,
                            maxSlides: tm_cps_carousel_nb_new,
                            slideWidth: tm_cps_carousel_slide_width,
                            slideMargin: tm_cps_carousel_slide_margin,
                            infiniteLoop: tm_cps_carousel_loop,
                            hideControlOnEnd: tm_cps_carousel_hide_control,
                            randomStart: tm_cps_carousel_random,
                            moveSlides: tm_cps_carousel_item_scroll,
                            pager: tm_cps_carousel_pager,
                            autoHover: tm_cps_carousel_auto_hover,
                            auto: tm_cps_carousel_auto,
                            speed: tm_cps_carousel_speed,
                            pause: tm_cps_carousel_auto_pause,
                            controls: tm_cps_carousel_control,
                            autoControls: tm_cps_carousel_auto_control,
                            startText:'',
                            stopText:'',
                        });
                }

                function setNbCatItems()
                {
                    if ($('.category-block').width() < 400)
                        tm_cps_carousel_nb_new = 1;
                    if ($('.category-block').width() >= 400)
                        tm_cps_carousel_nb_new = 2;
                    if ($('.category-block').width() >= 560)
                        tm_cps_carousel_nb_new = 3;
                    if($('.category-block').width() > 840)
                        tm_cps_carousel_nb_new = tm_cps_carousel_nb;
                    }
                </script>
                <div  class="container">
                                   <div class="row">
                           <div >
                             <div class="row">
                               <div class="center_column col-xs-12 col-sm-12">

                       <ul id="home-page-tabs" >
                       <li>
                       <a href="#homefeatured" ><span></span>-Publicidad-</a>
                       </li>
                       </ul>
                  <!-- Products list -->
                  <div class="video-responsive">
        <iframe name="videog" width="100 " height="100" src="https://www.youtube.com/embed/fRSz3vJnmR8" frameborder="1" allowfullscreen></iframe>
        <div class="video-responsive" style="float:right;overflow:auto;width:100px;height:400px;position: relative;">
        <div class="mini"><a href="https://www.youtube.com/embed/FJ_zrqiO0_8" target="videog"><img title="Descripción video 2" alt="Descrición video 2" src="videos/r1.png" width="90px" /><td style="text-align: center;">
        Winter 2018
        </td></a></div>

        <div class="mini"><a href="https://www.youtube.com/embed/m_-y_EwbNW0" target="videog"><img title="Descripción video 3" alt="Descrición video 3" src="videos/r2.png" width="90px" /><td style="text-align: center;">
        Diseños
        </td></a></div>

        <div class="mini"><a href="https://www.youtube.com/embed/H95slb_hdmI" target="videog"><img title="Descripción video 4" alt="Descrición video 4" src="videos/r3.png" width="90px" /><td style="text-align: center;">
        Intro 2
        </td></a></div>

        <div class="mini"><a href="https://www.youtube.com/embed/B23AtEVUlmE" target="videog"><img title="Descripción video 5" alt="Descrición video 5" src="videos/r4.png" width="90px" /><td style="text-align: center;">
        Intro 3
        </td></a></div>

        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
		    </div></div></div></div></div>
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
                                                <a href="terminosloglog.php" title="Nuestras tiendas">
                                                  Términos y condiciones
                                                </a>
                                              </li>
                                                          <li class="item">
                                                <a href="Avisologlog.php" title="Términos y condiciones">
                                                  Aviso de privacidad
                                                </a>
                                              </li>
                                          </ul>

                                        </section>
                                            <div class="bottom-footer">
                                            <div class="container">
                                              <a class="_blank" href="index_log.php"> © 2017 - R.S. Textil </a>
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
                                              <a href="Quien y queloglog.php" title="Mis compras" rel="nofollow">¿Quiénes somos?<br>¿Qué hacemos?</a>
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
                                      </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/nslog.php?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager --></html>
