<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 17:00:21
         compiled from "C:\PRIVE\UwAmp\www\coree\themes\leo_snapmall\modules\appagebuilder\views\templates\hook\testimonials\ApBlockOwlCarouselItem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184915a6a0d255680f9-95443159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3480a5a7c46f48c95c05f7c0f060db447069a99' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\themes\\leo_snapmall\\modules\\appagebuilder\\views\\templates\\hook\\testimonials\\ApBlockOwlCarouselItem.tpl',
      1 => 1516894366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184915a6a0d255680f9-95443159',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formAtts' => 0,
    'carouselName' => 0,
    'Num' => 0,
    'sliders' => 0,
    'slider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a0d257ada24_28164728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a0d257ada24_28164728')) {function content_5a6a0d257ada24_28164728($_smarty_tpl) {?>
<!-- @file modules\appagebuilder\views\templates\hook\ApBlockOwlCarouselItem -->
<div class="owl-row">
    <div class="timeline-wrapper clearfix prepare"
        data-item="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['number_fake_item'], ENT_QUOTES, 'UTF-8');?>
" 
        data-xl="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['xl'], ENT_QUOTES, 'UTF-8');?>
" 
        data-lg="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['lg'], ENT_QUOTES, 'UTF-8');?>
" 
        data-md="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['md'], ENT_QUOTES, 'UTF-8');?>
" 
        data-sm="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['sm'], ENT_QUOTES, 'UTF-8');?>
" 
        data-m="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['m'], ENT_QUOTES, 'UTF-8');?>
"
    >
        <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['formAtts']->value['number_fake_item']+1 - (1) : 1-($_smarty_tpl->tpl_vars['formAtts']->value['number_fake_item'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>          
            <div class="timeline-parent">
                <?php $_smarty_tpl->tpl_vars['foo_child'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo_child']->step = 1;$_smarty_tpl->tpl_vars['foo_child']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo_child']->step > 0 ? $_smarty_tpl->tpl_vars['formAtts']->value['itempercolumn']+1 - (1) : 1-($_smarty_tpl->tpl_vars['formAtts']->value['itempercolumn'])+1)/abs($_smarty_tpl->tpl_vars['foo_child']->step));
if ($_smarty_tpl->tpl_vars['foo_child']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo_child']->value = 1, $_smarty_tpl->tpl_vars['foo_child']->iteration = 1;$_smarty_tpl->tpl_vars['foo_child']->iteration <= $_smarty_tpl->tpl_vars['foo_child']->total;$_smarty_tpl->tpl_vars['foo_child']->value += $_smarty_tpl->tpl_vars['foo_child']->step, $_smarty_tpl->tpl_vars['foo_child']->iteration++) {
$_smarty_tpl->tpl_vars['foo_child']->first = $_smarty_tpl->tpl_vars['foo_child']->iteration == 1;$_smarty_tpl->tpl_vars['foo_child']->last = $_smarty_tpl->tpl_vars['foo_child']->iteration == $_smarty_tpl->tpl_vars['foo_child']->total;?>
                    <div class="timeline-item">
                        <div class="animated-background">                   
                            <div class="background-masker content-top"></div>                           
                            <div class="background-masker content-second-line"></div>                           
                            <div class="background-masker content-third-line"></div>                            
                            <div class="background-masker content-fourth-line"></div>
                        </div>
                    </div>
                <?php }} ?>
            </div>
        <?php }} ?>
    </div>
    <div id="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['carouselName']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel owl-theme owl-loading">
    	<?php $_smarty_tpl->tpl_vars['Num'] = new Smarty_variable(array_chunk($_smarty_tpl->tpl_vars['formAtts']->value['slides'],$_smarty_tpl->tpl_vars['formAtts']->value['itempercolumn']), null, 0);?>
    	<?php  $_smarty_tpl->tpl_vars['sliders'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sliders']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Num']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manuloop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['sliders']->key => $_smarty_tpl->tpl_vars['sliders']->value) {
$_smarty_tpl->tpl_vars['sliders']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manuloop']['index']++;
?> 
    	<div class="item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['manuloop']['index']==0) {?> first<?php }?>">
    		<?php  $_smarty_tpl->tpl_vars['slider'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slider']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sliders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slider']->key => $_smarty_tpl->tpl_vars['slider']->value) {
$_smarty_tpl->tpl_vars['slider']->_loop = true;
?>
    			<div class="block-carousel-container">
    				<div class="left-testimonials">
                        <?php if ($_smarty_tpl->tpl_vars['slider']->value['link']) {?>
                        <a title="<?php echo smartyTranslate(array('s'=>'%s','sprintf'=>array($_smarty_tpl->tpl_vars['slider']->value['title']),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['is_open']) {?>target="_blank"<?php }?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['link'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php }?>
                            <?php if (isset($_smarty_tpl->tpl_vars['slider']->value['image'])&&!empty($_smarty_tpl->tpl_vars['slider']->value['image'])) {?>
                                <img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (isset($_smarty_tpl->tpl_vars['slider']->value['title'])) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>"/>
                            <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['slider']->value['link']) {?>
                        </a>
                        <?php }?>
                    </div>
                    <div class="right-testimonials">
                        <?php if (isset($_smarty_tpl->tpl_vars['slider']->value['title'])&&!empty($_smarty_tpl->tpl_vars['slider']->value['title'])) {?>
                            <div class="title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slider']->value['title'],'html','UTF-8');?>
</div>
                        <?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['slider']->value['descript'])&&!empty($_smarty_tpl->tpl_vars['slider']->value['descript'])) {?>
                            <div class="descript"><?php echo rtrim($_smarty_tpl->tpl_vars['slider']->value['descript']);?>
</div>
                        <?php }?>
                    </div>
    			</div> 
    		<?php } ?>
    	</div>
    	<?php } ?>
    </div>
