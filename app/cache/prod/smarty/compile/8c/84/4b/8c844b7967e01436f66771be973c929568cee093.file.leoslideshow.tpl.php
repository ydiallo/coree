<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:18:07
         compiled from "modules\leoslideshow\views\templates\front\leoslideshow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:276195a6a033f546525-94353798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c844b7967e01436f66771be973c929568cee093' => 
    array (
      0 => 'modules\\leoslideshow\\views\\templates\\front\\leoslideshow.tpl',
      1 => 1516894364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '276195a6a033f546525-94353798',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rand_num' => 0,
    'sliderParams' => 0,
    'class_group' => 0,
    'sliders' => 0,
    'slider' => 0,
    'layer' => 0,
    'sliderImgUrl' => 0,
    'load_from_appagebuilder' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a033fa526a6_74285077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a033fa526a6_74285077')) {function content_5a6a033fa526a6_74285077($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\PRIVE\\UwAmp\\www\\coree\\vendor\\prestashop\\smarty\\plugins\\modifier.replace.php';
?>
<?php $_smarty_tpl->tpl_vars["class_group"] = new Smarty_variable("iview-group-".((string)$_smarty_tpl->tpl_vars['rand_num']->value)."-".((string)$_smarty_tpl->tpl_vars['sliderParams']->value['id_leoslideshow_groups']), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['slider_class']=="boxed") {?>
	<div class="layerslider-wrapper<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['group_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['group_class'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?><?php if (intval($_smarty_tpl->tpl_vars['sliderParams']->value['md_width'])) {?> col-md-<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['sliderParams']->value['md_width']), ENT_QUOTES, 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['sm_width']) {?> col-sm-<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['sliderParams']->value['sm_width']), ENT_QUOTES, 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['sm_width']) {?> col-xs-<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['sliderParams']->value['xs_width']), ENT_QUOTES, 'UTF-8');?>
<?php }?>">
<?php }?>
<div class="bannercontainer banner-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sliderParams']->value['slider_class'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['group_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['group_class'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" style="padding: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['padding'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;margin: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderParams']->value['margin'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;">
	<div class="iview <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_group']->value, ENT_QUOTES, 'UTF-8');?>
