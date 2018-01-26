{**
 *  Leo Prestashop Theme Framework for Prestashop 1.5.x
 *
 * @package   leotempcp
 * @version   3.0
 * @author    http://www.leotheme.com
 * @copyright Copyright (C) October 2013 LeoThemes.com <@emai:leotheme@gmail.com>
 *               <info@leotheme.com>.All rights reserved.
 * @license   GNU General Public License version 2
 *
 **}

<!-- Block languages module -->
<div id="leo_block_top" class="popup-over leo_block_top dropdown js-dropdown">
    <a href="javascript:void(0)" data-toggle="dropdown" class="popup-title" title="{l s='Setting' d='Shop.Theme.Global'}">
	    <i class="icon icon-settings"></i>
	    <span class="text-title">{l s='Setting' d='Shop.Theme.Global'}</span>
	    <i class="icon-arrow-down fa fa-angle-down"></i>
	 </a>    
	<div class="popup-content dropdown-menu">
		<div class="language-selector">
			<p>{l s='Language:' d='Shop.Theme.Global'}</p>
			<ul class="link">
				{foreach from=$languages item=language}
		          	<li {if $language.id_lang == $current_language.id_lang} class="current" {/if}>
		            	<a href="{url entity='language' id=$language.id_lang}">
		            		<img src="{$img_lang_url|escape:'html':'UTF-8'}{$language.id_lang|escape:'html':'UTF-8'}.jpg" alt="{$language.iso_code|escape:'html':'UTF-8'}" width="16" height="11" />
		            	</a>
		          	</li>
		        {/foreach}
			</ul>
		</div>
		<div class="currency-selector">
			<p>{l s='Currency:' d='Shop.Theme.Global'}</p>
			<ul class="link">
				{foreach from=$currencies item=currency}
		        	<li {if $currency.current} class="current" {/if}>
		          		<a title="{$currency.name}" rel="nofollow" href="{$currency.url}">{$currency.sign}</a>
		        	</li>
		      	{/foreach}
			</ul>
		</div>
		{if $enable_userinfo == 1}
			<ul class="user-info">
		      	{if $logged}
			        <li>
			          <a
			            class="account" 
			            href="{$my_account_url}"
			            title="{l s='View my customer account' d='Shop.Theme.Customeraccount'}"
			            rel="nofollow"
			          >
			            <span>{l s='Hello' d='Shop.Theme.Global'} {$customerName}</span>
			          </a>
			        </li>
			        <li>
			          <a
			            class="logout"
			            href="{$logout_url}"
			            rel="nofollow"
			          >
			            {l s='Sign out' d='Shop.Theme.Actions'}
			          </a>
			        </li>
		      	{else}
		        <li>
		          <a
		            class="signin"
		            href="{$my_account_url}"
		            title="{l s='Log in to your customer account' d='Shop.Theme.Customeraccount'}"
		            rel="nofollow"
		          >
		            <span>{l s='Sign in' d='Shop.Theme.Actions'}</span>
		          </a>
		        </li>
		      {/if}
		      <li>
		        <a
		          class="myacount"
		          href="{$my_account_url}"
		          title="{l s='My account' d='Shop.Theme.Global'}"
		          rel="nofollow"
		        >
		          <span>{l s='My account' d='Shop.Theme.Global'}</span>
		        </a>
		      </li>
		      <li>
			      <a
			        class="ap-btn-wishlist dropdown-item"
			        href="{url entity='module' name='leofeature' controller='mywishlist'}"
			        title="{l s='Wishlist' d='Shop.Theme.Global'}"
			        rel="nofollow"
			      >
			        <span>{l s='Wishlist' d='Shop.Theme.Global'}<span class="ap-total-wishlist ap-total"></span></span>
			      </a>
			    </li>
				<li>
			      <a
			        class="ap-btn-compare dropdown-item"
			        href="{url entity='module' name='leofeature' controller='productscompare'}"
			        title="{l s='Compare' d='Shop.Theme.Global'}"
			        rel="nofollow"
			      >
			        <span>{l s='Compare' d='Shop.Theme.Global'}<span class="ap-total-compare ap-total"></span></span>
			      </a>
			    </li>
		      <li>
		        <a
		          class="checkout"
		          href="{url entity='cart' params=['action' => show]}"
		          title="{l s='Checkout' d='Shop.Theme.Customeraccount'}"
		          rel="nofollow"
		        >
		          <span>{l s='Checkout' d='Shop.Theme.Actions'}</span>
		        </a>
		      </li>
		    </ul>
		{/if}
	</div>
</div>

<!-- /Block languages module -->
