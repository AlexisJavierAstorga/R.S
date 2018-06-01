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


          <meta name="description" content="Atrévete a lucirlos." />
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
              <link rel="stylesheet" href="themes/theme1362/css/product.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/print.css" media="print" />
              <link rel="stylesheet" href="js/jquery/plugins/jqzoom/jquery.jqzoom.css" media="all" />
              <link rel="stylesheet" href="themes/theme1362/css/modules/socialsharing/css/socialsharing.css" media="all" />
              <link rel="stylesheet" href="modules/sendtoafriend/sendtoafriend.css" media="all" />

<script type="text/javascript">
var CUSTOMIZE_TEXTFIELD = 1;
var FancyboxI18nClose = 'Close';
var FancyboxI18nNext = 'Next';
var FancyboxI18nPrev = 'Previous';
var PS_CATALOG_MODE = false;
var added_to_wishlist = 'El producto se ha agregado satisfactoriamente a la lista de deseos.';
var ajax_allowed = true;
var ajaxsearch = true;
var allowBuyWhenOutOfStock = false;
var attribute_anchor_separator = '-';
var attributesCombinations = [{"id_attribute":"10","id_attribute_group":"3","attribute":"red","group":"color"},{"id_attribute":"25","id_attribute_group":"4","attribute":"standard","group":"size"},{"id_attribute":"28","id_attribute_group":"5","attribute":"roses","group":"flower_by_type"},{"id_attribute":"24","id_attribute_group":"3","attribute":"pink","group":"color"},{"id_attribute":"29","id_attribute_group":"5","attribute":"lilies","group":"flower_by_type"},{"id_attribute":"30","id_attribute_group":"5","attribute":"daisies","group":"flower_by_type"},{"id_attribute":"26","id_attribute_group":"4","attribute":"deluxe","group":"size"},{"id_attribute":"27","id_attribute_group":"4","attribute":"premium","group":"size"}];
var availableLaterValue = '';
var availableNowValue = '';
var baseDir = 'index_.php';
var baseUri = 'index_.php/index_.php';
var blocking_popup = '1';
var combinations = {"60":{"attributes_values":{"3":"Red","4":"Deluxe","5":"Roses"},"attributes":[10,26,28],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'10','26','28'"},"66":{"attributes_values":{"3":"Red","4":"Premium","5":"Roses"},"attributes":[10,27,28],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'10','27','28'"},"54":{"attributes_values":{"3":"Red","4":"Standard","5":"Roses"},"attributes":[10,25,28],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'10','25','28'"},"58":{"attributes_values":{"3":"Red","4":"Standard","5":"Daisies"},"attributes":[10,25,30],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'10','25','30'"},"64":{"attributes_values":{"3":"Red","4":"Deluxe","5":"Daisies"},"attributes":[10,26,30],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'10','26','30'"},"70":{"attributes_values":{"3":"Red","4":"Premium","5":"Daisies"},"attributes":[10,27,30],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'10','27','30'"},"56":{"attributes_values":{"3":"Red","4":"Standard","5":"Lilies"},"attributes":[10,25,29],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'10','25','29'"},"62":{"attributes_values":{"3":"Red","4":"Deluxe","5":"Lilies"},"attributes":[10,26,29],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'10','26','29'"},"68":{"attributes_values":{"3":"Red","4":"Premium","5":"Lilies"},"attributes":[10,27,29],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'10','27','29'"},"59":{"attributes_values":{"3":"Pink","4":"Standard","5":"Daisies"},"attributes":[24,25,30],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'24','25','30'"},"65":{"attributes_values":{"3":"Pink","4":"Deluxe","5":"Daisies"},"attributes":[24,26,30],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'24','26','30'"},"71":{"attributes_values":{"3":"Pink","4":"Premium","5":"Daisies"},"attributes":[24,27,30],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'24','27','30'"},"57":{"attributes_values":{"3":"Pink","4":"Standard","5":"Lilies"},"attributes":[24,25,29],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'24','25','29'"},"63":{"attributes_values":{"3":"Pink","4":"Deluxe","5":"Lilies"},"attributes":[24,26,29],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'24','26','29'"},"69":{"attributes_values":{"3":"Pink","4":"Premium","5":"Lilies"},"attributes":[24,27,29],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'24','27','29'"},"55":{"attributes_values":{"3":"Pink","4":"Standard","5":"Roses"},"attributes":[24,25,28],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'24','25','28'"},"61":{"attributes_values":{"3":"Pink","4":"Deluxe","5":"Roses"},"attributes":[24,26,28],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'24','26','28'"},"67":{"attributes_values":{"3":"Pink","4":"Premium","5":"Roses"},"attributes":[24,27,28],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'24','27','28'"}};
var combinationsFromController = {"60":{"attributes_values":{"3":"Red","4":"Deluxe","5":"Roses"},"attributes":[10,26,28],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'10','26','28'"},"66":{"attributes_values":{"3":"Red","4":"Premium","5":"Roses"},"attributes":[10,27,28],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'10','27','28'"},"54":{"attributes_values":{"3":"Red","4":"Standard","5":"Roses"},"attributes":[10,25,28],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'10','25','28'"},"58":{"attributes_values":{"3":"Red","4":"Standard","5":"Daisies"},"attributes":[10,25,30],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'10','25','30'"},"64":{"attributes_values":{"3":"Red","4":"Deluxe","5":"Daisies"},"attributes":[10,26,30],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'10','26','30'"},"70":{"attributes_values":{"3":"Red","4":"Premium","5":"Daisies"},"attributes":[10,27,30],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'10','27','30'"},"56":{"attributes_values":{"3":"Red","4":"Standard","5":"Lilies"},"attributes":[10,25,29],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'10','25','29'"},"62":{"attributes_values":{"3":"Red","4":"Deluxe","5":"Lilies"},"attributes":[10,26,29],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'10','26','29'"},"68":{"attributes_values":{"3":"Red","4":"Premium","5":"Lilies"},"attributes":[10,27,29],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'10','27','29'"},"59":{"attributes_values":{"3":"Pink","4":"Standard","5":"Daisies"},"attributes":[24,25,30],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'24','25','30'"},"65":{"attributes_values":{"3":"Pink","4":"Deluxe","5":"Daisies"},"attributes":[24,26,30],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'24','26','30'"},"71":{"attributes_values":{"3":"Pink","4":"Premium","5":"Daisies"},"attributes":[24,27,30],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'24','27','30'"},"57":{"attributes_values":{"3":"Pink","4":"Standard","5":"Lilies"},"attributes":[24,25,29],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'24','25','29'"},"63":{"attributes_values":{"3":"Pink","4":"Deluxe","5":"Lilies"},"attributes":[24,26,29],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'24','26','29'"},"69":{"attributes_values":{"3":"Pink","4":"Premium","5":"Lilies"},"attributes":[24,27,29],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'24','27','29'"},"55":{"attributes_values":{"3":"Pink","4":"Standard","5":"Roses"},"attributes":[24,25,28],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'24','25','28'"},"61":{"attributes_values":{"3":"Pink","4":"Deluxe","5":"Roses"},"attributes":[24,26,28],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'24','26','28'"},"67":{"attributes_values":{"3":"Pink","4":"Premium","5":"Roses"},"attributes":[24,27,28],"price":0,"specific_price":{"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"},"ecotax":0,"weight":0,"quantity":100,"reference":"00101","unit_impact":0,"minimal_quantity":"1","date_formatted":"","available_date":"","id_image":-1,"list":"'24','27','28'"}};
var comparator_max_item = 2;
var comparedProductsIds = [];
var confirm_report_message = 'Seguro que quieres reportar este comentario?';
var contentOnly = false;
var currency = {"id":1,"name":"Dollar","iso_code":"USD","iso_code_num":"840","sign":"$","blank":"0","conversion_rate":"1.000000","deleted":"0","format":"1","decimals":"1","active":"1","prefix":"$ ","suffix":"","id_shop_list":null,"force_id":false};
var currencyBlank = 0;
var currencyFormat = 1;
var currencyRate = 1;
var currencySign = '$';
var currentDate = '2017-11-26 19:39:46';
var customerGroupWithoutTax = true;
var customizationFields = [{"id_customization_field":"1","type":"0","required":"1","name":"","id_lang":"1"},{"id_customization_field":"2","type":"1","required":"1","name":"","id_lang":"1"}];
var customizationIdMessage = 'Customization #';
var default_eco_tax = 0;
var delete_txt = 'Delete';
var displayDiscountPrice = null;
var displayList = false;
var displayPrice = 1;
var doesntExist = 'Esta combinacion no existe en el producto. Por favor seleciona otra combinacion.';
var doesntExistNoMore = 'Este producto no se encuentra en el stock';
var doesntExistNoMoreBut = 'Con esos atributos pero está disponible con otros.';
var ecotaxTax_rate = 0;
var fieldRequired = 'Por favor complete todos los campos requeridos antes de guardar su personalización.';
var freeProductTranslation = 'Gratis!';
var freeShippingTranslation = 'Envio gratis!';
var generated_date = 1511743186;
var groupReduction = 0;
var group_reduction = 0;
var hasDeliveryAddress = false;
var highDPI = false;
var idDefaultImage = 24;
var id_lang = 1;
var id_product = 8;
var img_dir = 'themes/theme1362/img/index/slider/rs4.jpg';
var img_prod_dir = 'themes/theme1362/img/index/cata/c1.jpg';
var img_ps_dir = 'img/';
var instantsearch = true;
var isGuest = 0;
var isLogged = 0;
var isMobile = false;
var is_logged = false;
var jqZoomEnabled = true;
var l_code = 'es_MEX';
var loggin_required = 'Debes iniciar sesión para administrar tu lista de deseos.';
var maxQuantityToAllowDisplayOfLastQuantityMessage = 3;
var max_item = 'No puede agregar más de 2 producto (s) a la comparación de productos';
var min_item = 'Por favor seleccione por lo menos un producto.';
var minimalQuantity = 1;
var moderation_active = true;
var module_url = 'desc.html';
var mywishlist_url = 'desc.html';
var nbItemsPerLine = 3;
var nbItemsPerLineMobile = 2;
var nbItemsPerLineTablet = 3;
var noTaxForThisProduct = true;
var oosHookJsCodeFunctions = [];
var page_name = 'product';
var placeholder_blocknewsletter = 'Ingresa tu e-mail';
var popup_status = true;
var priceDisplayMethod = 1;
var priceDisplayPrecision = 2;
var productAvailableForOrder = true;
var productBasePriceTaxExcl = 24;
var productBasePriceTaxExcluded = 24;
var productBasePriceTaxIncl = 24;
var productColumns = '1';
var productHasAttributes = true;
var productPrice = 19.2;
var productPriceTaxExcluded = 24;
var productPriceTaxIncluded = 24;
var productPriceWithoutReduction = 24;
var productReference = '00101';
var productShowPrice = true;
var productUnitPriceRatio = 1.25;
var product_fileButtonHtml = 'Selecciona un archivo';
var product_fileDefaultHtml = 'So se selecciono un archivo';
var product_specific_price = {"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"8","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":"-1.000000","from_quantity":"1","reduction":"0.200000","reduction_tax":"1","reduction_type":"percentage","from":"0000-00-00 00:00:00","to":"0000-00-00 00:00:00","score":"32"};
var productcomment_added = 'Tu comentario se agrego!';
var productcomment_added_moderation = 'Tu comentario ha sido agregado y estará disponible una vez aprobado por un moderador.';
var productcomment_ok = 'OK';
var productcomment_title = 'Nuevo comentario';
var productcomments_controller_url = 'comentarios.html';
var productcomments_url_rewrite = false;
var quantitiesDisplayAllowed = true;
var quantityAvailable = 1800;
var quickView = true;
var reduction_percent = 20;
var reduction_price = 0;
var removingLinkText = 'Remover este producto del carrito';
var roundMode = 2;
var search_url = 'buscar.html';
var search_url_local = 'buscar.html';
var secure_key = 'd1052f713ccedf4a5c6cc87e8510dcbd';
var sharing_img = 'themes/theme1362/img/index/cata/c1.jpg';
var sharing_name = 'Urban Long Sleeve Shirt';
var sharing_url = 'desc.html';
var specific_currency = false;
var specific_price = -1;
var static_token = '52fc77373dab56446353c7986f8743d9';
var stf_msg_error = 'Su correo electrónico no pudo ser enviado. Por favor revise la dirección de correo electrónico y vuelva a intentarlo.';
var stf_msg_required = 'YNo completó los campos obligatorios';
var stf_msg_success = 'Su correo electrónico ha sido enviado existosamente';
var stf_msg_title = 'Enviar a un amigo';
var stf_secure_key = '554f67f30cb7f7e802cdbb8be97c7ce4';
var stock_management = 1;
var taxRate = 0;
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
var toBeDetermined = 'Estar determinado';
var token = '52fc77373dab56446353c7986f8743d9';
var upToTxt = 'Hasta';
var uploading_in_progress = 'Cargando en progreso, sea paciente.';
var user_newsletter_status = 0;
var usingSecureMode = true;
var wishlistProductsIds = false;
</script>

<script src="js/jquery/jquery-1.11.0.min.js"></script>
<script src="js/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery/plugins/jquery.easing.js"></script>
<script src="js/tools.js"></script>
<script src="js/combo.js"></script>
<script src="js/reg.js"></script>
<script src="js/jquery.js"></script>
<script src="js/emailvalidar.js"></script>
<script src="js/limiteinput.js"></script>
<script src="js/split.js"></script>
<script src="js/pasar.js"></script>
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
<script src="modules/productcomments/js/jquery.textareaCounter.plugin.js"></script>
<script src="modules/productcomments/js/jquery.rating.pack.js"></script>
<script src="themes/theme1362/js/modules/productscategory/js/productscategory.js"></script>
<script src="themes/theme1362/js/modules/crossselling/js/crossselling.js"></script>
<script src="themes/theme1362/js/modules/sendtoafriend/sendtoafriend.js"></script>
<script src="themes/theme1362/js/tools/treeManagement.js"></script>
<script src="modules/socialsharing/js/socialsharing.js"></script>
<script src="js/jquery/plugins/jqzoom/jquery.jqzoom.js"></script>
<script src="themes/theme1362/js/product.js"></script>
<script src="js/jquery/plugins/jquery.idTabs.js"></script>
<script src="sumar.js"></script>


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

                <body id="index" class="index hide-left-column hide-right-column lang_es  one-column">
                  <div id="page">
                <div id="preloader">
                    <div class="cssload-dots"></div>
                </div>
                <!-- #preloader -->
                <div class="header-container">
                  <header id="header">
                      <div class="nav">
                        <div class="container">
                          <div class="row">
                            <nav>
              <div id="tmsearch" class="clearfix">
              </div>
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
                  <li class="last">Urban Long Sleeve Shirt</li>
            </ul>
</div>

<!-- /Breadcrumb -->
                    <div class="row">
            <div class="large-left col-sm-12">
              <div class="row">
                <div id="center_column" class="center_column col-xs-12 col-sm-12">

  <!--Replaced theme 2 -->



                <div itemscope itemtype="#">
    <meta itemprop="url" content="desc.html">
    <div class="primary_block row">

              <!-- left infos-->
        <div class="pb-left-column col-sm-6 col-md-6 col-lg-8">
          <!-- product img-->
          <div id="image-block" class="clearfix is_caroucel">
                                      <span class="sale-box no-print">
                <span class="sale-label">&iexcl;Oferta!</span>
              </span>
                                      <span id="view_full_size">
                                  <a class="jqzoom" title="Urban Long Sleeve Shirt" rel="c1" href="#">
                    <img itemprop="image" src="themes/theme1362/img/index/cata/c10.jpg" title="Urban Long Sleeve Shirt" alt="Urban Long Sleeve Shirt"/>
                  </a>

                                  </span>
                      </div>
          <!-- end image-block -->

                      <!-- thumbnails -->
            <div id="views_block" class="clearfix">
                              <a id="view_scroll_left" class="" title="Otras vistas" href="javascript:{}">
                  Previo
                </a>
                              </div>
                    </div>


        <!-- center infos -->
        <div class="pb-right-column col-sm-6 col-md-6 col-lg-4">
          <div class="product-info-line">
                        <form action="comprar.php" method="post" class="box">
                            <h1 itemprop="name">Urban Long Sleeve Shirt</h1>
                  <div class="all-price-info">
                        <p class="our_price_display" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                          <link itemprop="availability" href="https://schema.org/InStock"/><span id="our_price_display" itemprop="price" content="19.2">$110.00</span><meta itemprop="priceCurrency" content="USD" />                        </p>
                          <p id="reduction_amount"  style="display:none">
                            <span id="reduction_amount_display"></span>
                          </p>
                      </div>



 <!--Nombre Usuario-->
 <label for="email">Correo electrónico:</label><br>
 <?php
     echo $_SESSION['u_usuario'];
 ?><br><br>
 <label >Id del producto:</label>
 <?php
 include("conexion.php");
 $result = mysqli_query($con, "SELECT IDPROD FROM tbl_inventarioProductos WHERE nombre='Urban long sleeve shirt'");
 if ($row = mysqli_fetch_array($result)){
   echo "<input name='id1' value='".$row["IDPROD"]."' readonly>";
 } else {
 echo "¡ No se ha encontrado ningún registro !";
 }
 ?>
 <h3>Dirección</h3><br>
 <label for="estado">Estado:</label><br>
 <select name="estados" onChange="habilitar(this.form)" >
         <option value="0">Selecciona tu estado</option>
         <option value="1">CDMX</option>
     </select><br><br>

     <!--label for="municipio">Municipio:</label><br> <input type="text" name="municipio" maxlength="32" id="municipio" placeholder="Escribe tu municipio" autofocus required ><br><br-->

     <label for="delegacion">Delegación:</label><br><select name="delegacion" id='delegacion' autofocus required >
           <option value="0">Selecciona tu delegación</option>
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

 <label for="colonia">Colonia:</label><br> <input type="text" name="colonia" maxlength="32" id="colonia" placeholder="Escribe tu colonia" autofocus required ><br><br>

 <label for="calle">Calle:</label><br> <input type="text" name="calle" maxlength="32" id="calle" placeholder="Escribe la calle" autofocus required ><br><br>

 <label for="numex">Número exterior:</label><br>
 <input type="text" name="numex" size="20" maxlength="5" id="numex" placeholder="Num. exterior" autofocus required onkeypress="return valida(event)" ><br><br>

 <label for="numin">Número interior:</label><br> <input type="text" name="numin" maxlength="5" id="numin" placeholder="Num. interior" autofocus required onkeypress="return valida(event)" ><br><br>

 <label for="postal">Código postal:</label><br> <input type="text" name="postal" maxlength="5" id="postal" placeholder="05069" autofocus required onkeypress="return valida(event)" ><br><br>
 <!--Password-->
 <label for="Cantidad">Cantidad:</label>
    <p><input type="text" id="txtNumero1" name="txtNumero1" /><input type="text" id="txtNumero2" value="19.20" readonly="" /></p>
    <br/>
    <label for="direccion">Total $:</label><br>
    <input type="text" id="totalsuma" name="totalsuma" readonly="" />
    <input type="button" onclick="suma()" value="calcular" class="btn btn-default btn-md"/>
    <br/><br/>
    <input name="fecha" type="text" id="fecha" value="<?php echo date("Y/m/d"); ?>" size="10" readonly/>
    <br/><br/>

                                                            <div class="attribute_list">

                          <input type="hidden" class="hidden" name="back" value="my-account" />
                        <button type="submit" id="SubmitLogin" name="SubmitLogin" class="btn btn-default btn-md" >
              <span>

                Confirmar compra
              </span>
            </button>
             <br/> <br/>
      </form>
    </div>
          </div>
            <!-- add to cart form-->
              <!-- hidden datas -->

                                     <!-- usefull links-->
      </div>
    </div>
  </div>
</li>





            </ul>
                  </div>
        <!-- end center infos-->
  </div> <!-- end primary_block -->
                <div class="clearfix product-information">
          <ul class="product-info-tabs nav nav-stacked col-sm-3 col-md-3 col-lg-3">
                          <li class="product-description-tab"><a data-toggle="tab" href="#product-description-tab-content">M&aacute;s</a></li>
                                                  <li class="product-features-tab"><a data-toggle="tab" href="#product-features-tab-content">Ficha t&eacute;cnica</a></li>

          </ul>
          <div class="tab-content col-sm-9 col-md-9 col-lg-9">
                         <div id="product-description-tab-content" class="product-description-tab-content tab-pane">
                <div class="rte"><p>Atrévete a lucirlos.</p></div>
             </div>
                        <!-- quantity discount -->
                                      <!-- Data sheet -->
              <div id="product-features-tab-content" class="product-features-tab-content tab-pane">
                <table class="table-data-sheet">
                                      <tr class="odd">
                                              <td>Alto</td>
                        <td>11 pounds</td>
                                          </tr>
                                      <tr class="even">
                                              <td>Envío</td>
                        <td>$90</td>
                                          </tr>
                                      <tr class="even">
                                              <td>Estilo</td>
                        <td>Urban leeve </td>
                                          </tr>
                                      <tr class="odd">
                                              <td>Ancho</td>
                        <td>7 pounds</td>
                                          </tr>
                                      <tr class="even">
                                              <td>Accesorios</td>
                        <td>No</td>
                                          </tr>
                                  </table>
              </div>
            <!--end Data sheet -->
                                      <!--Download -->

              <!--end Customization -->

  <div id="product-video-tab-content" class="product-video-tab-content tab-pane">
                                    <div class="videowrapper">

                </div>

                                    </div>

          </div>
        </div>

        <!-- description & features -->

                  <!--Accessories -->




              </div> <!-- itemscope product wrapper -->




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
                                                            </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.php?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager --></html>
