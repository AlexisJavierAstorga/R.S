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

<div id="{$id|escape:'htmlall':'UTF-8'}-response" {if !isset($text)}style="display:none;"{/if} class="message alert alert-{if isset($class) && $class=='error'}danger{else}success{/if}">
	<div>{if isset($text)}{$text|escape:'htmlall':'UTF-8'}{/if}</div>
</div>