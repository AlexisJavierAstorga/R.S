{*
* 2002-2015 TemplateMonster
*
* TemplateMonster Social Login
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
*}

{if $f_status}
    <a class="btn btn-default btn-sm btn-login-facebook" href="{$link->getModuleLink('tmsociallogin', 'facebooklogin', [], true)}" title="{l s='Register with Your Facebook Account' mod='tmsociallogin'}">
        <span>{l s='Register with Your Facebook Account' mod='tmsociallogin'}</span>
    </a>
{/if}
{if $g_status}
    <a class="btn btn-default btn-sm btn-login-google" {if isset($back) && $back}href="{$link->getModuleLink('tmsociallogin', 'googlelogin', ['back' => $back], true)}"{else}href="{$link->getModuleLink('tmsociallogin', 'googlelogin', [], true)}"{/if} title="{l s='Register with Your Google Account' mod='tmsociallogin'}">
         <span>{l s='Register with Your Google Account' mod='tmsociallogin'}</span>
    </a>
{/if}
{if $vk_status}
    <a class="btn btn-default btn-sm btn-login-vk" {if isset($back) && $back}href="{$link->getModuleLink('tmsociallogin', 'vklogin', ['back' => $back], true)}"{else}href="{$link->getModuleLink('tmsociallogin', 'vklogin', [], true)}"{/if} title="{l s='Register with Your VK Account' mod='tmsociallogin'}">
         <span>{l s='Register with Your VK Account' mod='tmsociallogin'}</span>
    </a>
{/if}
