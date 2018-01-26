{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright  2007-2016 Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<!-- @file modules\appagebuilder\views\templates\hook\ApBlockCarouselItem -->
<div data-ride="carousel" class="carousel slide" id="{$carouselName|escape:'html':'UTF-8'}">
	{$NumCount = count($formAtts.slides)}
	{if $NumCount > $itemsperpage}
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
	<div class="carousel-inner">
	{$Num=array_chunk($formAtts.slides, $itemsperpage)}
	{foreach from=$Num item=sliders name=val}
		<div class="carousel-item {if $smarty.foreach.val.first}active{/if}">
			{foreach from=$sliders item=slider name="sliders"}
				{if $nbItemsPerLine == 1 || $smarty.foreach.sliders.first || $smarty.foreach.sliders.iteration%$nbItemsPerLine == 1}
					<div class="row">
				{/if}
				<div class="{$scolumn|escape:'html':'UTF-8'}">
					<div class="block-carousel-container">
						<div class="left-testimonials">
							{if isset($slider.descript) && !empty($slider.descript)}
								<div class="descript">{$slider.descript|rtrim nofilter}{* HTML form , no escape necessary *}</div>
							{/if}
						</div>
						<div class="right-testimonials">
							{if $slider.link}
							<a title="{l s='%s' sprintf=[$slider.title] d='Shop.Theme.Global'}" {if $formAtts.is_open}target="_blank"{/if} href="{$slider.link}{*full link can not escape*}">
							{/if}
								{if isset($slider.image) && !empty($slider.image)}
									<img class="img-fluid" src="{$slider.image}{*full link can not escape*}" alt="{if isset($slider.title)}{$slider.title|escape:'html':'UTF-8'}{/if}"/>
								{/if}
							{if $slider.link}{*full link can not escape*}
							</a>
							{/if}
							{if isset($slider.title) && !empty($slider.title)}
								<div class="title">{$slider.title|escape:'html':'UTF-8' nofilter}</div>
							{/if}
						</div>
					</div>
				</div>
				{if $nbItemsPerLine == 1 || $smarty.foreach.sliders.last || $smarty.foreach.sliders.iteration%$nbItemsPerLine == 0}
					</div>
				{/if}
			{/foreach}
		</div>
	{/foreach}
</div>
</div>
</div>
