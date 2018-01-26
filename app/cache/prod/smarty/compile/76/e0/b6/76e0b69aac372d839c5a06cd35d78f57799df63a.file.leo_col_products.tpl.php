<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 18:01:42
         compiled from "C:\PRIVE\UwAmp\www\coree\themes\leo_snapmall\templates\catalog\_partials\miniatures\leo_col_products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186415a6a1b86004493-84812406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76e0b69aac372d839c5a06cd35d78f57799df63a' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\themes\\leo_snapmall\\templates\\catalog\\_partials\\miniatures\\leo_col_products.tpl',
      1 => 1516894368,
      2 => 'file',
    ),
    '1a8273cc8959966be9ff1169c8e79139b5cdb703' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\themes\\leo_snapmall\\templates\\layouts\\setting.tpl',
      1 => 1516894368,
      2 => 'file',
    ),
    'fe3c5566bf8fe7764d6c079d45d91684274d71bd' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\themes\\leo_snapmall\\templates\\catalog\\_partials\\variant-links.tpl',
      1 => 1516894368,
      2 => 'file',
    ),
    '3c03eaec78a84e364f731efa394287a7230efda6' => 
    array (
      0 => 'C:\\PRIVE\\UwAmp\\www\\coree\\themes\\leo_snapmall\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1516894368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186415a6a1b86004493-84812406',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LISTING_GRID_MODE' => 0,
    'LISTING_PRODUCT_COLUMN' => 0,
    'LISTING_PRODUCT_COLUMN_MODULE' => 0,
    'LISTING_PRODUCT_TABLET' => 0,
    'LISTING_PRODUCT_SMALLDEVICE' => 0,
    'LISTING_PRODUCT_EXTRASMALLDEVICE' => 0,
    'LISTING_PRODUCT_MOBILE' => 0,
    'productClassWidget' => 0,
    'productProfileDefault' => 0,
    'page' => 0,
    'leo_page' => 0,
    'LISTING_PRODUCT_LARGEDEVICE' => 0,
    'col_cat_product_lg' => 0,
    'col_cat_product_xl' => 0,
    'products' => 0,
    'nbLi' => 0,
    'nbItemsPerLine' => 0,
    'nbItemsPerLineTablet' => 0,
    'id' => 0,
    'nbItemsPerLineMobile' => 0,
    'totModulo' => 0,
    'totModuloTablet' => 0,
    'totModuloMobile' => 0,
    'colValue' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a1b8649aa54_07444988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a1b8649aa54_07444988')) {function content_5a6a1b8649aa54_07444988($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\\PRIVE\\UwAmp\\www\\coree\\vendor\\prestashop\\smarty\\plugins\\function.math.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['LISTING_GRID_MODE']->value)||!isset($_smarty_tpl->tpl_vars['LISTING_PRODUCT_COLUMN']->value)||!isset($_smarty_tpl->tpl_vars['LISTING_PRODUCT_COLUMN_MODULE']->value)||!isset($_smarty_tpl->tpl_vars['LISTING_PRODUCT_TABLET']->value)||!isset($_smarty_tpl->tpl_vars['LISTING_PRODUCT_SMALLDEVICE']->value)||!isset($_smarty_tpl->tpl_vars['LISTING_PRODUCT_EXTRASMALLDEVICE']->value)||!isset($_smarty_tpl->tpl_vars['LISTING_PRODUCT_MOBILE']->value)) {?>
    
      <?php /*  Call merged included template "layouts/setting.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layouts/setting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '186415a6a1b86004493-84812406');
content_5a6a1b8603c448_69913752($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "layouts/setting.tpl" */?>
    
<?php }?>

<?php if (!isset($_smarty_tpl->tpl_vars['productClassWidget']->value)) {?>
    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"pagebuilderConfig",'configName'=>"productClass"),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["productClassWidget"] = new Smarty_variable($_tmp3, null, 0);?>
<?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['productProfileDefault']->value)) {?>
    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"pagebuilderConfig",'configName'=>"productKey"),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["productProfileDefault"] = new Smarty_variable($_tmp4, null, 0);?>
<?php }?>


