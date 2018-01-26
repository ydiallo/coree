{* 
* @Module Name: Leo Feature
* @Website: leotheme.com.com - prestashop template provider
* @author Leotheme <leotheme@gmail.com>
* @copyright  2007-2017 Leotheme
* @description: Leo feature for prestashop 1.7: ajax cart, review, compare, wishlist at product list 
*}
{if $product_price_attribute.show_price}
	
		{if $product_price_attribute.has_discount}
		  {hook h='displayProductPriceBlock' product=$product_price_attribute type="old_price"}

		  <span class="regular-price">{$product_price_attribute.regular_price}</span>
		  {if $product_price_attribute.discount_type === 'percentage'}
			<span class="discount-percentage">{$product_price_attribute.discount_percentage}</span>
		  {/if}
		{/if}

		{hook h='displayProductPriceBlock' product=$product_price_attribute type="before_price"}

		<span itemprop="price" class="price">{$product_price_attribute.price}</span>

		{hook h='displayProductPriceBlock' product=$product_price_attribute type='unit_price'}

		{hook h='displayProductPriceBlock' product=$product_price_attribute type='weight'}
	
  
{/if}