{*
 *  Leo Theme for Prestashop 1.6.x
 *
 * @author    http://www.leotheme.com
 * @copyright Copyright (C) October 2013 LeoThemes.com <@emai:leotheme@gmail.com>
 *               <info@leotheme.com>.All rights reserved.
 * @license   GNU General Public License version 2
*}
{$html}
{if $successful == 1}
	<div class="bootstrap">
		<div class="alert alert-success megamenu-alert">
			<button data-dismiss="alert" class="close" type="button">×</button>
			{l s='Successfully' mod='leobootstrapmenu'}
		</div>
	</div>
{/if}
<div class="col-lg-12"> 
	<div class="" style="float: right">
		<div class="pull-right">
			<a href="{$live_editor_url}" class="btn btn-danger">{l s='Live Edit Tools' mod='leobootstrapmenu'}</a>
               {l s='To Make Rich Content For Megamenu' mod='leobootstrapmenu'}
		</div>
	</div>
</div>
 
<div class="tab-content row">
	<div class="tab-pane active" id="megamenu">
	
		<div class="col-md-4">
			<div class="panel panel-default">
				<h3 class="panel-title">{l s='Tree Megamenu Management - Group: ' mod='leobootstrapmenu'}{$current_group_title}{l s=' - Type: ' mod='leobootstrapmenu'}{$current_group_type}</h3>
				<div class="panel-content">{l s='To sort orders or update parent-child, you drap and drop expected menu.' mod='leobootstrapmenu'}
					<hr>
					<p>
						<input type="button" value="{l s='New Menu Item' mod='leobootstrapmenu'}" id="addcategory" data-loading-text="{l s='Processing ...' mod='leobootstrapmenu'}" class="btn btn-danger" name="addcategory">
						<a href="{$admin_widget_link}" class="leo-modal-action btn btn-modeal btn-success btn-info">{l s='List Widget' mod='leobootstrapmenu'}</a>
					</p>
					<hr>										
					{$tree}
				</div>
			</div>
		</div>
		<div class="col-md-8">
			{$helper_form}
		</div>
		<script type="text/javascript">
			var addnew ="{$addnew}"; 
			var action="{$action}";
			$("#content").PavMegaMenuList({
				action:action,
				addnew:addnew
			});
		</script>
	</div>
</div>
<script>
	$('#myTab a[href="#profile"]').tab('show');
</script>