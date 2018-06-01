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
              <link rel="stylesheet" href="themes/theme1362/css/authentication.css" media="all" />

              <script src="calendar.js"></script>
    <script  src="calendar-setup.js"></script>
    <script  src="calendar-en.js"></script>

<script type="text/javascript">
var CUSTOMIZE_TEXTFIELD = 1;
var FancyboxI18nClose = 'Cerrar';
var FancyboxI18nNext = 'Siguiente';
var FancyboxI18nPrev = 'Previo';
var added_to_wishlist = 'El producto se ha añadido con éxito a su lista de deseos.';
var ajax_allowed = true;
var ajaxsearch = true;
var blocking_popup = '1';
var comparator_max_item = 2;
var comparedProductsIds = [];
var contentOnly = false;
var countries = {"21":{"id_country":"21","id_lang":"4","name":"United States","id_zone":"2","id_currency":"0","iso_code":"US","call_prefix":"1","active":"1","contains_states":"1","need_identification_number":"0","need_zip_code":"1","zip_code_format":"NNNNN","display_tax_label":"0","country":"United States","zone":"North America","states":[{"id_state":"1","id_country":"21","id_zone":"2","name":"Alabama","iso_code":"AL","tax_behavior":"0","active":"1"},{"id_state":"2","id_country":"21","id_zone":"2","name":"Alaska","iso_code":"AK","tax_behavior":"0","active":"1"},{"id_state":"3","id_country":"21","id_zone":"2","name":"Arizona","iso_code":"AZ","tax_behavior":"0","active":"1"},{"id_state":"4","id_country":"21","id_zone":"2","name":"Arkansas","iso_code":"AR","tax_behavior":"0","active":"1"},{"id_state":"5","id_country":"21","id_zone":"2","name":"California","iso_code":"CA","tax_behavior":"0","active":"1"},{"id_state":"6","id_country":"21","id_zone":"2","name":"Colorado","iso_code":"CO","tax_behavior":"0","active":"1"},{"id_state":"7","id_country":"21","id_zone":"2","name":"Connecticut","iso_code":"CT","tax_behavior":"0","active":"1"},{"id_state":"8","id_country":"21","id_zone":"2","name":"Delaware","iso_code":"DE","tax_behavior":"0","active":"1"},{"id_state":"53","id_country":"21","id_zone":"2","name":"District of Columbia","iso_code":"DC","tax_behavior":"0","active":"1"},{"id_state":"9","id_country":"21","id_zone":"2","name":"Florida","iso_code":"FL","tax_behavior":"0","active":"1"},{"id_state":"10","id_country":"21","id_zone":"2","name":"Georgia","iso_code":"GA","tax_behavior":"0","active":"1"},{"id_state":"11","id_country":"21","id_zone":"2","name":"Hawaii","iso_code":"HI","tax_behavior":"0","active":"1"},{"id_state":"12","id_country":"21","id_zone":"2","name":"Idaho","iso_code":"ID","tax_behavior":"0","active":"1"},{"id_state":"13","id_country":"21","id_zone":"2","name":"Illinois","iso_code":"IL","tax_behavior":"0","active":"1"},{"id_state":"14","id_country":"21","id_zone":"2","name":"Indiana","iso_code":"IN","tax_behavior":"0","active":"1"},{"id_state":"15","id_country":"21","id_zone":"2","name":"Iowa","iso_code":"IA","tax_behavior":"0","active":"1"},{"id_state":"16","id_country":"21","id_zone":"2","name":"Kansas","iso_code":"KS","tax_behavior":"0","active":"1"},{"id_state":"17","id_country":"21","id_zone":"2","name":"Kentucky","iso_code":"KY","tax_behavior":"0","active":"1"},{"id_state":"18","id_country":"21","id_zone":"2","name":"Louisiana","iso_code":"LA","tax_behavior":"0","active":"1"},{"id_state":"19","id_country":"21","id_zone":"2","name":"Maine","iso_code":"ME","tax_behavior":"0","active":"1"},{"id_state":"20","id_country":"21","id_zone":"2","name":"Maryland","iso_code":"MD","tax_behavior":"0","active":"1"},{"id_state":"21","id_country":"21","id_zone":"2","name":"Massachusetts","iso_code":"MA","tax_behavior":"0","active":"1"},{"id_state":"22","id_country":"21","id_zone":"2","name":"Michigan","iso_code":"MI","tax_behavior":"0","active":"1"},{"id_state":"23","id_country":"21","id_zone":"2","name":"Minnesota","iso_code":"MN","tax_behavior":"0","active":"1"},{"id_state":"24","id_country":"21","id_zone":"2","name":"Mississippi","iso_code":"MS","tax_behavior":"0","active":"1"},{"id_state":"25","id_country":"21","id_zone":"2","name":"Missouri","iso_code":"MO","tax_behavior":"0","active":"1"},{"id_state":"26","id_country":"21","id_zone":"2","name":"Montana","iso_code":"MT","tax_behavior":"0","active":"1"},{"id_state":"27","id_country":"21","id_zone":"2","name":"Nebraska","iso_code":"NE","tax_behavior":"0","active":"1"},{"id_state":"28","id_country":"21","id_zone":"2","name":"Nevada","iso_code":"NV","tax_behavior":"0","active":"1"},{"id_state":"29","id_country":"21","id_zone":"2","name":"New Hampshire","iso_code":"NH","tax_behavior":"0","active":"1"},{"id_state":"30","id_country":"21","id_zone":"2","name":"New Jersey","iso_code":"NJ","tax_behavior":"0","active":"1"},{"id_state":"31","id_country":"21","id_zone":"2","name":"New Mexico","iso_code":"NM","tax_behavior":"0","active":"1"},{"id_state":"32","id_country":"21","id_zone":"2","name":"New York","iso_code":"NY","tax_behavior":"0","active":"1"},{"id_state":"33","id_country":"21","id_zone":"2","name":"North Carolina","iso_code":"NC","tax_behavior":"0","active":"1"},{"id_state":"34","id_country":"21","id_zone":"2","name":"North Dakota","iso_code":"ND","tax_behavior":"0","active":"1"},{"id_state":"35","id_country":"21","id_zone":"2","name":"Ohio","iso_code":"OH","tax_behavior":"0","active":"1"},{"id_state":"36","id_country":"21","id_zone":"2","name":"Oklahoma","iso_code":"OK","tax_behavior":"0","active":"1"},{"id_state":"37","id_country":"21","id_zone":"2","name":"Oregon","iso_code":"OR","tax_behavior":"0","active":"1"},{"id_state":"38","id_country":"21","id_zone":"2","name":"Pennsylvania","iso_code":"PA","tax_behavior":"0","active":"1"},{"id_state":"51","id_country":"21","id_zone":"2","name":"Puerto Rico","iso_code":"PR","tax_behavior":"0","active":"1"},{"id_state":"39","id_country":"21","id_zone":"2","name":"Rhode Island","iso_code":"RI","tax_behavior":"0","active":"1"},{"id_state":"40","id_country":"21","id_zone":"2","name":"South Carolina","iso_code":"SC","tax_behavior":"0","active":"1"},{"id_state":"41","id_country":"21","id_zone":"2","name":"South Dakota","iso_code":"SD","tax_behavior":"0","active":"1"},{"id_state":"42","id_country":"21","id_zone":"2","name":"Tennessee","iso_code":"TN","tax_behavior":"0","active":"1"},{"id_state":"43","id_country":"21","id_zone":"2","name":"Texas","iso_code":"TX","tax_behavior":"0","active":"1"},{"id_state":"52","id_country":"21","id_zone":"2","name":"US Virgin Islands","iso_code":"VI","tax_behavior":"0","active":"1"},{"id_state":"44","id_country":"21","id_zone":"2","name":"Utah","iso_code":"UT","tax_behavior":"0","active":"1"},{"id_state":"45","id_country":"21","id_zone":"2","name":"Vermont","iso_code":"VT","tax_behavior":"0","active":"1"},{"id_state":"46","id_country":"21","id_zone":"2","name":"Virginia","iso_code":"VA","tax_behavior":"0","active":"1"},{"id_state":"47","id_country":"21","id_zone":"2","name":"Washington","iso_code":"WA","tax_behavior":"0","active":"1"},{"id_state":"48","id_country":"21","id_zone":"2","name":"West Virginia","iso_code":"WV","tax_behavior":"0","active":"1"},{"id_state":"49","id_country":"21","id_zone":"2","name":"Wisconsin","iso_code":"WI","tax_behavior":"0","active":"1"},{"id_state":"50","id_country":"21","id_zone":"2","name":"Wyoming","iso_code":"WY","tax_behavior":"0","active":"1"}]}};
var currency = {"id":1,"name":"Dollar","iso_code":"USD","iso_code_num":"840","sign":"$","blank":"0","conversion_rate":"1.000000","deleted":"0","format":"1","decimals":"1","active":"1","prefix":"$ ","suffix":"","id_shop_list":null,"force_id":false};
var currencyBlank = 0;
var currencyFormat = 1;
var currencyRate = 1;
var currencySign = '$';
var customizationIdMessage = 'Personalización n°';
var delete_txt = 'Eliminar';
var displayList = false;
var email_create = false;
var freeProductTranslation = '¡Gratis!';
var freeShippingTranslation = 'Envío gratuito!';
var generated_date = 1511970294;
var hasDeliveryAddress = false;
var highDPI = false;
var idSelectedCountry = false;
var idSelectedCountryInvoice = false;
var idSelectedState = false;
var idSelectedStateInvoice = false;
var id_lang = 4;
var img_dir = 'https://ld-prestashop.template-help.com/prestashop_60010/themes/theme1362/img/';
var instantsearch = true;
var isGuest = 0;
var isLogged = 0;
var isMobile = false;
var is_logged = false;
var l_code = 'es_ES';
var loggin_required = 'Debe identificarse para administrar su lista de deseos.';
var max_item = 'No puede comparar más de 2 productos';
var min_item = 'Debe elegir al menos un producto';
var module_url = 'https://ld-prestashop.template-help.com/prestashop_60010/index.php?fc=module&amp;module=tmnewsletter&amp;controller=default&amp;id_lang=4';
var mywishlist_url = 'https://ld-prestashop.template-help.com/prestashop_60010/index.php?fc=module&module=blockwishlist&controller=mywishlist&id_lang=4';
var nbItemsPerLine = 3;
var nbItemsPerLineMobile = 2;
var nbItemsPerLineTablet = 2;
var page_name = 'authentication';
var placeholder_blocknewsletter = 'Introduzca su dirección de correo electrónico';
var popup_status = true;
var priceDisplayMethod = 1;
var priceDisplayPrecision = 2;
var quickView = true;
var removingLinkText = 'eliminar este producto de mi carrito';
var roundMode = 2;
var search_url = 'https://ld-prestashop.template-help.com/prestashop_60010/index.php?controller=search';
var search_url_local = 'https://ld-prestashop.template-help.com/prestashop_60010/index.php?fc=module&module=tmsearch&controller=search&id_lang=4';
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


              <script src="js/combo.js"></script>
              <script src="js/reg.js"></script>
              <script src="js/jquery.js"></script>
              <script src="js/emailvalidar.js"></script>
              <script src="js/limiteinput.js"></script>
              <script src="js/split.js"></script>
              <script src="js/pasar.js"></script>
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
              <script src="themes/theme1362/js/authentication.js"></script>
              <script src="themes/theme1362/js/tools/statesManagement.js"></script>
              <script src="themes/theme1362/js/tools/vatManagement.js"></script>
              <script src="js/jquery/plugins/jquery.typewatch.js"></script>


        <script>
        $(document).ready(function(){
            var elem = $('.parallax-box-1');
            if (elem.length) {
                $('body').append('        <div class=\"rd-parallax rd-parallax-1\">\r\n                                                                                                                            <div class=\"rd-parallax-layer\" data-offset=\"0\" data-speed=\"0.3\" data-type=\"media\" data-fade=\"false\" data-url=\"/prestashop_60010/img/cms/parallax-home-img1_1.jpg\" data-direction=\"normal\"><\/div>\r\n                                                <div class=\"rd-parallax-layer\" data-offset=\"0\" data-speed=\"0\" data-type=\"html\" data-fade=\"true\" data-direction=\"normal\"><div class=\"parallax-main-layout\"><\/div><\/div>\r\n        <\/div>\r\n    ');
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
  <body id="authentication" class="authentication show-left-column hide-right-column lang_es  two-columns">

    <div id="page">
    <div id="preloader">
      <div class="cssload-dots"></div>
    </div>

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
      <a class="home" href="index_.php" title="Volver a Inicio">
        <i class="fa fa-home"></i>
      </a>
    </li>
                  <li class="last">  Autenticaci&oacute;n</li>
            </ul>
</div>

<!-- /Breadcrumb -->
                    <div class="row">
            <div class="large-left col-sm-12">
              <div class="row">
                <div id="center_column" class="center_column col-xs-12 col-sm-9">


<h1 class="page-heading">Datos de tu perfil</h1>

  <div class="row">
    <div class="col-sm-5">

        <form action="update.php" method="post" class="box" name="formulario">

<label for="email">Correo electrónico:</label><br>
<?php
    echo "<input type='text' name='email' value='".$_SESSION["u_usuario"]."' >";
?>

<br>
<h3>Dirección</h3>
<label for="estado">Estado:</label><br>
<?php
  echo "<input type='text' name='estado' value='".$_SESSION['estado']."' readonly>";
 ?>
 <br><br>

    <!--label for="municipio">Municipio:</label><br> <input type="text" name="municipio" maxlength="32" id="municipio" placeholder="Escribe tu municipio" disabled><br><br-->
    <label for="delegacion">Nueva delegación:</label><br><select name="delegacion" id='delegacion' >
      <?php echo "<option value='".$_SESSION['delegacion']."'>".$_SESSION['delegacion']."</option>" ?>
          <option value="Álvaro Obregón">Álvaro Obregón</option>
          <option value="Azcapotzalco">Azcapotzalco</option>
          <option value="Benito Juárez">Benito Juárez</option>
          <option value="Coyoacán">Coyoacán</option>
          <option value="Cuajimalpa">Cuajimalpa</option>
          <option value="Cuauhtémoc">Cuauhtémoc</option>
          <option value="Gustavo A. Madero">Gustavo A. Madero</option>
          <option value="Iztacalco">Iztacalco</option>
          <option value="Iztapalapa">Iztapalapa</option>
          <option value="Magdalena Contreras">Magdalena Contreras</option>
          <option value="Miguel Hidalgo">Miguel Hidalgo</option>
          <option value="Milpa Alta">Milpa Alta</option>
          <option value="Tláhuac">Tláhuac</option>
          <option value="Tlalpan">Tlalpan</option>
          <option value="Venustiano Carranza">Venustiano Carranza</option>
          <option value="Xochimilco">Xochimilco</option>
      </select><br><br>

<label for="colonia">Colonia:</label><br>
<?php echo "<input type='text' name='colonia' maxlength='32' id='colonia' value='".$_SESSION['colonia']."'>"?><br><br>

<label for="calle">Nueva calle:</label><br>
<?php echo "<input type='text' name='calle' maxlength='32' id='calle' value='".$_SESSION['calle']."'>"?><br><br>

<label for="numex">Nuevo número exterior:</label><br>
<?php echo "<input type='text' name='numex' size='20' maxlength='5' id='numex' value='".$_SESSION['numex']."' onkeypress='return valida(event)'>"?><br><br>


<label for="numin">Nuevo número interior:</label><br>
<?php echo "<input type='text' name='numin' maxlength='5' id='numin' value='".$_SESSION['numin']."' onkeypress='return valida(event)'>"?><br><br>


<label for="postal">Nuevo código postal:</label><br>
<?php echo "<input type='text' name='postal' maxlength='5' id='postal' value='".$_SESSION['postal']."' onkeypress='return valida(event)'>"?><br><br>

<label for="password">Password antiguo:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label for="password">Password nuevo:</label><br>
<?php echo "<input type='password' name='password' maxlength='8' dir='password' value='".$_SESSION['password']."'>"?>
<?php echo "<input type='password' name='passwordnew' maxlength='8' dir='password' value='".$_SESSION['password']."'>"?>
<br><br>

 <!--Nombre Usuario-->
                          <input type="hidden" class="hidden" name="back" value="my-account" />
                        <button type="submit" id="SubmitModificar" name="SubmitModificar" class="btn btn-default btn-md">
              <span>
                <i class="fa left"></i>
                Actualizar
              </span>
            </button>

      </form>
    </div>
  </div>



              </div><!-- #center_column -->
                          <div id="left_column" class="column col-xs-12 col-sm-3">  <!-- Block CMS module -->
      <section id="informations_block_left_1" class="block informations_block_left">
      <h4 class="title_block">
        <a href="#" title="Informacion">
          Información        </a>
      </h4>
      <div class="block_content list-block">
        <ul>
                                              <li>
                <a href="terminos.php" title="Terminos y condiciones">
                  Términos y condiciones
                </a>
              </li>
                                                <li>
                <a href="Aviso.php" title="Aviso de privacidad">
                  Aviso de privacidad
                </a>
              </li>
                                            <li>
              <a href="Quien y que.php" title="Quienes somos">
                ¿Quiénes somos?<br>
                ¿Qué hacemos?
              </a>
            </li>
                  </ul>
      </div>
    </section>
    <!-- /Block CMS module -->
<!-- /Block suppliers module -->
</div>
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

                      <!-- end olark code --></div></div></div>
                                          </div>
                                                  </div>
                                  </div><!-- #page -->


                      <script type="text/javascript" src="themes/theme1362/js/ga.js"></script>
                      </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.php?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
                      </html>
