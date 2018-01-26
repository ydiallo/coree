{*
 *  Leo Prestashop SliderShow for Prestashop 1.6.x
 *
 * @package   leosliderlayer
 * @version   3.0
 * @author    http://www.leotheme.com
 * @copyright Copyright (C) October 2013 LeoThemes.com <@emai:leotheme@gmail.com>
 *               <info@leotheme.com>.All rights reserved.
 * @license   GNU General Public License version 2
*}

{extends file=$layout}

{block name='content'}
	<section id="main">
		{if isset($error)}
			<div id="blogpage">
				<div class="blog-detail">
					<div class="alert alert-warning">{l s='Sorry, We are updating data, please come back later!!!!' d='Shop.Theme.Global'}</div>
				</div>
			</div>
		{else}	
		<div id="blogpage">
			<article class="blog-detail">
				{if $is_active}
					<h1 class="blog-title">{$blog->meta_title|escape:'html':'UTF-8'}</h1>
					<div class="blog-meta">
						{if $config->get('item_show_author','1')}
						<span class="blog-author">
							<span class="icon-author"></span> <span>{l s='Posted By' d='Shop.Theme.Global'}: </span>
							<a href="{$blog->author_link|escape:'html':'UTF-8'}" title="{$blog->author|escape:'html':'UTF-8'}">{$blog->author|escape:'html':'UTF-8'}</a>
						</span>
						{/if}
 
						{if $config->get('item_show_category','1')}
						<span class="blog-cat"> 
							<span class="icon-list"></span> <span>{l s='In' d='Shop.Theme.Global'}: </span> 
							<a href="{$blog->category_link|escape:'html':'UTF-8'}" title="{$blog->category_title|escape:'html':'UTF-8'}">{$blog->category_title|escape:'html':'UTF-8'}</a>
						</span>
						{/if}

						{if $config->get('item_show_created','1')}
						<span class="blog-created">
							<span class="icon-created"></span> <span>{l s='On' d='Shop.Theme.Global'}: </span> 
							<time class="date" datetime="{strtotime($blog->date_add)|date_format:"%Y"|escape:'html':'UTF-8'}">
								{assign var='blog_date' value=strtotime($blog->date_add)|date_format:"%A"}
								{l s=$blog_date d='Shop.Theme.Global'},	<!-- day of week -->
								{assign var='blog_month' value=strtotime($blog->date_add)|date_format:"%B"}
								{l s=$blog_month d='Shop.Theme.Global'}		<!-- month-->			
								{assign var='blog_day' value=strtotime($blog->date_add)|date_format:"%e"}	
								{l s=$blog_day d='Shop.Theme.Global'} <!-- day of month -->	
								{assign var='blog_year' value=strtotime($blog->date_add)|date_format:"%Y"}		
								{l s=$blog_year d='Shop.Theme.Global'}	<!-- year -->
							</time>
						</span>
						{/if}
						
						{if isset($blog_count_comment)&&$config->get('item_show_counter','1')}
						<span class="blog-ctncomment">
							<span class="icon-comment"></span> <span>{l s='Comment' d='Shop.Theme.Global'}:</span> 
							{$blog_count_comment|intval}
						</span>
						{/if}
						{if isset($blog->hits)&&$config->get('item_show_hit','1')}
						<span class="blog-hit">
							<span class="material-icons">&#xE87D;</span> <span>{l s='Hit' d='Shop.Theme.Global'}:</span>
							{$blog->hits|intval}
						</span>
						{/if}
					</div>

					{if $blog->preview_url && $config->get('item_show_image','1')}
						<div class="blog-image">
							<img src="{$blog->preview_url|escape:'html':'UTF-8'}" title="{$blog->meta_title|escape:'html':'UTF-8'}" class="img-fluid" />
						</div>
					{/if}

					<div class="blog-description">
						{if $config->get('item_show_description',1)}
							{$blog->description nofilter}{* HTML form , no escape necessary *}
						{/if}
						{$blog->content nofilter}{* HTML form , no escape necessary *}
					</div>
					
					

					{if trim($blog->video_code)}
					<div class="blog-video-code">
						<div class="inner ">
							{$blog->video_code nofilter}{* HTML form , no escape necessary *}
						</div>
					</div>
					{/if}

					<div class="social-share">
						 {include file="module:leoblog/views/templates/front/default/_social.tpl"}
					</div>
					{if $tags}
					<div class="blog-tags">
						<span>{l s='Tags:' d='Shop.Theme.Global'}</span>
					 
						{foreach from=$tags item=tag name=tag}
							 <a href="{$tag.link|escape:'html':'UTF-8'}" title="{$tag.tag|escape:'html':'UTF-8'}"><span>{$tag.tag|escape:'html':'UTF-8'}</span></a>
						{/foreach}
						 
					</div>
					{/if}

					{if !empty($samecats)||!empty($tagrelated)}
					<div class="extra-blogs row">
					{if !empty($samecats)}
						<div class="col-lg-6 col-md-6 col-xs-12">
							<h4>{l s='In Same Category' d='Shop.Theme.Global'}</h4>
							<ul>
							{foreach from=$samecats item=cblog name=cblog}
								<li><a href="{$cblog.link|escape:'html':'UTF-8'}">{$cblog.meta_title|escape:'html':'UTF-8'}</a></li>
							{/foreach}
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 col-xs-12">
							<h4>{l s='Related by Tags' d='Shop.Theme.Global'}</h4>
							<ul>
							{foreach from=$tagrelated item=cblog name=cblog}
								<li><a href="{$cblog.link|escape:'html':'UTF-8'}">{$cblog.meta_title|escape:'html':'UTF-8'}</a></li>
							{/foreach}
							</ul>
						</div>
					{/if}
					</div>
					{/if}

					{if $productrelated}

					{/if}
					{if $config->get('item_show_listcomment','1') == 1}
						<div class="blog-comment-block clearfix">
							{if $config->get('item_comment_engine','local')=='facebook'}
								{include file="module:leoblog/views/templates/front/default/_facebook_comment.tpl"}
							{elseif $config->get('item_comment_engine','local')=='diquis'}
								{include file="module:leoblog/views/templates/front/default/_diquis_comment.tpl"}
							
							{else}
								{include file="module:leoblog/views/templates/front/default/_local_comment.tpl"}
							{/if}
						
					{elseif $config->get('item_show_listcomment','1') == 0 && $config->get('item_show_formcomment','1') == 1}
						<div class="blog-comment-block clearfix">
							{include file="module:leoblog/views/templates/front/default/_local_comment.tpl"}
						</div>
					{/if}
				{else}
					<div class="alert alert-warning">{l s='Sorry, This blog is not avariable. May be this was unpublished or deleted.' d='Shop.Theme.Global'}</div>
				{/if}

			</article>
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
						
		</div>
	{/if}

{/block}