{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright  2007-2016 Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<!-- @file modules\appagebuilder\views\templates\hook\ApBlockCarousel -->
{if isset($formAtts.lib_has_error) && $formAtts.lib_has_error}
    {if isset($formAtts.lib_error) && $formAtts.lib_error}
        <div class="alert alert-warning leo-lib-error">{$formAtts.lib_error}</div>
    {/if}
{else}
    <div class="block block_carousel exclusive appagebuilder {(isset($formAtts.class)) ? $formAtts.class : ''|escape:'html':'UTF-8'}">
        {($apLiveEdit)?$apLiveEdit:'' nofilter}{* HTML form , no escape necessary *}
        {if isset($formAtts.title) && $formAtts.title}
            <h4 class="title_block">{$formAtts.title|escape:'html':'UTF-8'}</h4>
        {/if}
        {if isset($formAtts.sub_title) && $formAtts.sub_title}
            <div class='sub-title-widget'>{$formAtts.sub_title nofilter}</div>
        {/if}
        {if isset($formAtts.description) && $formAtts.description}
            <p>{$formAtts.description nofilter}{* HTML form , no escape necessary *}</p>
        {/if} 
        <div class="block_content">
            {if !empty($formAtts.slides)}
                {if $formAtts.carousel_type == 'boostrap'}
                    {include file='./ApBlockCarouselItem.tpl'}
                {else}
                    {include file='./ApBlockOwlCarouselItem.tpl'}
                {/if}
            {else}
                <p class="alert alert-info">{l s='No slide at this time.' d='Shop.Theme.Global'}</p>
            {/if}
        </div>
        {($apLiveEditEnd)?$apLiveEditEnd:'' nofilter}{* HTML form , no escape necessary *}
    </div>
{/if}