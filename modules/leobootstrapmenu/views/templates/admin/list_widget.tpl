{*
 *  Leo Theme for Prestashop 1.6.x
 *
 * @author    http://www.leotheme.com
 * @copyright Copyright (C) October 2013 LeoThemes.com <@emai:leotheme@gmail.com>
 *               <info@leotheme.com>.All rights reserved.
 * @license   GNU General Public License version 2
*}
<option value=""></option>
{foreach from=$widgets item=w}
<option value="{$w['key_widget']}">{$w['name']}</option>
{/foreach}
        