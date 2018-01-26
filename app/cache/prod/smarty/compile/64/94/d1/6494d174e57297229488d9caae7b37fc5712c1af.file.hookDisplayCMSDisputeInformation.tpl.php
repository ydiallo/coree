<?php /* Smarty version Smarty-3.1.19, created on 2018-01-25 18:12:53
         compiled from "modules\ps_legalcompliance\views\templates\hook\hookDisplayCMSDisputeInformation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:326245a6a1e2528f143-28796886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6494d174e57297229488d9caae7b37fc5712c1af' => 
    array (
      0 => 'modules\\ps_legalcompliance\\views\\templates\\hook\\hookDisplayCMSDisputeInformation.tpl',
      1 => 1516871940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326245a6a1e2528f143-28796886',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6a1e252a2253_60368049',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6a1e252a2253_60368049')) {function content_5a6a1e252a2253_60368049($_smarty_tpl) {?>

<h4>
	<?php echo smartyTranslate(array('s'=>'Information regarding online dispute resolution pursuant to Art. 14 Para. 1 of the ODR (Online Dispute Resolution Regulation):','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>

</h4>

<p>
	<?php echo smartyTranslate(array('s'=>'The European Commission gives consumers the opportunity to resolve online disputes pursuant to Art. 14 Para. 1 of the ODR on one of their platforms. The platform ([1]http://ec.europa.eu/consumers/odr[/1]) serves as a site where consumers can try to reach out-of-court settlements of disputes arising from online purchases and contracts for services.','sprintf'=>array('[1]'=>'<a href="http://ec.europa.eu/consumers/odr" target="_blank" rel="nofollow">','[/1]'=>'</a>'),'d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>

</p>
<?php }} ?>
