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
<section class="featured-products clearfix block button-middle button-hover">
  	<h1 class="products-section-title title_block">
    	{l s='Popular Products' d='Shop.Theme.Global'}
  	</h1>
    {assign var="itemscolumn" value=1}
    {assign var="itempercolumn" value=4}
    {assign var="itemsDesktop" value=4}
    {assign var="itemsDesktopSmall" value=3}
    {assign var="itemsTablet" value=2}
    {assign var="itemsMobile" value=1}
  	<div class="block_content">
	  	<div class="products">
        <div class="owl-row">
          <div class="timeline-wrapper prepare"
            data-item="{$itempercolumn}" 
            data-xl="{$itemsDesktop}" 
            data-lg="{$itemsDesktop}" 
            data-md="{$itemsDesktopSmall}" 
            data-sm="{$itemsTablet}" 
            data-m="{$itemsMobile}"
          >
            {for $foo=1 to $itempercolumn}     
              <div class="timeline-parent">
                {for $foo_child=1 to $itemscolumn}
                  <div class="timeline-item ">
                    <div class="animated-background">         
                      <div class="background-masker content-top"></div>             
                      <div class="background-masker content-second-line"></div>             
                      <div class="background-masker content-third-line"></div>              
                      <div class="background-masker content-fourth-line"></div>
                    </div>
                  </div>
                {/for}
              </div>
            {/for}
          </div>
          <div id="featured-products" class="owl-carousel owl-theme owl-loading">
            {foreach from=$products item="product"}
              <div class="item{if $smarty.foreach.mypLoop.index == 0} first{/if}">
                {block name='product_miniature'}
                  {if isset($productProfileDefault) && $productProfileDefault}
                    {* exits THEME_NAME/profiles/profile_name.tpl -> load template*}
                    {hook h='displayLeoProfileProduct' product=$product profile=$productProfileDefault}
                  {else}
                    {include file="catalog/_partials/miniatures/product.tpl" product=$product}
                  {/if}
                {/block}
              </div>
            {/foreach}
          </div>
        </div>
      </div>
	  	<a class="float-xs-right btn btn-outline btn-view-all" href="{$allProductsLink}">
	    	{l s='All products' d='Shop.Theme.Global'}
	  	</a>
	</div>
</section>
<script type="text/javascript">
  ap_list_functions_loaded.push(
    function(){
      if($('#category-products').parents('.tab-pane').length)
      {   
          if(!$('#category-products').parents('.tab-pane').hasClass('active'))
          {
              var width_owl_active_tab = $('#category-products').parents('.tab-pane').siblings('.active').find('.owl-carousel').width();    
              $('#category-products').width(width_owl_active_tab);
          }
      }
      $('#featured-products').owlCarousel({
        {if isset($IS_RTL) && $IS_RTL}
          direction:'rtl',
        {else}
          direction:'ltr',
        {/if}
        items : {$itempercolumn},
        itemsCustom : false,
        itemsDesktop : [1200,{$itemsDesktop}],
        itemsDesktopSmall : [992, {$itemsDesktopSmall}],
        itemsTablet : [768, {$itemsTablet}],
        itemsMobile : [480, {$itemsMobile}],
        singleItem : false,         // true : show only 1 item
        itemsScaleUp : false,
        slideSpeed : 200,  //  change speed when drag and drop a item
        paginationSpeed :800, // change speed when go next page

        autoPlay : false,   // time to show each item
        stopOnHover : false,
        navigation : true,
        navigationText : ["&lsaquo;", "&rsaquo;"],

        scrollPerPage :true,
        responsive :true,
        
        pagination : false,
        paginationNumbers : false,
        
        addClassActive : true,
        
        mouseDrag : true,
        touchDrag : true,

        addClassActive :    true,
        afterInit: OwlLoaded,
        afterAction : SetOwlCarouselFirstLast,

      });
    }
  ); 
  function OwlLoaded(el){
    el.removeClass('owl-loading').addClass('owl-loaded').parents('.owl-row').addClass('hide-loading');
    if ($(el).parents('.tab-pane').length && !$(el).parents('.tab-pane').hasClass('active'))
        el.width('100%');
  };
</script>