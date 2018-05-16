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
	<a title="Login with your Facebook Account" class="button_large btn btn-default btn-login-facebook" {if isset($back) && $back}href="{$link->getModuleLink('tmsociallogin', 'facebooklogin', ['back' => $back], true)}"{else}href="{$link->getModuleLink('tmsociallogin', 'facebooklogin', [], true)}"{/if}>
    	<span>{l s='Facebook Login' mod='tmsociallogin'}</span>
    </a>
{/if}
{if $g_status}
    <a title="Login with your Google Account" class="button_large btn btn-default btn-login-google" {if isset($back) && $back}href="{$link->getModuleLink('tmsociallogin', 'googlelogin', ['back' => $back], true)}"{else}href="{$link->getModuleLink('tmsociallogin', 'googlelogin', [], true)}"{/if}>
    	<span>{l s='Google Login' mod='tmsociallogin'}</span>
    </a>
{/if}
{if $vk_status}
    <a title="Login with your VK Account" class="button_large btn btn-default btn-login-vk" {if isset($back) && $back}href="{$link->getModuleLink('tmsociallogin', 'vklogin', ['back' => $back], true)}"{else}href="{$link->getModuleLink('tmsociallogin', 'vklogin', [], true)}"{/if}>
    	<span>{l s='VK Login' mod='tmsociallogin'}</span>
    </a>
{/if}