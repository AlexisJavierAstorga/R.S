/**
* 2002-2016 TemplateMonster
*
* TM Mega Layout
*
* NOTICE OF LICENSE
*
* This source file is subject to the General Public License (GPL 2.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/GPL-2.0
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade the module to newer
* versions in the future.
*
*  @author    TemplateMonster (Alexander Grosul & Alexander Pervakov)
*  @copyright 2002-2016 TemplateMonster
*  @license   http://opensource.org/licenses/GPL-2.0 General Public License (GPL 2.0)
*/



$(document).ready(function(){
  var banner_obj = $('.top-2-wrap-2-row-1 #tmhtmlcontent_topColumn .tmhtmlcontent-topColumn');
  if (banner_obj.length) {
    setNbItems();
    banner_slider = banner_obj.bxSlider({
      responsive:true,
      useCSS: false,
      minSlides: 3,
      maxSlides: 3,
      slideWidth: 1200,
      slideMargin: 30,
      moveSlides: 1,
      pager: false,
      autoHover: false,
      speed: 500,
      pause: 3000,
      controls: true,
      autoControls: true,
      startText:'',
      stopText:'',
      prevText:'',
      nextText:''
    });

    var doit;
        
    window.onresize = function (){
      clearTimeout(doit);
        doit = setTimeout(function (){
        resizedw();
      }, 200);
    };

  }
});

function resizedw(){
  setNbItems();
  banner_slider.reloadSlider({
    responsive:true,
    useCSS: false,
    minSlides: number_items,
    maxSlides: number_items,
    slideWidth: 1200,
    slideMargin: 30,
    moveSlides: 1,
    pager: false,
    autoHover: false,
    speed: 500,
    pause: 3000,
    controls: true,
    autoControls: true,
    startText:'',
    stopText:'',
    prevText:'',
    nextText:''
  });
}

function setNbItems(){
  if ($('.container').width() < 500) {
    number_items = 1;
  }
  if ($('.container').width() >= 500) {
    number_items = 2;
  }
  if ($('.container').width() >= 800) {
    number_items = 3;
  }
}