">
		<?php if ($_smarty_tpl->tpl_vars['sliders']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['slider'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slider']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sliders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slider']->key => $_smarty_tpl->tpl_vars['slider']->value) {
$_smarty_tpl->tpl_vars['slider']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['slider']->value['video']['active']) {?>
					<!-- SLIDE VIDEO BEGIN -->
					<div data-leo_image="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['thumbnail'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
						data-leo_type="video"
						data-leo_transition="strip-right-fade,strip-left-fade"
						data-leo_background="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['background_type'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
						data-autoplay="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['video']['videoauto'], ENT_QUOTES, 'UTF-8');?>
">
						<iframe src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['video']['videoURL'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
?title=0&amp;byline=0&amp;portrait=0;api=1" width="100%" height="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
					<!-- SLIDE VIDEO END -->
				<?php } else { ?>
					
					<!-- SLIDE IMAGE BEGIN -->
					<div class="slide_config <?php if (isset($_smarty_tpl->tpl_vars['slider']->value['data_link'])&&$_smarty_tpl->tpl_vars['slider']->value['data_link']) {?>data-link<?php }?>"
						<?php if ($_smarty_tpl->tpl_vars['slider']->value['main_image']!='') {?> data-leo_image="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['main_image'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['slider']->value['background_color']!='') {?> data-leo_background_color="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['background_color'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"<?php }?>					
						<?php if ($_smarty_tpl->tpl_vars['slider']->value['data_link']!='') {?> data-link="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['data_link'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['slider']->value['data_target']!='') {?> data-target="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['data_target'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
						data-leo_pausetime="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['data_delay'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
						data-leo_thumbnail="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['thumbnail'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
						data-leo_background="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['background_type'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"					
						<?php if ($_smarty_tpl->tpl_vars['slider']->value['enable_custom_html_bullet']) {?>
						data-leo_bullet_description="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['bullet_description'], ENT_QUOTES, 'UTF-8');?>
"
						data-leo_bullet_class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['bullet_class'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
						<?php }?>												
						>
						
						
						<?php if (isset($_smarty_tpl->tpl_vars['slider']->value['layersparams'])) {?>
							<?php  $_smarty_tpl->tpl_vars['layer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['layer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider']->value['layersparams']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['layer']->key => $_smarty_tpl->tpl_vars['layer']->value) {
$_smarty_tpl->tpl_vars['layer']->_loop = true;
?>
								
								<div class="tp-caption <?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_link']) {?>data-link<?php }?><?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_class'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" 
									 data-x="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_left'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
									 data-y="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_top'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
									 data-transition="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_transition'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
									 <?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_link']) {?>onclick="event.stopPropagation();window.open('<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_link'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
','<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_target'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
');"<?php }?>
									 <?php if ($_smarty_tpl->tpl_vars['layer']->value['css']) {?>style="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['css'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;"<?php }?>
									 >
									
									<?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_type']=="text") {?><!-- LAYER TEXT BEGIN -->
										<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['layer']->value['layer_caption'],"_ASM_","&"),"_LEO_BACKSLASH_","\\"),"_LEO_DOUBLE_QUOTE_","&quot;");?>

									<?php }?><!-- LAYER TEXT END -->


									<?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_type']=="image") {?><!-- LAYER IMAGE BEGIN -->
										<img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sliderImgUrl']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_content'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="" class="img_disable_drag"/>
									<?php }?><!-- LAYER IMAGE END -->


									<?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_type']=="video") {?><!-- LAYER VIDEO BEGIN -->
										<?php if ($_smarty_tpl->tpl_vars['layer']->value['layer_video_type']=="vimeo") {?>
											<iframe src="http://player.vimeo.com/video/<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_video_id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
?wmode=transparent&amp;title=0&amp;byline=0&amp;portrait=0;api=1" width="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_video_width'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_video_height'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" ></iframe>
										<?php } else { ?>
											<iframe src="http://www.youtube.com/embed/<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_video_id'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
?wmode=transparent" width="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_video_width'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['layer']->value['layer_video_height'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"></iframe>
										<?php }?>
									<?php }?><!-- LAYER VIDEO END -->
									
									
								</div>
							<?php } ?>
						<?php }?>
						
				</div><!-- SLIDE IMAGE END -->
				<?php }?>

			<?php } ?>
		<?php }?>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['slider_class']=="boxed") {?>
	</div>
<?php }?>

<script type="text/javascript">
<?php if (isset($_smarty_tpl->tpl_vars['load_from_appagebuilder']->value)&&$_smarty_tpl->tpl_vars['load_from_appagebuilder']->value==1) {?>
    
    ap_list_functions.push(function(){
<?php } else { ?>
    var leoslideshow_list_functions = [];
    leoslideshow_list_functions.push(function(){
<?php }?>

	jQuery(".<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_group']->value, ENT_QUOTES, 'UTF-8');?>
").iView({
		// COMMON
		pauseTime:<?php echo htmlspecialchars(intval((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['delay'])===null||$tmp==='' ? '5000' : $tmp)), ENT_QUOTES, 'UTF-8');?>
, // delay
		startSlide:<?php echo htmlspecialchars(intval((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['start_with_slide'])===null||$tmp==='' ? '0' : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
		autoAdvance: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['autoAdvance'])===null||$tmp==='' ? 'true' : $tmp),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,	// enable timer thá»�i gian auto next slide
		pauseOnHover: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['stop_on_hover'])===null||$tmp==='' ? 'false' : $tmp),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		randomStart: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['shuffle_mode'])===null||$tmp==='' ? 'false' : $tmp),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
, // Ramdom slide when start

		// TIMER
		timer: "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['timer'])===null||$tmp==='' ? 'Pie' : $tmp),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
",
		timerPosition: "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['timerPosition'])===null||$tmp==='' ? 'top-right' : $tmp),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
