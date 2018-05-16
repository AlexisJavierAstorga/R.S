$(document).ready(function() {
  initCrossSellingbxSlider();
});

function initCrossSellingbxSlider() {
  if (typeof productColumns != 'undefined') {
    if ($(document).width() >= 768) {
      if (productColumns == 1) {
        minSlides=6
      } else if (productColumns == 2) {
        minSlides=5
      } else {
        minSlides = 3
      }
      maxSlides = 6;
    } else {
      minSlides = 3;
      maxSlides = 3;  
    }
  } else {
    minSlides = 2,
    maxSlides = 6
  }

  if (!!$.prototype.bxSlider) {
    var crosseling_slider= $('#crossselling_list_car').bxSlider({
      minSlides: minSlides,
      maxSlides: maxSlides,
      slideWidth: 178,
      slideMargin: 20,
      pager: false,
      nextText: '',
      prevText: '',
      moveSlides:1,
      infiniteLoop:false,
      hideControlOnEnd: true
    });

    if ($('#crossselling_list_car').length) {
      $(window).on('resize load', function() {
        if ($(document).width() <= 767) {
          if (($(document).width() <= 500)) {
            crosseling_slider.reloadSlider({
              minSlides: 2,
              maxSlides: 2,
              slideWidth: 178,
              slideMargin: 20,
              pager: false,
              nextText: '',
              prevText: '',
              moveSlides:1,
              infiniteLoop:false,
              hideControlOnEnd: true
            });
          } else {

            crosseling_slider.reloadSlider({
              minSlides: 3,
              maxSlides: 3,
              slideWidth: 178,
              slideMargin: 20,
              pager: false,
              nextText: '',
              prevText: '',
              moveSlides:1,
              infiniteLoop:false,
              hideControlOnEnd: true
            });
          }
        } else if (($(document).width() <= 1199)&&($(document).width() >= 768)) {
          if (($(document).width() <= 991)) {
            if (page_name != 'order') {
              if (productColumns != 'undefined') {
                if (productColumns == 1) {
                  minSlides=4
                } else if (productColumns == 2) {
                  minSlides=3
                } else {
                  minSlides = 2
                }
              } else {
                minSlides = 2  
              }
            } else {
              minSlides = 4  
            }

            crosseling_slider.reloadSlider({
              minSlides: minSlides,
              maxSlides: 4,
              slideWidth: 178,
              slideMargin: 20,
              pager: false,
              nextText: '',
              prevText: '',
              moveSlides:1,
              infiniteLoop:false,
              hideControlOnEnd: true
            });
          } else {
            if (page_name != 'order') {
              if (productColumns != 'undefined') {
                if (productColumns == 1) {
                  minSlides=5
                } else if (productColumns == 2) {
                  minSlides=4
                } else {
                  minSlides = 3
                }
              } else {
                minSlides = 2  
              }
            } else {
              minSlides = 5  
            }

            crosseling_slider.reloadSlider({
              minSlides: minSlides,
              maxSlides: 5,
              slideWidth: 178,
              slideMargin: 20,
              pager: false,
              nextText: '',
              prevText: '',
              moveSlides:1,
              infiniteLoop:false,
              hideControlOnEnd: true
            });
          }
        } else if ($(document).width() >= 1200) {
          if (page_name != 'order') {
            if (typeof productColumns != 'undefined') {
              if (productColumns == 1) {
                minSlides=6
              } else if (productColumns == 2) {
                minSlides=5
              } else {
                minSlides = 3
              }
            } else {
              minSlides = 2  
            }
          } else {
            minSlides = 6  
          }

          crosseling_slider.reloadSlider({
            minSlides: minSlides,
            maxSlides: 6,
            slideWidth: 178,
            slideMargin: 20,
            pager: false,
            nextText: '',
            prevText: '',
            moveSlides:1,
            infiniteLoop:false,
            hideControlOnEnd: true
          })  
        }
      })
    }
  }
}
