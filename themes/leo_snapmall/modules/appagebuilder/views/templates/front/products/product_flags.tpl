{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright  2007-2017 Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
{block name='product_flags'}
	<ul class="product-flags">
	  	{foreach from=$product.flags item=flag}
	    	<li class="product-flag {$flag.type}">{$flag.label}</li>
	  	{/foreach}
	</ul>
{/block}
