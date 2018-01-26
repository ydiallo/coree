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
<section class="bestseller-products clearfix block">
  	<h1 class="h1 products-section-title title_block">
  		{l s='Best Sellers' d='Shop.Theme.Global'}
  	</h1>
  	<div class="block_content">
	  	<div class="products">
		    {include file='catalog/_partials/miniatures/leo_col_products.tpl' products=$products}
	  	</div>
  		<a href="{$allBestSellers}" class="all-product-link float-xs-left btn btn-outline">
  			{l s='View All' d='Shop.Theme.Global'}
  		</a>
  	</div>
</section>
