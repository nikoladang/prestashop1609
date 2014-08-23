<?php /* Smarty version Smarty-3.1.19, created on 2014-08-11 19:48:31
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/prestashop1609/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148348228653e8bb9fefee83-52224226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '604c7a26cdc8a934c95a6e8b484da54f92f2e506' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/prestashop1609/modules/blockfacebook/blockfacebook.tpl',
      1 => 1406792506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148348228653e8bb9fefee83-52224226',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e8bba0029bd9_12946176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e8bba0029bd9_12946176')) {function content_53e8bba0029bd9_12946176($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
