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
{block name='brand_miniature_item'}
  <li class="brand">
    <div class="brand-img col-xl-3 col-lg-3 col-xs-12"><a href="{$brand.url}"><img src="{$brand.image}" alt="{$brand.name}"></a></div>
    <div class="brand-infos col-xl-6 col-lg-6 col-xs-12">
      <h3><a href="{$brand.url}">{$brand.name}</a></h3>
      {$brand.text nofilter}
    </div>
    <div class="brand-products col-xl-3 col-lg-3 col-xs-12">
      <p><a href="{$brand.url}">{$brand.nb_products}</a></p>
      <a href="{$brand.url}" class="btn btn-sm btn-primary">{l s='View products' d='Shop.Theme.Actions'}</a>
    </div>
  </li>
{/block}
