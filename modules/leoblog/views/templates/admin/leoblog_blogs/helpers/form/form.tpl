{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright  2007-2016 Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_theme_configuration\helpers\form\form.tpl -->
{extends file="helpers/form/form.tpl"}
{block name="input"}
	{if $input.type == 'date_leoblog'}
		<div class="row">
			<div class="input-group col-lg-4">
				<input
					id="{if isset($input.id)}{$input.id}{else}{$input.name}{/if}"
					type="text"
					data-hex="true"
					{if isset($input.class)} class="{$input.class}"
					{else}class="datepicker"{/if}
					name="{$input.name}"
					value="{if isset($input.default) && $fields_value[$input.name] == ''}{$input.default}{else}{$fields_value[$input.name]|escape:'html':'UTF-8'}{/if}" />
				<span class="input-group-addon">
					<i class="icon-calendar-empty"></i>
				</span>
			</div>
		</div>
	{else}
		{$smarty.block.parent}
	{/if}
	
{/block}