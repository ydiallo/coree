<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 16:18:11
         compiled from "module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107955a6a0343143fb2-60263481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl',
      1 => 1516894367,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '107955a6a0343143fb2-60263481',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conditions' => 0,
    'urls' => 0,
    'value' => 0,
    'msg' => 0,
    'nw_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a0343182f97_11599566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a0343182f97_11599566')) {function content_5a6a0343182f97_11599566($_smarty_tpl) {?>

<div id="block_newsletter" class="block_newsletter block block-toggler accordion_small_screen">
  <div class="popup-title-newsletter"></div> 
  <div class="popup-content-newsletter">
    <i class="close-popup fa fa-close"></i>
    <div class="box-title title clearfix" data-target="#block_newsletter_dropdown" data-toggle="collapse">
      <h3 class="title_block" id="block-newsletter-label">
        <?php echo smartyTranslate(array('s'=>'Newsletter','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

      </h3>
      <span class="float-xs-right hidden-md-up">
        <span class="navbar-toggler collapse-icons">
          <i class="material-icons add">&#xE313;</i>
          <i class="material-icons remove">&#xE316;</i>
        </span>
      </span> 
    </div>
    <div class="block_content toggle-footer collapse" id="block_newsletter_dropdown">
      <?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
        <p class="description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>
      <?php }?> 
      <div class="row">
        <div class="col-xs-12">
          <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
            <div class="form-group">
              <div class="input-wrapper">
                <input
                  name="email"
                  type="text"
                  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                  placeholder="<?php echo smartyTranslate(array('s'=>'Your email...','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
"
		  aria-labelledby="block-newsletter-label"
                >
              </div>
              <button
                class="btn btn-outline"
                name="submitNewsletter"
                type="submit"
              >
                <i class="fa fa-envelope"></i><span><?php echo smartyTranslate(array('s'=>'Send','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
              </button>
              <input type="hidden" name="action" value="0">
            </div>
          </form>
        </div>
        <div class="col-xs-12">
          <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
            <p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

            </p>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
