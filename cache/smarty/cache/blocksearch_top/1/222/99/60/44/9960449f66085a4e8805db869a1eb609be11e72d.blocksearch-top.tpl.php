<?php /*%%SmartyHeaderCode:92190872253e8bb9f6864b7-46736014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9960449f66085a4e8805db869a1eb609be11e72d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/prestashop1609/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1406792456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92190872253e8bb9f6864b7-46736014',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f8859fb2e8a4_52908223',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f8859fb2e8a4_52908223')) {function content_53f8859fb2e8a4_52908223($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="http://localhost/prestashop1609/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Search</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