", // Top-right, top left ....
		timerX: <?php echo htmlspecialchars(intval((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['timerX'])===null||$tmp==='' ? '10' : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
		timerY: <?php echo htmlspecialchars(intval((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['timerY'])===null||$tmp==='' ? '10' : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
		timerOpacity: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['timerOpacity'])===null||$tmp==='' ? '0.5' : $tmp),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		timerBg: "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['timerBg'])===null||$tmp==='' ? '#000' : $tmp),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
",
		timerColor: "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['timerColor'])===null||$tmp==='' ? '#EEE' : $tmp),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
",
		timerDiameter: <?php echo htmlspecialchars(intval((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['timerDiameter'])===null||$tmp==='' ? '30' : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
		timerPadding: <?php echo htmlspecialchars(intval((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['timerPadding'])===null||$tmp==='' ? '4' : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
		timerStroke: <?php echo htmlspecialchars(intval((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['timerStroke'])===null||$tmp==='' ? '3' : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
		timerBarStroke: <?php echo htmlspecialchars(intval((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['timerBarStroke'])===null||$tmp==='' ? '1' : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
		timerBarStrokeColor: "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['timerBarStrokeColor'])===null||$tmp==='' ? '#EEE' : $tmp),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
",
		timerBarStrokeStyle: "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['timerBarStrokeStyle'])===null||$tmp==='' ? 'solid' : $tmp),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
",
		playLabel: "<?php echo smartyTranslate(array('s'=>'Play','mod'=>'leoslideshow'),$_smarty_tpl);?>
",
		pauseLabel: "<?php echo smartyTranslate(array('s'=>'Pause','mod'=>'leoslideshow'),$_smarty_tpl);?>
",
		closeLabel: "<?php echo smartyTranslate(array('s'=>'Close','mod'=>'leoslideshow'),$_smarty_tpl);?>
", // Muli language

		// NAVIGATOR controlNav
		controlNav: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['controlNav'])===null||$tmp==='' ? 'false' : $tmp),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
, // true : enable navigate - default:'false'
		keyboardNav: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['keyboardNav'])===null||$tmp==='' ? 'true' : $tmp),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
, // true : enable keybroad
		controlNavThumbs: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['controlNavThumbs'])===null||$tmp==='' ? 'false' : $tmp),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
, // true show thumbnail, false show number ( bullet )
		controlNavTooltip: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['controlNavTooltip'])===null||$tmp==='' ? 'true' : $tmp),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
, // true : hover to bullet show thumnail
		tooltipX: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['tooltipX'])===null||$tmp==='' ? '5' : $tmp),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		tooltipY: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['tooltipY'])===null||$tmp==='' ? '-5' : $tmp),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
		controlNavHoverOpacity: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['controlNavHoverOpacity'])===null||$tmp==='' ? '0.6' : $tmp),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
, // opacity navigator

		// DIRECTION
		controlNavNextPrev: false, // false dont show direction at navigator
		directionNav: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['directionNav'])===null||$tmp==='' ? 'true' : $tmp),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
, // true  show direction at image ( in this case : enable direction )
		directionNavHoverOpacity: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['directionNavHoverOpacity'])===null||$tmp==='' ? '0.6' : $tmp),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
, // direction opacity at image
		nextLabel: "<?php echo smartyTranslate(array('s'=>'Next','mod'=>'leoslideshow'),$_smarty_tpl);?>
",				// Muli language
		previousLabel: "<?php echo smartyTranslate(array('s'=>'Previous','mod'=>'leoslideshow'),$_smarty_tpl);?>
", // Muli language

		// ANIMATION 
		fx: '<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['fx'])===null||$tmp==='' ? 'random' : $tmp),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
', // Animation
		animationSpeed: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['animationSpeed'])===null||$tmp==='' ? '500' : $tmp),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
, // time to change slide
//		strips: <?php echo htmlspecialchars(intval((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['strips'])===null||$tmp==='' ? '20' : $tmp)), ENT_QUOTES, 'UTF-8');?>
,
		strips: 1, // set value is 1 -> fix animation full background
		blockCols: <?php echo htmlspecialchars(intval((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['blockCols'])===null||$tmp==='' ? '10' : $tmp)), ENT_QUOTES, 'UTF-8');?>
, // number of columns
		blockRows: <?php echo htmlspecialchars(intval((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['blockRows'])===null||$tmp==='' ? '5' : $tmp)), ENT_QUOTES, 'UTF-8');?>
, // number of rows

		captionSpeed: <?php echo htmlspecialchars(intval((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['captionSpeed'])===null||$tmp==='' ? '500' : $tmp)), ENT_QUOTES, 'UTF-8');?>
