{*
 *  Leo Theme for Prestashop 1.6.x
 *
 * @author    http://www.leotheme.com
 * @copyright Copyright (C) October 2013 LeoThemes.com <@emai:leotheme@gmail.com>
 *               <info@leotheme.com>.All rights reserved.
 * @license   GNU General Public License version 2
*}

{function name=menu_cat_img level=0}
  <ul class="level{$level}">
  {foreach $data as $category}
    {if isset($category.children) && is_array($category.children)}
      <li class="cate_{$category.id_category}" ><a href="{$link->getCategoryLink($category.id_category, $category.link_rewrite)|escape:'html':'UTF-8'}"><span {if {$category.id_category} == {$id_root}} style="display:none"{/if}>{$category.name}{if isset($category.image)}<span {if  {$showicons} == 0 || ({$level} gt 0 && {$showicons} == 2)} style="display:none"{/if}><img height = '20px' src='{$category["image"]}' alt='{$category["name"]}'></span>{/if}</span></a>
        {menu_cat_img data=$category.children level=$level+1}</li>
    {else}
      <li class="cate_{$category.id_category}"><a href="{$link->getCategoryLink($category.id_category, $category.link_rewrite)|escape:'html':'UTF-8'}">{$category.name}{if isset($category.image)}<span {if {$showicons} == 0 || ({$level} gt 0 && {$showicons} == 2)} style="display:none"{/if}><img height = '10px' src='{$category["image"]}' alt='{$category["name"]}'></span>{/if}</a></li>
    {/if}
  {/foreach}
  </ul>
{/function}

{if isset($categories)}
{*
<div class="widget-category_image block widget-category_image_{$level}">
*}
<div class="widget-category_image block widget-category_image_{if $cate_depth}{$cate_depth}{else}0{/if}">

	{if isset($widget_heading)&&!empty($widget_heading)}
	<h4 class="menu-title">
		{$widget_heading}
	</h4>
	{/if}
	<div class="block_content">
    {foreach from = $categories key=key item=cate}
		{menu_cat_img data=$cate}
    {/foreach}
    <div id="view_all_wapper" style="display:none">
        <span class ="view_all"><a href="javascript:void(0)">{l s='View all' mod='leobootstrapmenu'}</a></span>
    </div> 
	</div>
</div>
{/if}
<script type="text/javascript">
	{literal}
	if ( typeof live_editor !== 'undefined' && live_editor)
	{
		var limit = {/literal}{if $limit}{$limit}{else}5{/if}{literal};
		var level = {/literal}{if $cate_depth}{$cate_depth}{else}0{/if}{literal};		
	}else
	{		
		list_menu_tmp.limit = {/literal}{if $limit}{$limit}{else}5{/if}{literal};
		list_menu_tmp.level = {/literal}{if $cate_depth}{$cate_depth}{else}0{/if}{literal};		
	}
	{/literal}
</script>

