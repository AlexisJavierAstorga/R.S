{*
* 2002-2016 TemplateMonster
*
* TM Products Slider
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
* @copyright  2002-2016 TemplateMonster
* @license    http://opensource.org/licenses/GPL-2.0 General Public License (GPL 2.0)
*}

{if isset($slides) && $slides}
	<div id="tm-products-slider" class="clearfix">
		<ul id="product-slider">
			{foreach from=$slides item=slide}
				<li>
					<div class="col-lg-5">
						<a class="slide-image" href="{$slide.link|escape:'htmlall':'UTF-8'}" title="{$slide.name|escape:'htmlall':'UTF-8'}">
							<img src="{$link->getImageLink($slide.name, $slide.image.id_image, 'tm_large_default')|escape:'htmlall':'UTF-8'}" alt="{$slide.name|escape:'htmlall':'UTF-8'}" />
						</a>
					</div>
					<div class="slide-info col-lg-7">
							{if $slide.on_sale}<span class="on-sale">{l s='On Sale!' mod='tmproductsslider'}</span>{/if}
							<h3 class="product-name">{$slide.name|escape:'htmlall':'UTF-8'}</h3>
							<div class="slide-description">{$slide.description|strip_tags:true|escape:'htmlall':'UTF-8'|truncate:190:'...'}</div>
							{if isset($slide.features) && $slide.features}
								<div class="product-features">
									{foreach from=$slide.features item=feature}
										<small>{$feature.name|escape:'htmlall':'UTF-8'}: {$feature.value|escape:'htmlall':'UTF-8'}</small>
									{/foreach}
								</div>
							{/if}
								<div class="prodcut-features"></div>
							{if $slide.price && $slide.show_price && !isset($restricted_country_mode) && !$PS_CATALOG_MODE}
								<div class="product-price">
									{if $slide.price_without_reduction && $slide.reduction_type}
										<span class="product-price new-product-price">{convertPrice price=$slide.price}</span>
										<span class="product-price old-product-price">{convertPrice price=$slide.price_without_reduction}</span>
										<span class="product-price-reduction">
											{if $slide.reduction_type == 'percentage'}
												{$slide.reduction_amount|escape:'htmlall':'UTF-8' *100*-1}%
											{else}
												{convertPrice price=$slide.reduction_amount*-1}
											{/if}
										</span>
									{else}
										<span class="product-price">{convertPrice price=$slide.price}</span>
									{/if}
								</div>
							{/if}
							<a href="{$slide.link|escape:'htmlall':'UTF-8'}" class="btn btn-default btn-view"><span>{l s='Read More' mod='tmproductsslider'}</span></a>
					</div>
				</li>
			{/foreach}
		</ul>
	</div>
{/if}
{if isset($settings)}
	{addJsDef product_slider_width=$settings.slider_width|intval}
	{addJsDef product_slider_type=$settings.slider_type}
	{addJsDef product_slider_speed=$settings.slider_speed|intval}
	{addJsDef product_slider_pause=$settings.slider_pause|intval}
	{addJsDef product_slider_loop=$settings.slider_loop|intval}
	{addJsDef product_slider_pause_h=$settings.slider_pause_h|intval}
	{addJsDef product_slider_pager=$settings.slider_pager|intval}
	{addJsDef product_slider_controls=$settings.slider_controls|intval}
	{addJsDef product_slider_auto_controls=$settings.slider_auto_controls|intval}
{/if}