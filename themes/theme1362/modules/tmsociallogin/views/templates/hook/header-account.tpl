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

{assign var=back_page value = $link->getPageLink('index')|escape:'html':'UTF-8'}
{if $f_status}
    <a class="btn btn-default btn-sm btn-login-facebook" {if isset($back) && $back}href="{$link->getModuleLink('tmsociallogin', 'facebooklogin', [], true)}"{else}href="{$link->getModuleLink('tmsociallogin', 'facebooklogin', ['back' => $back_page], true)}"{/if} title="{l s='Login with Your Facebook Account' mod='tmsociallogin'}">
         {l s='Facebook Login' mod='tmsociallogin'}
    </a>
{/if}
{if $g_status}
    <a class="btn btn-default btn-sm btn-login-google" {if isset($back) && $back}href="{$link->getModuleLink('tmsociallogin', 'googlelogin', ['back' => $back], true)}"{else}href="{$link->getModuleLink('tmsociallogin', 'googlelogin', ['back' => $back_page], true)}"{/if} title="{l s='Login with Your Google Account' mod='tmsociallogin'}">
         {l s='Google Login' mod='tmsociallogin'}
    </a>
{/if}
{if $vk_status}
    <a class="btn btn-default btn-sm btn-login-vk" {if isset($back) && $back}href="{$link->getModuleLink('tmsociallogin', 'vklogin', ['back' => $back], true)}"{else}href="{$link->getModuleLink('tmsociallogin', 'vklogin', ['back' => $back_page], true)}"{/if} title="{l s='Login with Your VK Account' mod='tmsociallogin'}">
         {l s='VK Login' mod='tmsociallogin'}
    </a>
{/if}