<?php if ((isset($_smarty_tpl->tpl_vars['page']->value['page_name'])&&$_smarty_tpl->tpl_vars['page']->value['page_name']=='category')||(isset($_smarty_tpl->tpl_vars['leo_page']->value)&&$_smarty_tpl->tpl_vars['leo_page']->value=='category')) {?>
    <?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTING_PRODUCT_COLUMN']->value, null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['LISTING_PRODUCT_COLUMN']->value=="5") {?>       <?php $_smarty_tpl->tpl_vars["col_cat_product_xl"] = new Smarty_variable("col-xl-2-4", null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars["col_cat_product_xl"] = new Smarty_variable("col-xl-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_COLUMN']->value)), null, 0);?><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['LISTING_PRODUCT_LARGEDEVICE']->value=="5") {?>  <?php $_smarty_tpl->tpl_vars["col_cat_product_lg"] = new Smarty_variable("col-lg-2-4", null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars["col_cat_product_lg"] = new Smarty_variable("col-lg-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_LARGEDEVICE']->value)), null, 0);?><?php }?>
    <?php $_smarty_tpl->tpl_vars["colValue"] = new Smarty_variable("col-sp-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_MOBILE']->value))." col-xs-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_EXTRASMALLDEVICE']->value))." col-sm-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_SMALLDEVICE']->value))." col-md-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_TABLET']->value))." ".((string)$_smarty_tpl->tpl_vars['col_cat_product_lg']->value)." ".((string)$_smarty_tpl->tpl_vars['col_cat_product_xl']->value), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["colValue"] = clone $_smarty_tpl->tpl_vars["colValue"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["colValue"] = clone $_smarty_tpl->tpl_vars["colValue"];?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTING_PRODUCT_COLUMN_MODULE']->value, null, 0);?>
    
    <?php if ($_smarty_tpl->tpl_vars['LISTING_PRODUCT_COLUMN_MODULE']->value=="5") {?><?php $_smarty_tpl->tpl_vars["col_cat_product_xl"] = new Smarty_variable("col-xl-2-4", null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars["col_cat_product_xl"] = new Smarty_variable("col-xl-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_COLUMN_MODULE']->value)), null, 0);?><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['LISTING_PRODUCT_LARGEDEVICE']->value=="5") {?>  <?php $_smarty_tpl->tpl_vars["col_cat_product_lg"] = new Smarty_variable("col-lg-2-4", null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars["col_cat_product_lg"] = new Smarty_variable("col-lg-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_LARGEDEVICE']->value)), null, 0);?><?php }?>
    
    <?php $_smarty_tpl->tpl_vars["colValue"] = new Smarty_variable("col-sp-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_MOBILE']->value))." col-xs-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_EXTRASMALLDEVICE']->value))." col-sm-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_SMALLDEVICE']->value))." col-md-".((string)(12/$_smarty_tpl->tpl_vars['LISTING_PRODUCT_TABLET']->value))." ".((string)$_smarty_tpl->tpl_vars['col_cat_product_lg']->value)." ".((string)$_smarty_tpl->tpl_vars['col_cat_product_xl']->value), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["colValue"] = clone $_smarty_tpl->tpl_vars["colValue"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["colValue"] = clone $_smarty_tpl->tpl_vars["colValue"];?>
<?php }?>
        
<?php $_smarty_tpl->tpl_vars['nbItemsPerLineTablet'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTING_PRODUCT_TABLET']->value, null, 0);?>
<?php $_smarty_tpl->tpl_vars['nbItemsPerLineMobile'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTING_PRODUCT_EXTRASMALLDEVICE']->value, null, 0);?>

<?php $_smarty_tpl->tpl_vars['nbLi'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['products']->value), null, 0);?>
<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'nbLines'),$_smarty_tpl);?>

<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLineTablet",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLineTablet'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'nbLinesTablet'),$_smarty_tpl);?>

<!-- Products list -->


<div <?php if (isset($_smarty_tpl->tpl_vars['id']->value)&&$_smarty_tpl->tpl_vars['id']->value) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="product_list <?php if (isset($_smarty_tpl->tpl_vars['leo_page']->value)&&$_smarty_tpl->tpl_vars['leo_page']->value=='category') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LISTING_GRID_MODE']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['productClassWidget']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productClassWidget']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>">
    <div class="row">
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['total'] = $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
?>
            <?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>count($_smarty_tpl->tpl_vars['products']->value),'perLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'totModulo'),$_smarty_tpl);?>

            <?php echo smarty_function_math(array('equation'=>"(total%perLineT)",'total'=>count($_smarty_tpl->tpl_vars['products']->value),'perLineT'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'totModuloTablet'),$_smarty_tpl);?>

            <?php echo smarty_function_math(array('equation'=>"(total%perLineT)",'total'=>count($_smarty_tpl->tpl_vars['products']->value),'perLineT'=>$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value,'assign'=>'totModuloMobile'),$_smarty_tpl);?>

            <?php if ($_smarty_tpl->tpl_vars['totModulo']->value==0) {?><?php $_smarty_tpl->tpl_vars['totModulo'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbItemsPerLine']->value, null, 0);?><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['totModuloTablet']->value==0) {?><?php $_smarty_tpl->tpl_vars['totModuloTablet'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value, null, 0);?><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['totModuloMobile']->value==0) {?><?php $_smarty_tpl->tpl_vars['totModuloMobile'] = new Smarty_variable($_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value, null, 0);?><?php }?>	
            <div class="ajax_block_product <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['colValue']->value, ENT_QUOTES, 'UTF-8');?>

                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==0) {?> last-in-line
                <?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==1) {?> first-in-line<?php }?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['total']-$_smarty_tpl->tpl_vars['totModulo']->value)) {?> last-line<?php }?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value==0) {?> last-item-of-tablet-line
                <?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value==1) {?> first-item-of-tablet-line<?php }?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value==0) {?> last-item-of-mobile-line
                <?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value==1) {?> first-item-of-mobile-line<?php }?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['total']-$_smarty_tpl->tpl_vars['totModuloMobile']->value)) {?> last-mobile-line<?php }?>
                ">
                
                    <?php if (isset($_smarty_tpl->tpl_vars['productProfileDefault']->value)&&$_smarty_tpl->tpl_vars['productProfileDefault']->value) {?>
                        
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayLeoProfileProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'profile'=>$_smarty_tpl->tpl_vars['productProfileDefault']->value),$_smarty_tpl);?>

		            <?php } else { ?>
                        <?php /*  Call merged included template "catalog/_partials/miniatures/product.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, '186415a6a1b86004493-84812406');
content_5a6a1b862e82b7_42748355($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/miniatures/product.tpl" */?>
                    <?php }?>
                
            </div>
        <?php } ?>
    </div>
