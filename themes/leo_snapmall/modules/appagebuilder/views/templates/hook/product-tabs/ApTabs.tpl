{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright  2007-2017 Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
 <!-- @file modules\appagebuilder\views\templates\hook\ApTabs -->
{if $tab_name == 'ApTabs'}
<script type="text/javascript">
    ap_list_functions.push(function(){
        {if isset($formAtts.fade_effect) && $formAtts.fade_effect}
            // ACTION USE EFFECT
            $("#{$formAtts.id|escape:'html':'UTF-8'} .tab-pane").addClass("fade");
        {/if}
            
        {if $formAtts.active_tab >= 0}
            // ACTION SET ACTIVE
            $('#{$formAtts.id|escape:'html':'UTF-8'} .nav a:eq({$formAtts.active_tab|escape:'html':'UTF-8'})').trigger('click');
        {/if}

        $(document).ready(function() {
            {if isset($formAtts.is_toggle) && $formAtts.is_toggle}
                $("#{$formAtts.id|escape:'html':'UTF-8'} .nav a").click(function (e) {
                    e.preventDefault();
                    if(!$(this).hasClass("active")) {
                        $("#{$formAtts.id|escape:'html':'UTF-8'} .nav-tabs li a").removeClass("active");
                    }
                    $(this).toggleClass("active");
                    if($(this).hasClass("active")) {
                        $("#{$formAtts.id|escape:'html':'UTF-8'} .tab-pane").addClass("in");
                        $($(this).attr("href")).addClass("in active");
                    } else {
                        $($(this).attr("href")).removeClass("in active");
                    }
                });
            {else if}
                $('#{$formAtts.id|escape:'html':'UTF-8'} .nav a').click(function (e) {
                    e.preventDefault();
                    $(this).tab('show');
                });
            {/if}

            {if $formAtts.active_tab >= 0}
                apTabHref = $('#{$formAtts.id|escape:'html':'UTF-8'} .nav a:eq({$formAtts.active_tab|escape:'html':'UTF-8'})').tab('show');
            {/if}

            {if isset($formAtts.fade_effect) && $formAtts.fade_effect}
                $("#{$formAtts.id|escape:'html':'UTF-8'} .tab-pane").addClass("fade");
                $($(apTabHref).attr("href")).addClass("in");
            {/if}
            
            ////js toggle tabs
            $('#{$formAtts.id|escape:'html':'UTF-8'} ul.nav-tabs li a').click(function(){
                if($(this).hasClass('active'))
                {
                    var tab_active = $(this).attr('data-tab');;
                    $('#{$formAtts.id|escape:'html':'UTF-8'} .product-tab-option option[value="' + tab_active + '"]').prop('selected', true);
                }
            });
            
            $('#{$formAtts.id|escape:'html':'UTF-8'} .product-tab-option').change(function(){
                var option_checked = $(this).find(':selected').attr('value');
                $('#{$formAtts.id|escape:'html':'UTF-8'} ul.nav-tabs li a[data-tab="' + option_checked + '"]').trigger('click');
            });

            //show tab when first load mobile
            $('#{$formAtts.id|escape:'html':'UTF-8'} ul.nav-tabs li').each(function(){
                if($(this).hasClass('active')){
                    $('#{$formAtts.id|escape:'html':'UTF-8'} .product-tab-option option.' + $(this).find('a').attr('value')).attr('selected','selected');
                }
            });

        });
    });
</script>
<div{if isset($formAtts.id)} id="{$formAtts.id|escape:'html':'UTF-8'}"{/if} class="ApTab {(isset($formAtts.class)) ? $formAtts.class : ''|escape:'html':'UTF-8'}">

    {($apLiveEdit)?$apLiveEdit:'' nofilter}{* HTML form , no escape necessary *}

    {if isset($formAtts.title) && $formAtts.title}
        <h4 class="title_block">{$formAtts.title|escape:'html':'UTF-8'}</h4>
    {/if}
    <!-- toggle tab -->
    <p class="box-select">
        <select class="product-tab-option form-control">
            {foreach from=$subTabContent item=subTab name=tab_option}
                <option  value="{$subTab.id|escape:'html':'UTF-8'}" {if $smarty.foreach.tab_option.index == 0}selected="selected"{/if}>{$subTab.title|escape:'html':'UTF-8'}</option>
            {/foreach}
        </select>
    </p>
    <!-- end toggle tab -->
    {if $formAtts.tab_type =='tabs-left'}
        <div class="block_content">
            <div class="row">
                <ul class="nav nav-tabs col-xl-3 col-lg-4 col-md-12 col-sm-12 col-xs-12 col-sp-12" role="tablist">
                    {foreach from=$subTabContent item=subTab}
                        <li class="nav-item {(isset($subTab.css_class)) ? $subTab.css_class : ''|escape:'html':'UTF-8'}">
                            <a href="#{$subTab.id|escape:'html':'UTF-8'}" class="nav-link {$subTab.form_id|escape:'html':'UTF-8'}" role="tab" data-tab="{$subTab.id|escape:'html':'UTF-8'}" data-toggle="tab">
                                <div class="left-block">
                                    {if isset($subTab.image) && $subTab.image}<img class="img-fluid" src="{$path}{$subTab.image|escape:'html':'UTF-8'}" alt="{$subTab.title}"/>{/if}
                                </div>
                                <div class="right-block">
                                    {$subTab.title|escape:'html':'UTF-8'}
                                    {if isset($subTab.sub_title) && $subTab.sub_title}
                                        <span class="sub-title-widget">{$subTab.sub_title nofilter}</span>
                                    {/if}
                                </div>
                            </a>
                        </li>
                    {/foreach}
                </ul>
                <div class="tab-content col-xl-9 col-lg-8 col-md-12 col-sm-12 col-xs-12 col-sp-12">
                    {$apContent nofilter}{* HTML form , no escape necessary *}
                </div>
            </div>
        </div>
    {/if}
    {if $formAtts.tab_type =='tabs-right'}
        <div class="block_content">
            <div class="row">
                <div class="tab-content col-xl-9 col-lg-8 col-md-12 col-sm-12 col-xs-12 col-sp-12">
                    {$apContent nofilter}{* HTML form , no escape necessary *}
                </div>
                <ul class="nav nav-tabs col-xl-3 col-lg-4 col-md-12 col-sm-12 col-xs-12 col-sp-12" role="tablist">
                    {foreach from=$subTabContent item=subTab}
                        <li class="nav-item {(isset($subTab.css_class)) ? $subTab.css_class : ''|escape:'html':'UTF-8'}">
                            <a href="#{$subTab.id|escape:'html':'UTF-8'}" class="nav-link {$subTab.form_id|escape:'html':'UTF-8'}" role="tab" data-tab="{$subTab.id|escape:'html':'UTF-8'}" data-toggle="tab">
                                <div class="left-block">
                                    {if isset($subTab.image) && $subTab.image}<img class="img-fluid" src="{$path}{$subTab.image|escape:'html':'UTF-8'}" alt="{$subTab.title}"/>{/if}
                                </div>
                                <div class="right-block">
                                    {$subTab.title|escape:'html':'UTF-8'}
                                    {if isset($subTab.sub_title) && $subTab.sub_title}
                                        <span class="sub-title-widget">{$subTab.sub_title nofilter}</span>
                                    {/if}
                                </div>
                            </a>
                        </li>
                    {/foreach}
                </ul>
            </div>
        </div>
    {/if}
    {if $formAtts.tab_type =='tabs-below'}
        <div class="block_content">
            <div class="tab-content">
                {$apContent nofilter}{* HTML form , no escape necessary *}
            </div>
            <ul class="nav nav-tabs" role="tablist">
                {foreach from=$subTabContent item=subTab}
                    <li class="nav-item {(isset($subTab.css_class)) ? $subTab.css_class : ''|escape:'html':'UTF-8'}">
                        <a href="#{$subTab.id|escape:'html':'UTF-8'}" class="nav-link {$subTab.form_id|escape:'html':'UTF-8'}" role="tab" data-tab="{$subTab.id|escape:'html':'UTF-8'}" data-toggle="tab">
                            <div class="left-block">
                                {if isset($subTab.image) && $subTab.image}<img class="img-fluid" src="{$path}{$subTab.image|escape:'html':'UTF-8'}" alt="{$subTab.title}"/>{/if}
                            </div>
                            <div class="right-block">
                                {$subTab.title|escape:'html':'UTF-8'}
                                {if isset($subTab.sub_title) && $subTab.sub_title}
                                    <span class="sub-title-widget">{$subTab.sub_title nofilter}</span>
                                {/if}
                            </div>
                        </a>
                    </li>
                {/foreach}
            </ul>
        </div>
    {/if}
    {if $formAtts.tab_type =='tabs-top'}
        <ul class="nav nav-tabs " role="tablist">
            {foreach from=$subTabContent item=subTab}
                <li class="nav-item {(isset($subTab.css_class)) ? $subTab.css_class : ''|escape:'html':'UTF-8'}">
                    <a href="#{$subTab.id|escape:'html':'UTF-8'}" class="nav-link {$subTab.form_id|escape:'html':'UTF-8'}" role="tab" data-tab="{$subTab.id|escape:'html':'UTF-8'}" data-toggle="tab">
                        <div class="left-block">
                            {if isset($subTab.image) && $subTab.image}<img class="img-fluid" src="{$path}{$subTab.image|escape:'html':'UTF-8'}" alt="{$subTab.title}"/>{/if}
                        </div>
                        <div class="right-block">
                            {$subTab.title|escape:'html':'UTF-8'}
                            {if isset($subTab.sub_title) && $subTab.sub_title}
                                <span class="sub-title-widget">{$subTab.sub_title nofilter}</span>
                            {/if}
                        </div>
                    </a>
                </li>
            {/foreach}
        </ul>
        <div class="clearfix border-title"></div>
        <div class="block_content">
            <div class="tab-content">
                {$apContent nofilter}{* HTML form , no escape necessary *}
            </div>
        </div>
    {/if}
    {($apLiveEditEnd)?$apLiveEditEnd:'' nofilter}{* HTML form , no escape necessary *}
</div>
{/if}
{if $tab_name == 'ApTab'}
    <div id="{$tabID|escape:'html':'UTF-8'}" class="tab-pane">
        {$apContent nofilter}{* HTML form , no escape necessary *}
    </div>
{/if}
