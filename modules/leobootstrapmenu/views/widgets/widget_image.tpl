{*
 *  Leo Theme for Prestashop 1.6.x
 *
 * @author    http://www.leotheme.com
 * @copyright Copyright (C) October 2013 LeoThemes.com <@emai:leotheme@gmail.com>
 *               <info@leotheme.com>.All rights reserved.
 * @license   GNU General Public License version 2
*}

{if isset($images) && $images}
<div class="widget-images">
	{if isset($widget_heading)&&!empty($widget_heading)}
	<div class="menu-title">
		{$widget_heading}
	</div>
	{/if}
	<div class="widget-inner clearfix">
		<div class="images-list clearfix">	
			<div>
			{foreach from=$images item=image name=images}
				
				{if $smarty.foreach.images.index == 0 || $smarty.foreach.images.index % $columns == 0}
					<div class="row">
				{/if}
					<div class="image-item {if 12 % $columns == 0}col-md-{12/$columns}{/if} col-xs-12">
						<img class="replace-2x img-fluid" src="{$image}" alt=""/>
					</div>
				{if $smarty.foreach.images.index % $columns == $columns-1 || $smarty.foreach.images.last}
					</div>
				{/if}
			{/foreach}
			</div>
		</div>
	</div>
</div>
{/if} 