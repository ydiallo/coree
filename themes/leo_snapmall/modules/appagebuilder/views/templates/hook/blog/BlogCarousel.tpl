{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright  2007-2016 Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<!-- @file modules\appagebuilder\views\templates\hook\BlogCarousel -->
<div class="carousel slide" id="{$carouselName|escape:'html':'UTF-8'}">
	{($apLiveEdit)?$apLiveEdit:'' nofilter}{* HTML form , no escape necessary *}
    {assign var="condition" value=false}
    {if count($products) > $itemsperpage}
        {$condition = true}
    {/if}
    <div class="carousel-inner">
        {$mproducts=array_chunk($products, $itemsperpage)}
        {foreach from=$mproducts item=products name=mypLoop}
            <div class="carousel-item {if $smarty.foreach.mypLoop.first}active{/if}">
                <ul class="product_list grid">
                {foreach from=$products item=blog name=products}
                    <li class="ajax_block_product product_block {$scolumn|escape:'html':'UTF-8'} {if $smarty.foreach.products.first}first_item{elseif $smarty.foreach.products.last}last_item{/if}">
                        {include file='./BlogItem.tpl'}
                    </li>
                {/foreach}
                </ul>
            </div>		
        {/foreach}
    </div>
    {if $condition}
        <div class="direction">
            <a class="carousel-control left" href="#{$carouselName|escape:'html':'UTF-8'}" data-slide="prev">
                <span class="icon-prev hidden-xs" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control right" href="#{$carouselName|escape:'html':'UTF-8'}" data-slide="next">
                <span class="icon-next" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    {/if}
	{($apLiveEditEnd)?$apLiveEditEnd:'' nofilter}{* HTML form , no escape necessary *}

</div>
