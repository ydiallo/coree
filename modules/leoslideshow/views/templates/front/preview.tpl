{*
 *  Leo Theme for Prestashop 1.6.x
 *
 * @author    http://www.leotheme.com
 * @copyright Copyright (C) October 2013 LeoThemes.com <@emai:leotheme@gmail.com>
 *               <info@leotheme.com>.All rights reserved.
 * @license   GNU General Public License version 2
*}
{extends file=$layout}
{block name='content'}
	{if $leoslideshow_tpl == 1}
		{include file='./leoslideshow.tpl'}
	{else}
		{include file='module:leoslideshow/views/templates/front/leoslideshow.tpl'}
	{/if}
{/block}
