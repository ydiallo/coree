{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{block name='header'}
  {block name='header_nav'}
    <nav class="header-nav">
      <div class="topnav">
        {if isset($fullwidth_hook.displayNav1) AND $fullwidth_hook.displayNav1 == 0}
        <div class="container">
        {/if}
          <div class="inner">{hook h='displayNav1'}</div>
        {if isset($fullwidth_hook.displayNav1) AND $fullwidth_hook.displayNav1 == 0}
        </div>
        {/if}
      </div>
      <div class="bottomnav">
        {if isset($fullwidth_hook.displayNav2) AND $fullwidth_hook.displayNav2 == 0}
          <div class="container">
        {/if}
          <div class="inner">{hook h='displayNav2'}</div>
        {if isset($fullwidth_hook.displayNav2) AND $fullwidth_hook.displayNav2 == 0}
          </div>
        {/if}
      </div>
    </nav>
  {/block}

  {block name='header_top'}
    <div class="header-top">
      {if isset($fullwidth_hook.displayTop) AND $fullwidth_hook.displayTop == 0}
        <div class="container">
      {/if}
        <div class="inner">{hook h='displayTop'}</div>
      {if isset($fullwidth_hook.displayTop) AND $fullwidth_hook.displayTop == 0}
        </div>
      {/if}
    </div>
    {hook h='displayNavFullWidth'}
  {/block}
{/block}
