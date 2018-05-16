{if $infos|@count > 0}
  <div id="cmsinfo_block">
    {foreach from=$infos item=info}
      <div class="col-xs-4">
	<div class="box">
	  {$info.text}
	</div>
      </div>
    {/foreach}
  </div>
{/if}