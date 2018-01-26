{* 
* @Module Name: Leo Feature
* @Website: leotheme.com.com - prestashop template provider
* @author Leotheme <leotheme@gmail.com>
* @copyright  2007-2017 Leotheme
* @description: Leo feature for prestashop 1.7: ajax cart, review, compare, wishlist at product list 
*}

<div class="button-container cart">
	<form action="{$link_cart}" method="post">
		<input type="hidden" name="token" value="{$static_token}">
		<input type="hidden" value="{$leo_cart_product.quantity}" class="quantity_product quantity_product_{$leo_cart_product.id_product}" name="quantity_product">
		<input type="hidden" value="{if isset($leo_cart_product.product_attribute_minimal_quantity) && $leo_cart_product.product_attribute_minimal_quantity>$leo_cart_product.minimal_quantity}{$leo_cart_product.product_attribute_minimal_quantity}{else}{$leo_cart_product.minimal_quantity}{/if}" class="minimal_quantity minimal_quantity_{$leo_cart_product.id_product}" name="minimal_quantity">
		<input type="hidden" value="{$leo_cart_product.id_product_attribute}" class="id_product_attribute id_product_attribute_{$leo_cart_product.id_product}" name="id_product_attribute">
		<input type="hidden" value="{$leo_cart_product.id_product}" class="id_product" name="id_product">
		<input type="hidden" name="id_customization" value="{if $leo_cart_product.id_customization}{$leo_cart_product.id_customization}{/if}" class="product_customization_id">
			
		<input type="hidden" class="input-group form-control qty qty_product qty_product_{$leo_cart_product.id_product}" name="qty" value="{if isset($leo_cart_product.wishlist_quantity)}{$leo_cart_product.wishlist_quantity}{else}{if $leo_cart_product.product_attribute_minimal_quantity && $leo_cart_product.product_attribute_minimal_quantity>$leo_cart_product.minimal_quantity}{$leo_cart_product.product_attribute_minimal_quantity}{else}{$leo_cart_product.minimal_quantity}{/if}{/if}" data-min="{if $leo_cart_product.product_attribute_minimal_quantity && $leo_cart_product.product_attribute_minimal_quantity>$leo_cart_product.minimal_quantity}{$leo_cart_product.product_attribute_minimal_quantity}{else}{$leo_cart_product.minimal_quantity}{/if}">
		  <button class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_{$leo_cart_product.id_product}{if !$leo_cart_product.add_to_cart_url} disabled{/if}" data-button-action="add-to-cart" type="submit">
			<span class="leo-loading cssload-speeding-wheel"></span>
			<span class="leo-bt-cart-content">
				<i class="material-icons shopping-cart">&#xE547;</i>
				<span>{l s='Add to cart' mod='leofeature'}</span>
			</span>
		  </button>
	</form>
</div>

