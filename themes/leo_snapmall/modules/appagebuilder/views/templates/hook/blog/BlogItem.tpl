{*
 *  @Module Name: AP Page Builder
 *  @Website: apollotheme.com - prestashop template provider
 *  @author Apollotheme <apollotheme@gmail.com>
 *  @copyright  2007-2016 Apollotheme
 *  @description: ApPageBuilder is module help you can build content for your  
*}
<!-- @file modules\appagebuilder\views\templates\hook\BlogItem -->
<div class="blog-container" itemscope itemtype="https://schema.org/Blog">
    <div class="left-block">
        <div class="blog-image-container">
            <a class="blog_img_link" href="{$blog.link|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}" itemprop="url">
				{if isset($formAtts.bleoblogs_sima) && $formAtts.bleoblogs_sima}
					<img class="img-fluid" src="{if (isset($blog.preview_thumb_url) && $blog.preview_thumb_url != '')}{$blog.preview_thumb_url}{else}{$blog.preview_url}{/if}{*full url can not escape*}" 
						 alt="{if !empty($blog.legend)}{$blog.legend|escape:'html':'UTF-8'}{else}{$blog.title|escape:'html':'UTF-8'}{/if}" 
						 title="{if !empty($blog.legend)}{$blog.legend|escape:'html':'UTF-8'}{else}{$blog.title|escape:'html':'UTF-8'}{/if}" 
						 {if isset($formAtts.bleoblogs_width)}width="{$formAtts.bleoblogs_width|escape:'html':'UTF-8'}" {/if}
						 {if isset($formAtts.bleoblogs_height)} height="{$formAtts.bleoblogs_height|escape:'html':'UTF-8'}"{/if}
						 itemprop="image" />
				{/if}
            </a>
        </div>
    </div>
    <div class="right-block">
    	{if isset($formAtts.bleoblogs_scre) && $formAtts.bleoblogs_scre}
			<div class="created">
				<time class="date" datetime="{strtotime($blog.date_add)|date_format:"%Y"}">
					<span class="day">
						{assign var='blog_day' value=strtotime($blog.date_add)|date_format:"%d"}
						{l s=$blog_day d='Shop.Theme.Global'}
					</span>
					<span class="month">/
						{assign var='blog_month' value=strtotime($blog.date_add)|date_format:"%m"}
						{l s=$blog_month d='Shop.Theme.Global'}
					</span>
					<span class="year">/
						{assign var='blog_year' value=strtotime($blog.date_add)|date_format:"%Y"}						
						{l s=$blog_year d='Shop.Theme.Global'}
					</span>
				</time>
			</div>
		{/if}
        {if isset($formAtts.show_title) && $formAtts.show_title}
        	<h5 class="blog-title" itemprop="name"><a href="{$blog.link}{*full url can not escape*}" title="{$blog.title|escape:'html':'UTF-8'}">{$blog.title|strip_tags:'UTF-8'|truncate:80:'...'}</a></h5>
        {/if}
        <div class="blog-meta">
			{if isset($formAtts.bleoblogs_saut) && $formAtts.bleoblogs_saut}
				<span class="author">
					<i class="icon-author ti-pencil-alt"></i><span>{$blog.author|escape:'html':'UTF-8'}</span>
				</span>
			{/if}		
			{* {if isset($formAtts.bleoblogs_scre) && $formAtts.bleoblogs_scre}
				<span class="created">
					<i class="icon-created"></i>
					<time class="date" datetime="{strtotime($blog.date_add)|date_format:"%Y"}">
						<span class="day">
							{assign var='blog_day' value=strtotime($blog.date_add)|date_format:"%d"}
							{l s=$blog_day d='Shop.Theme.Global'}
						</span>
						<span class="month">						
							{assign var='blog_month' value=strtotime($blog.date_add)|date_format:"%b"}
							{l s=$blog_month d='Shop.Theme.Global'}
						</span>
						<span class="year">,
							{assign var='blog_year' value=strtotime($blog.date_add)|date_format:"%Y"}						
							{l s=$blog_year d='Shop.Theme.Global'}
						</span>
					</time>
				</span>
			{/if} *}
			{if isset($formAtts.bleoblogs_scat) && $formAtts.bleoblogs_scat}
				<span class="cat"> 
					<i class="icon-list ti-view-list"></i>
					<a href="{$blog.category_link}{*full url can not escape*}" title="{$blog.category_title|escape:'html':'UTF-8'}">{$blog.category_title|escape:'html':'UTF-8'}</a>
				</span>
			{/if}
			{if isset($formAtts.bleoblogs_scoun) && $formAtts.bleoblogs_scoun}
				<span class="nbcomment">
					<i class="ti-comment icon-comment"></i><span>{$blog.comment_count|intval} {* {l s='Comment' d='Shop.Theme.Global'} *}</span>
				</span>
			{/if}
			
			{if isset($formAtts.bleoblogs_shits) && $formAtts.bleoblogs_shits}
				<span class="hits">
					<i class="icon-hits ti-heart"></i><span>{$blog.hits|intval} {* {l s='Hits' d='Shop.Theme.Global'} *}</span>
				</span>	
			{/if}
		</div>
		{if isset($formAtts.show_desc) && $formAtts.show_desc}
	        <div class="blog-desc" itemprop="description">
	            {$blog.description|strip_tags:'UTF-8'|truncate:160:'...'}
	        </div>
        {/if}
        {if isset($formAtts.show_desc) && $formAtts.show_desc}
	        <a class="btn-more btn btn-primary" href="{$blog.link}{*full url can not escape*}">
	            {l s='Read more' d='Shop.Theme.Global'}
	        </a>
        {/if}
    </div>
	<div class="hidden-xl-down hidden-xl-up datetime-translate">
		{l s='Sunday' d='Shop.Theme.Global'}
		{l s='Monday' d='Shop.Theme.Global'}
		{l s='Tuesday' d='Shop.Theme.Global'}
		{l s='Wednesday' d='Shop.Theme.Global'}
		{l s='Thursday' d='Shop.Theme.Global'}
		{l s='Friday' d='Shop.Theme.Global'}
		{l s='Saturday' d='Shop.Theme.Global'}
		
		{l s='January' d='Shop.Theme.Global'}
		{l s='February' d='Shop.Theme.Global'}
		{l s='March' d='Shop.Theme.Global'}
		{l s='April' d='Shop.Theme.Global'}
		{l s='May' d='Shop.Theme.Global'}
		{l s='June' d='Shop.Theme.Global'}
		{l s='July' d='Shop.Theme.Global'}
		{l s='August' d='Shop.Theme.Global'}
		{l s='September' d='Shop.Theme.Global'}
		{l s='October' d='Shop.Theme.Global'}
		{l s='November' d='Shop.Theme.Global'}
		{l s='December' d='Shop.Theme.Global'}
		
		{l s='st' d='Shop.Theme.Global'}
		{l s='nd' d='Shop.Theme.Global'}
		{l s='rd' d='Shop.Theme.Global'}
		{l s='th' d='Shop.Theme.Global'}
	</div>
	
</div>