, // speed to show caption
		captionOpacity: <?php echo htmlspecialchars(intval((($tmp = @$_smarty_tpl->tpl_vars['sliderParams']->value['captionOpacity'])===null||$tmp==='' ? '1' : $tmp)), ENT_QUOTES, 'UTF-8');?>
, // caption opacity
		captionEasing: 'easeInOutSine', // caption transition easing effect, use JQuery Easings effect
		customWidth: <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['sliderParams']->value['width']), ENT_QUOTES, 'UTF-8');?>
,
		customHtmlBullet: <?php if ($_smarty_tpl->tpl_vars['slider']->value['enable_custom_html_bullet']) {?>true<?php } else { ?>false<?php }?>,
		rtl: <?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['rtl']) {?>true<?php } else { ?>false<?php }?>,
		height:<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['height']) {?><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['sliderParams']->value['height']), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>780<?php }?>,
		timer_show : <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['sliderParams']->value['timer_show']), ENT_QUOTES, 'UTF-8');?>
,

		//onBeforeChange: function(){}, // Triggers before a slide transition
		//onAfterChange: function(){}, // Triggers after a slide transition
		//onSlideshowEnd: function(){}, // Triggers after all slides have been shown
		//onLastSlide: function(){}, // Triggers when last slide is shown
		//onPause: function(){}, // Triggers when slider has paused
		//onPlay: function(){} // Triggers when slider has played

		onAfterLoad: function() 
		{
			// THUMBNAIL
			<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['nav_thumbnail_height']) {?>
					$('.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_group']->value, ENT_QUOTES, 'UTF-8');?>
 .iview-controlNav a img').height(<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['sliderParams']->value['nav_thumbnail_height']), ENT_QUOTES, 'UTF-8');?>
);
					//$('.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_group']->value, ENT_QUOTES, 'UTF-8');?>
 .iview-tooltip').height(<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['sliderParams']->value['nav_thumbnail_height']), ENT_QUOTES, 'UTF-8');?>
);
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['nav_thumbnail_width']) {?>
					$('.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_group']->value, ENT_QUOTES, 'UTF-8');?>
 .iview-controlNav a img').width(<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['sliderParams']->value['nav_thumbnail_width']), ENT_QUOTES, 'UTF-8');?>
);
					//$('.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_group']->value, ENT_QUOTES, 'UTF-8');?>
 .iview-tooltip').width(<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['sliderParams']->value['nav_thumbnail_width']), ENT_QUOTES, 'UTF-8');?>
);
			<?php }?>

			// BULLET
			<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['nav_thumbnail_height']) {?>
					$('.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_group']->value, ENT_QUOTES, 'UTF-8');?>
 .iview-tooltip div.holder div.container div img').width(<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['sliderParams']->value['nav_thumbnail_width']), ENT_QUOTES, 'UTF-8');?>
);
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['nav_thumbnail_width']) {?>
					$('.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_group']->value, ENT_QUOTES, 'UTF-8');?>
 .iview-tooltip div.holder div.container div img').height(<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['sliderParams']->value['nav_thumbnail_height']), ENT_QUOTES, 'UTF-8');?>
);
			<?php }?>

			// Display timer
			<?php if ($_smarty_tpl->tpl_vars['sliderParams']->value['timer_show']==1||$_smarty_tpl->tpl_vars['sliderParams']->value['timer_show']==2) {?>
					$('.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_group']->value, ENT_QUOTES, 'UTF-8');?>
 .iview-timer').hide();
			<?php }?>
		},

	});

	$(".img_disable_drag").bind('dragstart', function() {
		return false;
	});


// Fix : Slide link, image cant swipe
	// step 1
	var link_event = 'click';

	// step 3
	$(".<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_group']->value, ENT_QUOTES, 'UTF-8');?>
 .slide_config").on("click",function(){
		
		if(link_event !== 'click'){
			link_event = 'click';
			return;
		}

		if($(this).data('link') != undefined && $(this).data('link') != '') {
			window.open($(this).data('link'),$(this).data('target'));
		}
		
	});

	// step 2
	$(".<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_group']->value, ENT_QUOTES, 'UTF-8');?>
 .slide_config").on('swipe',function(){
		link_event = 'swiped';	// do not click event
	});
});
	 
</script>
<?php }} ?>
