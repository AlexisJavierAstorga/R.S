{*
* 2002-2016 TemplateMonster
*
* TM Social Feeds
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

<div class="soc-settings-block {$hook|escape:'html':'UTF-8'}">
	<form method="post" action="" enctype="multipart/form-data" class="item-form defaultForm form-horizontal">
        <div class="well">
        	<div class="form-group">
                <label class="col-lg-3 control-label">{l s='Add block to position' mod='tmsocialfeeds'}</label>
                <div class="col-lg-9">
                    <span class="switch prestashop-switch fixed-width-lg">
                        <input type="radio" name="{$type|escape:'html':'UTF-8'}_{$hook|escape:'html':'UTF-8'}" id="{$type|escape:'html':'UTF-8'}_{$hook|escape:'html':'UTF-8'}_on" value="1">
                        <label for="{$type|escape:'html':'UTF-8'}_{$hook|escape:'html':'UTF-8'}_on" class="radioCheck">
                            <i class="color_success"></i> {l s='Yes' mod='tmsocialfeeds'}
                        </label>
                        <input type="radio" name="{$type|escape:'html':'UTF-8'}_{$hook|escape:'html':'UTF-8'}" id="{$type|escape:'html':'UTF-8'}_{$hook|escape:'html':'UTF-8'}_off" value="0" checked="checked">
                        <label for="{$type|escape:'html':'UTF-8'}_{$hook|escape:'html':'UTF-8'}_off" class="radioCheck">
                            <i class="color_danger"></i> {l s='No' mod='tmsocialfeeds'}
                        </label>
                        <a class="slide-button btn"></a>
                    </span>
                </div>
            </div>
           <div class="selector item-field form-group">
                <label class="control-label col-lg-3">{l s='Sort order' mod='tmsocialfeeds'}</label>
                <div class="col-lg-3">
                    <input type="text" name="sort_order" value="">
                </div>
            </div>
            <div class="item-field form-group">
                <label class="control-label col-lg-3">{l s=' Widget feeds limit' mod='tmsocialfeeds'}</label>
                <div class="col-lg-3">
                    <input type="text" name="item_limit" value="">
                </div>
            </div>
			<input type="hidden" name="feed_type" value="{$type|escape:'html':'UTF-8'}" />
            <input type="hidden" name="id_shop" value="{$id_shop|escape:'html':'UTF-8'}" />
            <input type="hidden" name="hook" value="{$hook|escape:'html':'UTF-8'}" />
            <div class="form-group">
                <div class="col-lg-7 col-lg-offset-3">
                    <button type="submit" name="newItem" class="button-new-item-save btn btn-success pull-right"><i class="icon-save"></i> {l s='Save' mod='tmsocialfeeds'}</button>
                </div>
            </div>
        </div>
        
    </form>
</div>