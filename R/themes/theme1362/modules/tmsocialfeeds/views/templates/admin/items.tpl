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

<script type="text/javascript">
	var closeText = "{l s='Close' mod='tmsocialfeeds'}";
</script>
<ul class="nav nav-tabs">
	{foreach from=$htmlitems.type.all item=type}
		<li id="soc-{$type|escape:'htmlall':'UTF-8'}" class="{if $type == $htmlitems.type.default} active{/if}">
			<a href="#items-{$type|escape:'htmlall':'UTF-8'}" data-toggle="tab">{$type|escape:'htmlall':'UTF-8'}</a>
		</li>
	{/foreach}
</ul>
<div class="socials-items tab-content">
{foreach name=langs from=$htmlitems.items key=type item=langItems}
	<div id="items-{$type|escape:'htmlall':'UTF-8'}" class="lang-content tab-pane  {if $type == $htmlitems.type.default} active{/if}" >
	{foreach name=hooks from=$langItems key=hook item=hookItems}
		<h4 class="hook-title clearfix">{l s='Hook' mod='tmsocialfeeds'} "{$hook|escape:'htmlall':'UTF-8'}" {if $hookItems}<button class="editItem btn btn-default pull-right">{l s='Edit item' mod='tmsocialfeeds'}</button>{else}<button class="addItem btn btn-success pull-right">{l s='Add item' mod='tmsocialfeeds'}</button>{/if}</h4>
        {if $hookItems}
            {foreach name=items from=$hookItems item=hItem}
                {include file="{$admin_path|escape:'htmlall':'UTF-8'}items_{$hItem.item_type}.tpl"}
            {/foreach}
        {else}
        	{include file="{$admin_path|escape:'htmlall':'UTF-8'}new_{$type}.tpl"}
        {/if}
	{/foreach}
	</div>
{/foreach}
</div>
