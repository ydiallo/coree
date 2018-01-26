<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 17:20:20
         compiled from "C:\PRIVE\UwAmp\www\coree\modules\leobootstrapmenu\views\templates\hook\group_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:227615a6a11d474a166-50267090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3a6735bfd81852a7383af9eeb9fdeb7284ad153' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\modules\\leobootstrapmenu\\views\\templates\\hook\\group_list.tpl',
      1 => 1516894362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227615a6a11d474a166-50267090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groups' => 0,
    'clearcache_hook' => 0,
    'list_hook' => 0,
    'hook' => 0,
    'link' => 0,
    'group' => 0,
    'curentGroup' => 0,
    'exportLink' => 0,
    'exportWidgetsLink' => 0,
    'update_group_position_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a11d4971d22_55870701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a11d4971d22_55870701')) {function content_5a6a11d4971d22_55870701($_smarty_tpl) {?>
<fieldset>
	
	<?php if (count($_smarty_tpl->tpl_vars['groups']->value)>0) {?>
		<div class="panel form-horizontal">
			<h3><?php echo smartyTranslate(array('s'=>'Megamenu Control Panel','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</h3>
			
			<div class="form-wrapper">
									
				<div class="form-group">
					<label class="control-label col-md-1"><?php echo smartyTranslate(array('s'=>'Select Hook','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</label>
					<div class="col-md-2">
						<select class="list_hook" class=" fixed-width-xl">
							<option <?php if ($_smarty_tpl->tpl_vars['clearcache_hook']->value==''||$_smarty_tpl->tpl_vars['clearcache_hook']->value=='all') {?>selected="selected"<?php }?> value="all"><?php echo smartyTranslate(array('s'=>'All hook','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</option>
							<?php  $_smarty_tpl->tpl_vars['hook'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hook']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_hook']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hook']->key => $_smarty_tpl->tpl_vars['hook']->value) {
$_smarty_tpl->tpl_vars['hook']->_loop = true;
?>
								<option <?php if ($_smarty_tpl->tpl_vars['clearcache_hook']->value==$_smarty_tpl->tpl_vars['hook']->value) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
</option>
							<?php } ?>
							
						</select>
					</div>
					<div class="col-md-2">
						<a class="clear_cache btn btn-success" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8');?>
&configure=leobootstrapmenu&success=clearcache&hook=">
							<i class="icon-AdminTools"></i> <?php echo smartyTranslate(array('s'=>'Clear cache','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

						</a>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-md-3"><?php echo smartyTranslate(array('s'=>'Backup the database before run correct module to safe','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</label>
					<div class="col-md-9">
						<a class="megamenu-correct-module btn btn-success" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8');?>
&configure=leobootstrapmenu&success=correct&correctmodule=1">
							<i class="icon-AdminParentPreferences"></i> <?php echo smartyTranslate(array('s'=>'Correct module','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

						</a>
					</div>
					
				</div>
			</div>
		</div>
	<?php }?>
    <div id="groupLayer" class="panel col-md-12">
        <h3><?php echo smartyTranslate(array('s'=>'Group List','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</h3>
		
		
        
		
		<div class="group-header col-md-8 col-xs-12">
			<ol>
				<li>
					<div class="col-md-1 col-xs-1 text-center">
						<span class="title_box ">
							<?php echo smartyTranslate(array('s'=>'ID','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

						</span>
					</div>
					<div class="col-md-6 col-xs-3">
						<span class="title_box ">
							<?php echo smartyTranslate(array('s'=>'Group Name','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

						</span>
					</div>
					<div class="col-md-1 col-xs-2">
						<span class="title_box "><?php echo smartyTranslate(array('s'=>'Status','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</span>
					</div>
					<div class="col-md-2 col-xs-2">
						<span class="title_box ">
							<?php echo smartyTranslate(array('s'=>'Hook','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

						</span>
					</div>
					<div class="col-md-2 col-xs-4 text-right">
						<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8');?>
&configure=leobootstrapmenu&addNewGroup=1" class="btn btn-default">
							<i class="icon-plus"></i> <?php echo smartyTranslate(array('s'=>'Add new Group','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

						</a>
					</div>
				</li>
			</ol>
		</div>
		<div class="group-wrapper col-md-8 col-xs-12">
			<ol class="tree-group">
				<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
					<li id="list_group_<?php echo $_smarty_tpl->tpl_vars['group']->value['id_btmegamenu_group'];?>
" class="nav-item">
						
							<div class="col-md-1 col-xs-1 text-center"><strong>#<?php echo intval($_smarty_tpl->tpl_vars['group']->value['id_btmegamenu_group']);?>
</strong></div>
							<div class="col-md-6 col-xs-3" class="pointer">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['title'],'html','UTF-8');?>

							</div>
							<div class="col-md-1 col-xs-2">
								<?php echo $_smarty_tpl->tpl_vars['group']->value['status'];?>
&nbsp;&nbsp;&nbsp;
							</div>
							
							<div class="col-md-2 col-xs-2">
								<?php echo $_smarty_tpl->tpl_vars['group']->value['hook'];?>

							</div>

							<div class="col-md-2 col-xs-4">
								<div class="btn-group-action">
									<div class="btn-group pull-right">
										<?php if ($_smarty_tpl->tpl_vars['group']->value['id_btmegamenu_group']!=$_smarty_tpl->tpl_vars['curentGroup']->value) {?>
											<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8');?>
&configure=leobootstrapmenu&editgroup=1&id_group=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['id_btmegamenu_group'],'html','UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Edit Group','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
" class="edit btn btn-default">
												<i class="icon-pencil"></i> <?php echo smartyTranslate(array('s'=>'Edit','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

											</a>
										<?php } else { ?>
											<a href="#" title="<?php echo smartyTranslate(array('s'=>'Editting','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
" class="btn editting" style="color:#BBBBBB">
												<?php echo smartyTranslate(array('s'=>'Editting','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

											</a>
										<?php }?>
										<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
											<span class="caret"></span>&nbsp;
										</button>
										<ul class="dropdown-menu">
											
											<li>
												<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8');?>
&configure=leobootstrapmenu&deletegroup=1&id_group=<?php echo intval($_smarty_tpl->tpl_vars['group']->value['id_btmegamenu_group']);?>
" onclick="if (confirm('<?php echo smartyTranslate(array('s'=>'Delete Selected Group?','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
')) {
														return true;
													} else {
														event.stopPropagation();
														event.preventDefault();
													}
													;" title="<?php echo smartyTranslate(array('s'=>'Delete','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
" class="delete">
													<i class="icon-trash"></i> <?php echo smartyTranslate(array('s'=>'Delete','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

												</a>
																													
											</li>
											<li>
												<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8');?>
&configure=leobootstrapmenu&duplicategroup=1&id_group=<?php echo intval($_smarty_tpl->tpl_vars['group']->value['id_btmegamenu_group']);?>
" onclick="if (confirm('<?php echo smartyTranslate(array('s'=>'Duplicate Selected Group?','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
')) {
														return true;
													} else {
														event.stopPropagation();
														event.preventDefault();
													}
													;" title="<?php echo smartyTranslate(array('s'=>'Duplicate','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
" class="duplicate">
													<i class="icon-copy"></i> <?php echo smartyTranslate(array('s'=>'Duplicate','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

												</a>
																													
											</li>
											
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['exportLink']->value;?>
&id_group=<?php echo intval($_smarty_tpl->tpl_vars['group']->value['id_btmegamenu_group']);?>
&widgets=1" title="<?php echo smartyTranslate(array('s'=>'Export Group With Widgets','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
" class="export">
													<i class="icon-external-link-sign"></i> <?php echo smartyTranslate(array('s'=>'Export Group With Widgets','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

												</a>
																													
											</li>
											
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['exportLink']->value;?>
&id_group=<?php echo intval($_smarty_tpl->tpl_vars['group']->value['id_btmegamenu_group']);?>
&widgets=0" title="<?php echo smartyTranslate(array('s'=>'Export Group Without Widgets','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
" class="export">
													<i class="icon-external-link"></i> <?php echo smartyTranslate(array('s'=>'Export Group Without Widgets','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

												</a>
																													
											</li>
											
										</ul>

									</div>
								</div>				
							</div>
						
					</li> 
				<?php } ?>
			</ol>
		</div>
		
		<div class="group-footer import-group col-md-5">
			<form method="post" enctype="multipart/form-data" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8');?>
&configure=leobootstrapmenu&importgroup=1">
				<div class="row">
					<div class="form-group">							
						<input type="file" class="hide" name="import_file" id="import_file">
						<div class="dummyfile input-group">
							<span class="input-group-addon"><i class="icon-file"></i></span>
							<input type="text" readonly="" name="filename" class="disabled" id="import_file-name">
							<span class="input-group-btn">
								<button class="btn btn-default" name="submitAddAttachments" type="button" id="import_file-selectbutton">
									<i class="icon-folder-open"></i> <?php echo smartyTranslate(array('s'=>'Choose a file','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

								</button>
							</span>
						</div>
						<p class="help-block color_danger"><?php echo smartyTranslate(array('s'=>'Please upload *.txt only','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</p>
					</div>
					<div class="form-group">
						<label class="control-label col-lg-4" for="title_group">
							<?php echo smartyTranslate(array('s'=>'Overide group or not:','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

						</label>
						<div class="input-group col-lg-3 col-xs-3">
							<span class="switch prestashop-switch">
								<input type="radio" value="1" id="override_group_on" name="override_group">
								<label for="override_group_on">
									<i class="icon-check-sign color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

								</label>
								<input type="radio" checked="checked" value="0" id="override_group_off" name="override_group">
								<label for="override_group_off">
									<i class="icon-ban-circle color_danger"></i> <?php echo smartyTranslate(array('s'=>'No','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

								</label>
								<a class="slide-button btn btn-default"></a>
							</span>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-lg-4" for="title_group">
							<?php echo smartyTranslate(array('s'=>'Overide widgets or not:','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

						</label>
						<div class="input-group col-lg-3 col-xs-3">
							<span class="switch prestashop-switch">
								<input type="radio" value="1" id="override_widget_on" name="override_widget">
								<label for="override_widget_on">
									<i class="icon-check-sign color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

								</label>
								<input type="radio" checked="checked" value="0" id="override_widget_off" name="override_widget">
								<label for="override_widget_off">
									<i class="icon-ban-circle color_danger"></i> <?php echo smartyTranslate(array('s'=>'No','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

								</label>
								<a class="slide-button btn btn-default"></a>
							</span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-12">
							<button class="btn btn-default dash_trend_right" name="importGroup" id="import_file_submit_btn" type="submit">
								 <?php echo smartyTranslate(array('s'=>'Import Group','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

							</button>
						</div>
					</div>                                                                                                                            
				</div>
			</form>
		</div>
		
		<div class="group-footer import-widgets col-md-5">
			<form method="post" enctype="multipart/form-data" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8');?>
&configure=leobootstrapmenu&importwidgets=1">
				<div class="row">
					<div class="form-group">							
						<input type="file" class="hide" name="import_widgets_file" id="import_widgets_file">
						<div class="dummyfile input-group">
							<span class="input-group-addon"><i class="icon-file"></i></span>
							<input type="text" readonly="" name="filename" class="disabled" id="import_widgets_file-name">
							<span class="input-group-btn">
								<button class="btn btn-default" name="submitAddAttachments" type="button" id="import_widgets_file-selectbutton">
									<i class="icon-folder-open"></i> <?php echo smartyTranslate(array('s'=>'Choose a file','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

								</button>
							</span>
						</div>
						<p class="help-block color_danger"><?php echo smartyTranslate(array('s'=>'Please upload *.txt only','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</p>
					</div>					
					
					<div class="form-group">
						<label class="control-label col-lg-4" for="title_group">
							<?php echo smartyTranslate(array('s'=>'Overide widgets or not:','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

						</label>
						<div class="input-group col-lg-3 col-xs-3">
							<span class="switch prestashop-switch">
								<input type="radio" value="1" id="override_import_widgets_on" name="override_import_widgets">
								<label for="override_import_widgets_on">
									<i class="icon-check-sign color_success"></i> <?php echo smartyTranslate(array('s'=>'Yes','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

								</label>
								<input type="radio" checked="checked" value="0" id="override_import_widgets_off" name="override_import_widgets">
								<label for="override_import_widgets_off">
									<i class="icon-ban-circle color_danger"></i> <?php echo smartyTranslate(array('s'=>'No','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

								</label>
								<a class="slide-button btn btn-default"></a>
							</span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-3">
							<button class="btn btn-default dash_trend_right" name="importWidgets" id="import_widgets_file_submit_btn" type="submit">
								 <?php echo smartyTranslate(array('s'=>'Import Widgets','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

							</button>
						</div>
						
						<div class="col-lg-3">
							
							<a class="export-widgets" href="<?php echo $_smarty_tpl->tpl_vars['exportWidgetsLink']->value;?>
" title="Export Widgets Of Shop">
								<i class="icon-external-link-sign"></i>
								<?php echo smartyTranslate(array('s'=>'Export Widgets Of Shop','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>

							</a>
						</div>
					</div>                                                                                                                            
				</div>
			</form>
		</div>
    </div>
</fieldset>
<script type="text/javascript">
	var update_group_position_link = "<?php echo $_smarty_tpl->tpl_vars['update_group_position_link']->value;?>
";
    $(document).ready(function() {
        //import export fix
        $('#import_file-selectbutton').click(function(e){
                $('#import_file').trigger('click');
        });
        $('#import_file').change(function(e){
                var val = $(this).val();
                var file = val.split(/[\\/]/);
                $('#import_file-name').val(file[file.length-1]);
        });
        $('#import_file_submit_btn').click(function(e){
            if($("#import_file-name").val().indexOf(".txt") != -1){
                if($("#override_group_on").is(":checked")) return confirm("<?php echo smartyTranslate(array('s'=>'Are you sure to override group?','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
");
				if($("#override_widget_on").is(":checked")) return confirm("<?php echo smartyTranslate(array('s'=>'Are you sure to override widgets?','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
");
                return true;
            }else{
                alert("<?php echo smartyTranslate(array('s'=>'Please upload txt file','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
");
                $('#import_file').val("");
                $('#import_file-name').val("");
                return false;
            }
		});

		//DONGND::import export widgets fix
        $('#import_widgets_file-selectbutton').click(function(e){
                $('#import_widgets_file').trigger('click');
        });
        $('#import_widgets_file').change(function(e){
                var val = $(this).val();
                var file = val.split(/[\\/]/);
                $('#import_widgets_file-name').val(file[file.length-1]);
        });
        $('#import_widgets_file_submit_btn').click(function(e){
            if($("#import_widgets_file-name").val().indexOf(".txt") != -1){
                if($("#override_import_widgets_on").is(":checked")) return confirm("<?php echo smartyTranslate(array('s'=>'Are you sure to override widgets?','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
");
                return true;
            }else{
                alert("<?php echo smartyTranslate(array('s'=>'Please upload txt file','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
");
                $('#import_widgets_file').val("");
                $('#import_widgets_file-name').val("");
                return false;
            }
		});		
        
        $(".group-preview").click(function() {
            eleDiv = $(this).parent().parent().parent();
            if ($(eleDiv).hasClass("open"))
                eleDiv.removeClass("open");

            var url = $(this).attr("href") + "&content_only=1";
            $('#dialog').remove();
            $('#content').prepend('<div id="dialog" style="padding: 3px 0px 0px 0px;"><iframe name="iframename2" src="' + url + '" style="padding:0; margin: 0; display: block; width: 100%; height: 100%;" frameborder="no" scrolling="auto"></iframe></div>');
            $('#dialog').dialog({
                title: 'Preview Management',
                close: function(event, ui) {

                },
                bgiframe: true,
                width: 1024,
                height: 780,
                resizable: false,
                draggable:false,
                modal: true
            });
            return false;
        });
    });
</script>
<?php }} ?>
