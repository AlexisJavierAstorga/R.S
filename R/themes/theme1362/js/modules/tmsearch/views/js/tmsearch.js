/*
 * 2002-2015 TemplateMonster
 *
 * TemplateMonster Search
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
 * @author     TemplateMonster (Alexander Grosul)
 * @copyright  2002-2015 TemplateMonster
 * @license    http://opensource.org/licenses/GPL-2.0 General Public License (GPL 2.0)
 */
var instantSearchQueries = [];
$(document).ready(function() {
  var $input = $("#tm_search_query");
  var width_ac_results = $input.parent('form').width();
  $('#search-toggle').on("click", function() {
    $(this).parent("#tmsearch").toggleClass("active-search");
    $input.trigger("focus");
  });
  $('#tmsearch').find('.search-close').on("click", function() {
    $("#tmsearch").removeClass("active-search");
    $input.val('');
    tryToCloseInstantSearch();
  });
  $(document).mouseup(function(e) {
    var container = $('#tmsearch');
    if (container.has(e.target).length === 0 && !$input.val()) {
      container.removeClass("active-search");
      tryToCloseInstantSearch();
    }
  });
  if (typeof ajaxsearch != 'undefined' && ajaxsearch) {
    if (typeof isMobile != 'undefined' && !isMobile) {
      $input.autocomplete(
        search_url_local,
        {
          minChars: 3,
          max: 10,
          width: (width_ac_results > 0 ? width_ac_results : 500),
          selectFirst: false,
          scroll: tmsearch_scroll,
          scrollHeight: tmsearch_height,
          dataType: "json",
          formatItem: function(data, i, max, value, term) {
            return value;
          },
          parse: function(data) {
            var mytab = [];
            tmsearch_limit && tmsearch_limit_num < data.length ? showeditems = tmsearch_limit_num : showeditems = data.length;
            for (var i = 0; i < showeditems; i++) {
              html = '';
              if (tmsearch_image) {
                html += '<div class="pull-left"><img class="img-responsive" src="' + data[i].img_url + '" alt="' + data[i].name + '" /></div>';
              }
              html += '<div class="content">';
              html += '<span class="product-name">' + data[i].category + ' > ' + data[i].name + '</span>';
              if (tmsearch_reference && data[i].reference.length) {
                html += '<span class="reference">' + data[i].reference + '</span>';
              }
              if (tmsearch_manufacturer && data[i].manufacturer.length) {
                html += '<span class="manufacturer">' + data[i].manufacturer + '</span>';
              }
              if (tmsearch_description) {
                html += '<div class="description">' + data[i].description_short + '</div>';
              }
              if (tmsearch_price && data[i].price) {
                html += '<span class="price product-price">' + data[i].price + '</span><span class="price old-price">' + data[i].price_old + '</span>';
              }
              html += '</div>';
              mytab[mytab.length] = {data: data[i], value: html};
            }
            return mytab;
          },
          extraParams: {
            ajaxSearch: 1
          }
        }
        )
        .result(function(event, data, formatted) {
          $input.val(data.name);
          document.location.href = data.product_link;
        });
    }
  }
  if (typeof instantsearch != 'undefined' && instantsearch) {
    $input.on('keyup', function() {
      if ($(this).val().length > 2) {
        stopInstantSearchQueries();
        instantSearchQuery = $.ajax({
          url: search_url + '?rand=' + new Date().getTime(),
          data: {
            instantSearch: 1,
            id_lang: id_lang,
            q: $(this).val()
          },
          dataType: 'html',
          type: 'POST',
          headers: {"cache-control": "no-cache"},
          async: true,
          cache: false,
          success: function(data) {
            if ($input.val().length > 0) {
              tryToCloseInstantSearch();
              $('#center_column').attr('id', 'old_center_column');
              $('#old_center_column').after('<div id="center_column" class="' + $('#old_center_column').attr('class') + ' instant_search">' + data + '</div>').hide();

              $('#homepage-slider, #htmlcontent_top, #tmhtmlcontent_topColumn, #tm-products-slider').hide();

              // Button override
              if (typeof(ajaxCart) != 'undefined' && ajaxCart) // check if not catalog mode on
              {
                ajaxCart.overrideButtonsInThePage();
              }
              $("#instant_search_results a.close").on('click', function() {
                $input.val('');
                return window.location.reload();
              });
              return false;
            }
            else {
              tryToCloseInstantSearch();
            }
          }
        });
        instantSearchQueries.push(instantSearchQuery);
      }
      else {
        tryToCloseInstantSearch();
      }
    });
  }
});
function tryToCloseInstantSearch() {
  var $oldCenterColumn = $('#old_center_column');
  if ($oldCenterColumn.length > 0) {
    $('#center_column').remove();
    $oldCenterColumn.attr('id', 'center_column').show();
    $('#homepage-slider, #htmlcontent_top, #tmhtmlcontent_topColumn, #tm-products-slider').show();
    return false;
  }
}
function stopInstantSearchQueries() {
  for (var i = 0; i < instantSearchQueries.length; i++) {
    instantSearchQueries[i].abort();
  }
  instantSearchQueries = [];
}