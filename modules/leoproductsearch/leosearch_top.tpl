{*
 *  Leo Theme for Prestashop 1.6.x
 *
 * @author    http://www.leotheme.com
 * @copyright Copyright (C) October 2013 LeoThemes.com <@emai:leotheme@gmail.com>
 *               <info@leotheme.com>.All rights reserved.
 * @license   GNU General Public License version 2
*}

<!-- Block search module -->
<div id="leo_search_block_top" class="block exclusive">
	<h4 class="title_block">{l s='Search' mod='leoproductsearch'}</h4>
	<form method="get" action="{$link->getPageLink('productsearch', true)|escape:'html':'UTF-8'}" id="leosearchtopbox">
		<input type="hidden" name="fc" value="module" />
		<input type="hidden" name="module" value="leoproductsearch" />
		<input type="hidden" name="controller" value="productsearch" />
		{*
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		*}
    	<label for="search_query_block">{l s='Search products:' mod='leoproductsearch'}</label>
		<div class="block_content clearfix">
			{*
			<select class="form-control" name="cate" id="cate">
				<option value="">{l s='All Categories' mod='leoproductsearch'}</option>
			     {foreach $cates item = cate key= "key"}
			     <option value="{$cate.id_category|escape:'htmlall':'UTF-8'|stripslashes}" {if isset($selectedCate) && $cate.id_category eq $selectedCate}selected{/if} >{$cate.name}</option>
			     {/foreach}
            </select>
			*}
			<div class="list-cate-wrapper">
				<input id="leosearchtop-cate-id" name="cate" value="{if isset($selectedCate)}{$selectedCate}{/if}" type="hidden">
				<a id="dropdownListCateTop" class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span>{if $selectedCateName != ''}{$selectedCateName}{else}{l s='All Categories' mod='leoproductsearch'}{/if}</span>
					<i class="material-icons pull-xs-right">keyboard_arrow_down</i>
				</a>
				<div class="list-cate dropdown-menu" aria-labelledby="dropdownListCateTop">
					<a href="#" data-cate-id="" data-cate-name="{l s='All Categories' mod='leoproductsearch'}" class="cate-item{if $selectedCate == ''} active{/if}" >{l s='All Categories' mod='leoproductsearch'}</a>
				{foreach $cates item = cate key= "key"}
					<a href="#" data-cate-id="{$cate.id_category|escape:'htmlall':'UTF-8'|stripslashes}" data-cate-name="{$cate.name}" class="cate-item{if isset($selectedCate) && $cate.id_category eq $selectedCate} active{/if}" >{$cate.name}</a>
				{/foreach}
				</div>
			</div>
			<input class="search_query form-control grey" type="text" id="leo_search_query_top" name="search_query" value="{$search_query|escape:'htmlall':'UTF-8'|stripslashes}" />
			<button type="submit" id="leo_search_top_button" class="btn btn-default button button-small"><span><i class="material-icons search">search</i></span></button> 
		</div>
	</form>
</div>
<script type="text/javascript">
	var blocksearch_type = 'top';
</script>
<!-- /Block search module -->