</div>

<script type="text/javascript">
ap_list_functions_loaded.push(function(){
    $('#<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['carouselName']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
').owlCarousel({
        items :             <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['items']) {?><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['items']), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>false<?php }?>,
        itemsDesktop :      <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktop'])&&$_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktop']) {?>[1200,<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktop']), ENT_QUOTES, 'UTF-8');?>
]<?php } else { ?>false<?php }?>,
        itemsDesktopSmall : <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktopsmall'])&&$_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktopsmall']) {?>[992,<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktopsmall']), ENT_QUOTES, 'UTF-8');?>
]<?php } else { ?>false<?php }?>,
        itemsTablet :       <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['itemstablet'])&&$_smarty_tpl->tpl_vars['formAtts']->value['itemstablet']) {?>[768,<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['itemstablet']), ENT_QUOTES, 'UTF-8');?>
]<?php } else { ?>false<?php }?>,
        itemsMobile :       <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['itemsmobile'])&&$_smarty_tpl->tpl_vars['formAtts']->value['itemsmobile']) {?>[576,<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['itemsmobile']), ENT_QUOTES, 'UTF-8');?>
]<?php } else { ?>false<?php }?>,
        itemsCustom :       <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['itemscustom'])&&$_smarty_tpl->tpl_vars['formAtts']->value['itemscustom']) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['itemscustom'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>false<?php }?>,
        singleItem :        false,       // true : show only 1 item
        itemsScaleUp :      false,
        slideSpeed :        <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slidespeed']) {?><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['slidespeed']), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>200<?php }?>,        //  change speed when drag and drop a item
        paginationSpeed :   <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['paginationspeed']) {?><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['paginationspeed']), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>800<?php }?>,       // change speed when go next page
        autoPlay :          <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['autoplay']) {?>true<?php } else { ?>false<?php }?>,       // time to show each item
        stopOnHover :       <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['stoponhover']) {?>true<?php } else { ?>false<?php }?>,
        navigation :        <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['navigation']) {?>true<?php } else { ?>false<?php }?>,
        navigationText :    ["&lsaquo;", "&rsaquo;"],
        scrollPerPage :     <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['scrollperpage']) {?>true<?php } else { ?>false<?php }?>,
        pagination :        <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['pagination']) {?>true<?php } else { ?>false<?php }?>,       // show bullist
        paginationNumbers : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['paginationnumbers']) {?>true<?php } else { ?>false<?php }?>,       // show number
        responsive :        <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['responsive']) {?>true<?php } else { ?>false<?php }?>,
        lazyLoad :          <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['lazyload']) {?>true<?php } else { ?>false<?php }?>,
        lazyFollow :        <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['lazyfollow']) {?>true<?php } else { ?>false<?php }?>,       // true : go to page 7th and load all images page 1...7. false : go to page 7th and load only images of page 7th
        lazyEffect :        "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['formAtts']->value['lazyeffect'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
",
        autoHeight :        <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['autoheight']) {?>true<?php } else { ?>false<?php }?>,
        mouseDrag :         <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['mousedrag']) {?>true<?php } else { ?>false<?php }?>,
        touchDrag :         <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['touchdrag']) {?>true<?php } else { ?>false<?php }?>,
        addClassActive :    true,
        direction:          <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['rtl']) {?>'rtl'<?php } else { ?>false<?php }?>,
        afterInit: OwlLoaded,
        afterAction : SetOwlCarouselFirstLast,
    });
});
function OwlLoaded(el){
    el.removeClass('owl-loading').addClass('owl-loaded').parents('.owl-row').addClass('hide-loading');
};

</script><?php }} ?>
