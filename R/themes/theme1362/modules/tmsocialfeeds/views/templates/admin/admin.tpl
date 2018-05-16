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

<div id="htmlcontent" class="panel">
    {if isset($error) && $error}
        {include file="{$admin_path|escape:'htmlall':'UTF-8'}messages.tpl" id="main" text=$error class='error'}
    {/if}
    {if isset($confirmation) && $confirmation}
        {include file="{$admin_path|escape:'htmlall':'UTF-8'}messages.tpl" id="main" text=$confirmation class='conf'}
    {/if}
    <!-- Slides -->
    {include file="{$admin_path|escape:'htmlall':'UTF-8'}items.tpl"}
</div>
