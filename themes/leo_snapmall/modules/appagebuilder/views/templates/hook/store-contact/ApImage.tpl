{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright  2007-2017 Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<!-- @file modules\appagebuilder\views\templates\hook\ApImage -->
<div id="image-{$formAtts.form_id|escape:'html':'UTF-8'}" class="block {(isset($formAtts.class)) ? $formAtts.class : ''|escape:'html':'UTF-8'}">
	{($apLiveEdit)?$apLiveEdit:'' nofilter}{* HTML form , no escape necessary *}

    {if isset($formAtts.title) && $formAtts.title}
        <h4 class="title_block">{$formAtts.title nofilter}{* HTML form , no escape necessary *}</h4>
    {/if}
    <div class="block_content">
        <div class="block-left">
        	{($apLiveEditEnd)?$apLiveEditEnd:'' nofilter}{* HTML form , no escape necessary *}
            {if isset($formAtts.description) && $formAtts.description}
                <div class='image_description'>
        			{($formAtts.description) ? $formAtts.description:'' nofilter}{* HTML form , no escape necessary *}
                </div>
            {/if}
        </div>
        <div class="block-right">
            {if isset($formAtts.image) && $formAtts.image}
                {if isset($formAtts.url) && $formAtts.url}
                <a href="{$formAtts.url}{*full url can not escape*}" {(isset($formAtts.is_open) && $formAtts.is_open) ? 'target="_blank"' : ''|escape:'html':'UTF-8'}>
                {/if}
                <img src="{$path|escape:'html':'UTF-8'}{$formAtts.image|escape:'html':'UTF-8'}" class="img-fluid {(isset($formAtts.animation) && $formAtts.animation != 'none') ? 'has-animation' : ''|escape:'html':'UTF-8'}"
                    {if isset($formAtts.animation) && $formAtts.animation != 'none'} data-animation="{$formAtts.animation|escape:'html':'UTF-8'}" {/if}
                    {if $formAtts.animation_delay != ''} data-animation-delay="{$formAtts.animation_delay|escape:'html':'UTF-8'}" {/if}
                    title="{((isset($formAtts.title) && $formAtts.title) ? $formAtts.title : '')|escape:'html':'UTF-8'}"
                    alt="{((isset($formAtts.alt) && $formAtts.alt) ? $formAtts.alt : '')|escape:'html':'UTF-8'}"
                style=" width:{((isset($formAtts.width) && $formAtts.width) ? $formAtts.width : 'auto')|escape:'html':'UTF-8'}; 
                    height:{((isset($formAtts.height) && $formAtts.height) ? $formAtts.height : 'auto')|escape:'html':'UTF-8'}" />

                {if isset($formAtts.url) && $formAtts.url}
                </a>
                {/if}
            {/if}
            {if isset($formAtts.sub_title) && $formAtts.sub_title}
                <div class="sub-title-widget">{$formAtts.sub_title nofilter}</div>
            {/if}
        </div>
    </div>
</div>
