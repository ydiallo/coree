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

<div class="currency-selector dropdown js-dropdown popup-over" id="currency-selector-label">
  <a href="javascript:void(0)" data-toggle="dropdown" class="popup-title"  title="{l s='Currency' d='Shop.Theme.Global'}" aria-label="{l s='Currency dropdown' d='Shop.Theme.Global'}">
    <span class="hidden-xs-up">{l s='Currency:' d='Shop.Theme.Global'}</span>
    <span class="_gray-darker">{$current_currency.sign} {$current_currency.iso_code}</span>
    <i class="icon-arrow-down fa fa-sort-down"></i>
  </a>
  <ul class="popup-content dropdown-menu" aria-labelledby="currency-selector-label">  
  {foreach from=$currencies item=currency}
  <li {if $currency.current} class="current" {/if}>
    <a title="{$currency.name}" rel="nofollow" href="{$currency.url}" class="dropdown-item">{$currency.sign} {$currency.iso_code}</a>
  </li>
  {/foreach}
  </ul>
</div>