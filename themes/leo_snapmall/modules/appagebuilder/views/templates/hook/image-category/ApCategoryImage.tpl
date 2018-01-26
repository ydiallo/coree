{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright  2007-2017 Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<!-- @file modules\appagebuilder\views\templates\hook\ApCategoryImage -->
{function name=apmenu level=0}
<ul class="level{$level|intval} {if $level == 0} ul-{$random|escape:'html':'UTF-8'}{/if}">
{foreach $data as $category}
	{if isset($category.children) && is_array($category.children)}
	<li class="cate_{$category.id_category|intval}" >
		<div class="cate_content">
			<div>
				
				<div class="cover-img">
					{if isset($category.image)}
						<a href="{$link->getCategoryLink($category.id_category, $category.link_rewrite)|escape:'html':'UTF-8'}" class="btn" title="{l s='Visit Shop' d='Shop.Theme.Global'}">
							<img class="img-fluid" src='{$category["image"]|escape:'html':'UTF-8'}' alt='{$category["name"]|escape:'html':'UTF-8'}' 
								{if $formAtts.showicons == 0 || ($level gt 0 && $formAtts.showicons == 2)} style="display:none"{/if}/>
						</a>
					{/if}
					<span class="btn-meta">
						<a href="{$link->getCategoryLink($category.id_category, $category.link_rewrite)|escape:'html':'UTF-8'}" class="btn" title="{l s='Visit Shop' d='Shop.Theme.Global'}">{l s='Visit Shop' d='Shop.Theme.Global'}</a>
					</span>
				</div>
				<div class="meta-cate">
					<div class="box-cate">
						<h3 class="cate-name"><a href="{$link->getCategoryLink($category.id_category, $category.link_rewrite)|escape:'html':'UTF-8'}" title="{$category.name|escape:'html':'UTF-8'}">{$category.name|escape:'html':'UTF-8'}</a></h3>
					</div>
				</div>
			</div>
		</div>
		{apmenu data=$category.children level=$level+1}
	</li>
	{else}
	<li class="cate_{$category.id_category|intval}">
		<div class="cate_content">
			<div>
				
				<div class="cover-img">
					{if isset($category.image)}
						<a href="{$link->getCategoryLink($category.id_category, $category.link_rewrite)|escape:'html':'UTF-8'}" class="btn" title="{l s='Visit Shop' d='Shop.Theme.Global'}">
							<img class="img-fluid" src='{$category["image"]|escape:'html':'UTF-8'}' alt='{$category["name"]|escape:'html':'UTF-8'}' 
								{if $formAtts.showicons == 0 || ($level gt 0 && $formAtts.showicons == 2)} style="display:none"{/if}/>
						</a>
					{/if}
					<span class="btn-meta">
						<a href="{$link->getCategoryLink($category.id_category, $category.link_rewrite)|escape:'html':'UTF-8'}" class="btn" title="{l s='Visit Shop' d='Shop.Theme.Global'}">{l s='Visit Shop' d='Shop.Theme.Global'}</a>
					</span>
				</div>
				<div class="meta-cate">
					<div class="box-cate">
						<h3 class="cate-name"><a href="{$link->getCategoryLink($category.id_category, $category.link_rewrite)|escape:'html':'UTF-8'}" title="{$category.name|escape:'html':'UTF-8'}">{$category.name|escape:'html':'UTF-8'}</a></h3>
					</div>
				</div>
			</div>
		</div>
	</li>
	{/if}
{/foreach}
</ul>
{/function}

{if isset($categories)}
<div class="widget-category_image block {if isset($formAtts.class)}{$formAtts.class|escape:'html':'UTF-8'}{/if}">
	{($apLiveEdit)?$apLiveEdit:'' nofilter}{* HTML form , no escape necessary *}
	{if isset($formAtts.title) && !empty($formAtts.title)}
	<h4 class="title_block">
		{$formAtts.title|escape:'html':'UTF-8'}
	</h4>
	{/if}
    {if isset($formAtts.sub_title) && $formAtts.sub_title}
        <div class="sub-title-widget">{$formAtts.sub_title nofilter}</div>
    {/if}
	<div class="block_content">
		{foreach from = $categories key=key item =cate}
			{apmenu data=$cate}
		{/foreach}
		{if $formAtts.limit > 1}
			<div id="view_all_wapper_{$random|escape:'html':'UTF-8'}" class="view_all_wapper hide">
				<ul>
					<li class="cate_view_all view_all"><a class="btn btn-primary" href="javascript:void(0)">{l s='Discover All' d='Shop.Theme.Global'}</a></li>
				</ul>
			</div> 
		{/if}
	</div>
	{($apLiveEditEnd)?$apLiveEditEnd:'' nofilter}{* HTML form , no escape necessary *}
</div>
{/if}
<script type="text/javascript">
{literal} 
	ap_list_functions.push(function(){
		$(".view_all_wapper").hide();
		var limit = {/literal}{$formAtts.limit|intval}{literal};
		var level = {/literal}{$formAtts.cate_depth|intval}{literal} - 1;
		$("ul.ul-{/literal}{$random|escape:'html':'UTF-8'}, ul.ul-{$random|escape:'html':'UTF-8'} ul"{literal}).each(function(){
			var element = $(this).find(">li").length;
			var count = 0;
			$(this).find(">li").each(function(){
				count = count + 1;
				if(count > limit){
					// $(this).remove();
					$(this).hide();
				}
			});
			if(element > limit) {
				view = $(".view_all","#view_all_wapper_{/literal}{$random|escape:'html':'UTF-8'}"){literal}.clone(1);
				// view.appendTo($(this).find("ul.level" + level));
				view.appendTo($(this));
				var href = $(this).closest("li").find('a:first-child').attr('href');
				$(view).find('a:first-child').attr("href", href);
			}
		})
	});
{/literal}
</script>