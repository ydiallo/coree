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
{block name='product_miniature_item'}
<article class="product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
  <div class="thumbnail-container">
    <div class="product-image">
      {block name='product_thumbnail'}
        {if isset($cfg_product_list_image) && $cfg_product_list_image}
          <div class="leo-more-info" data-idproduct="{$product.id_product}"></div>
        {/if}
        <a href="{$product.url}" class="thumbnail product-thumbnail">
          <img
            class="img-fluid"
            src = "{$product.cover.bySize.home_default.url}"
            alt = "{$product.cover.legend}"
            data-full-size-image-url = "{$product.cover.large.url}"
          > 
          {if isset($cfg_product_one_img) && $cfg_product_one_img}
            <span class="product-additional" data-idproduct="{$product.id_product}"></span>
          {/if}
        </a>
      {/block}
  
      {block name='product_flags'}
        <ul class="product-flags">
          {foreach from=$product.flags item=flag}
            <li class="product-flag {$flag.type}">{$flag.label}</li>
          {/foreach}
        </ul>
      {/block}

      <div class="functional-buttons clearfix">
        {block name='quick_view'}
          <div class="quickview{if !$product.main_variants} no-variants{/if} hidden-sm-down">
            <a
              href="#"
              class="quick-view btn-product"
              data-link-action="quickview"
            >
              <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
              <span class="leo-quickview-bt-content"> 
              <i class="icon-quick-view"></i> <span>{l s='Quick view' d='Shop.Theme.Actions'}</span>
                </span>
            </a>
          </div>
        {/block}
        {hook h='displayLeoCompareButton' product=$product}
        {hook h='displayLeoWishlistButton' product=$product}
        {hook h='displayLeoCartButton' product=$product}
      </div>
    </div>
    <div class="product-meta">
      {block name='product_name'}
        <h1 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h1>
      {/block}

      {hook h='displayLeoProductListReview' product=$product}

      {block name='product_price_and_shipping'}
        {if $product.show_price}
          <div class="product-price-and-shipping">
          
            {hook h='displayProductPriceBlock' product=$product type="before_price"}
            <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
              <span itemprop="priceCurrency" content="{$currency.iso_code}"></span><span itemprop="price" content="{$product.price_amount}">{$product.price}</span>
            </span>
            
            {if $product.has_discount}
              {hook h='displayProductPriceBlock' product=$product type="old_price"}

              <span class="regular-price">{$product.regular_price}</span>
              {if $product.discount_type === 'percentage'}
                <span class="discount-percentage">{$product.discount_percentage}</span>
              {/if}
            {/if}

            {hook h='displayProductPriceBlock' product=$product type='unit_price'}

            {hook h='displayProductPriceBlock' product=$product type='weight'}
          </div>
        {/if}
      {/block}

      <div class="highlighted-informations{if !$product.main_variants} no-variants{/if}">
        {block name='product_variants'}
          {if $product.main_variants}
            {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
          {/if}
        {/block}
      </div>
	
      {block name='product_reviews'}
         {hook h='displayProductListReviews' product=$product}
    	{/block}
      
      <div class="product-description">
        {block name='product_description_short'}
          <div class="product-description-short" itemprop="description">{$product.description_short|truncate:150:'...' nofilter}</div>
        {/block}
      </div>
      {hook h='displayLeoCartQuantity' product=$product}
      {hook h='displayLeoCartAttribute' product=$product}
    </div>
  </div>
</article>
{/block}