</div>
<script>
if (window.jQuery) {
    $(document).ready(function(){
        if (prestashop.page.page_name == 'category'){
            setDefaultListGrid();
        }
    });
}
</script><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 18:01:42
         compiled from "C:\PRIVE\UwAmp\www\coree\themes\leo_snapmall\templates\layouts\setting.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a6a1b8603c448_69913752')) {function content_5a6a1b8603c448_69913752($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["ENABLE_RESPONSIVE"] = new Smarty_variable("1", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["ENABLE_RESPONSIVE"] = clone $_smarty_tpl->tpl_vars["ENABLE_RESPONSIVE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["ENABLE_RESPONSIVE"] = clone $_smarty_tpl->tpl_vars["ENABLE_RESPONSIVE"];?>
<?php $_smarty_tpl->tpl_vars["LISTING_GRID_MODE"] = new Smarty_variable("grid", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_GRID_MODE"] = clone $_smarty_tpl->tpl_vars["LISTING_GRID_MODE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_GRID_MODE"] = clone $_smarty_tpl->tpl_vars["LISTING_GRID_MODE"];?>
<?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"] = new Smarty_variable("3", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN_MODULE"];?>
<?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN"] = new Smarty_variable("3", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_COLUMN"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_COLUMN"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_COLUMN"];?>
<?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_LARGEDEVICE"] = new Smarty_variable("3", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_LARGEDEVICE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_LARGEDEVICE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_LARGEDEVICE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_LARGEDEVICE"];?>
<?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_TABLET"] = new Smarty_variable("2", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_TABLET"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_TABLET"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_TABLET"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_TABLET"];?>
<?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_SMALLDEVICE"] = new Smarty_variable("2", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_SMALLDEVICE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_SMALLDEVICE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_SMALLDEVICE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_SMALLDEVICE"];?>
<?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_EXTRASMALLDEVICE"] = new Smarty_variable("2", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_EXTRASMALLDEVICE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_EXTRASMALLDEVICE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_EXTRASMALLDEVICE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_EXTRASMALLDEVICE"];?>
<?php $_smarty_tpl->tpl_vars["LISTING_PRODUCT_MOBILE"] = new Smarty_variable("1", null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["LISTING_PRODUCT_MOBILE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_MOBILE"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["LISTING_PRODUCT_MOBILE"] = clone $_smarty_tpl->tpl_vars["LISTING_PRODUCT_MOBILE"];?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 18:01:42
         compiled from "C:\PRIVE\UwAmp\www\coree\themes\leo_snapmall\templates\catalog\_partials\miniatures\product.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a6a1b862e82b7_42748355')) {function content_5a6a1b862e82b7_42748355($_smarty_tpl) {?>

<article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
  <div class="thumbnail-container">
    <div class="product-image">
      
        <?php if (isset($_smarty_tpl->tpl_vars['cfg_product_list_image']->value)&&$_smarty_tpl->tpl_vars['cfg_product_list_image']->value) {?>
          <div class="leo-more-info" data-idproduct="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"></div>
        <?php }?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
          <img
            class="img-fluid"
            src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
            alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
            data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
          > 
          <?php if (isset($_smarty_tpl->tpl_vars['cfg_product_one_img']->value)&&$_smarty_tpl->tpl_vars['cfg_product_one_img']->value) {?>
            <span class="product-additional" data-idproduct="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"></span>
          <?php }?>
        </a>
      
  
      
        <ul class="product-flags">
          <?php  $_smarty_tpl->tpl_vars['flag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['flag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['flags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->key => $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->_loop = true;
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      

      <div class="functional-buttons clearfix">
        
          <div class="quickview<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">
            <a
              href="#"
              class="quick-view btn-product"
              data-link-action="quickview"
            >
              <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
              <span class="leo-quickview-bt-content"> 
              <i class="icon-quick-view"></i> <span><?php echo smartyTranslate(array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
                </span>
            </a>
          </div>
        
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayLeoCompareButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayLeoWishlistButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayLeoCartButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

      </div>
    </div>
    <div class="product-meta">
      
        <h1 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],30,'...'), ENT_QUOTES, 'UTF-8');?>
</a></h1>
      

      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayLeoProductListReview','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>


      
        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
          <div class="product-price-and-shipping">
          
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl);?>

            <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
              <span itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"></span><span itemprop="price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
            </span>
            
            <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>


              <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
              <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type']==='percentage') {?>
                <span class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
              <?php }?>
            <?php }?>

            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl);?>


            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl);?>

          </div>
        <?php }?>
      

      <div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?>">
        
          <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
            <?php /*  Call merged included template "catalog/_partials/variant-links.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, '186415a6a1b86004493-84812406');
content_5a6a1b86419069_01426435($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/variant-links.tpl" */?>
          <?php }?>
        
      </div>
	
      
         <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

    	
      
      <div class="product-description">
        
          <div class="product-description-short" itemprop="description"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['description_short'],150,'...');?>
</div>
        
      </div>
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayLeoCartQuantity','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayLeoCartAttribute','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

    </div>
  </div>
</article>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 18:01:42
         compiled from "C:\PRIVE\UwAmp\www\coree\themes\leo_snapmall\templates\catalog\_partials\variant-links.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a6a1b86419069_01426435')) {function content_5a6a1b86419069_01426435($_smarty_tpl) {?><div class="variant-links">
  <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
       class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
       title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
       
      <?php if ($_smarty_tpl->tpl_vars['variant']->value['html_color_code']) {?> style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['html_color_code'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['variant']->value['texture']) {?> style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['texture'], ENT_QUOTES, 'UTF-8');?>
)" <?php }?>
    ><span class="sr-only"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a>
  <?php } ?>
  <span class="js-count count"></span>
</div>
<?php }} ?>
