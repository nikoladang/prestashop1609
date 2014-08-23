<?php /*%%SmartyHeaderCode:146158950053e8bc3fba3eb0-17571324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '924616c98cccfc8fc2d6400692db382b37374ba3' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/prestashop1609/modules/socialsharing/views/templates/hook/socialsharing.tpl',
      1 => 1406792560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146158950053e8bc3fba3eb0-17571324',
  'variables' => 
  array (
    'PS_SC_TWITTER' => 0,
    'PS_SC_FACEBOOK' => 0,
    'PS_SC_GOOGLE' => 0,
    'PS_SC_PINTEREST' => 0,
    'product' => 0,
    'link' => 0,
    'module_dir' => 0,
    'product_image_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e8bc3fc0f755_98991844',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e8bc3fc0f755_98991844')) {function content_53e8bc3fc0f755_98991844($_smarty_tpl) {?>	<p class="socialsharing_product list-inline no-print">
					<button type="button" class="btn btn-default btn-twitter" onclick="socialsharing_twitter_click('Printed Summer Dress http://localhost/prestashop1609/en/summer-dresses/6-printed-summer-dress.html');">
				<i class="icon-twitter"></i> Tweet
				<!-- <img src="http://localhost/prestashop1609/modules/socialsharing/img/twitter.gif" alt="Tweet" /> -->
			</button>
							<button type="button" class="btn btn-default btn-facebook" onclick="socialsharing_facebook_click();">
				<i class="icon-facebook"></i> Share
				<!-- <img src="http://localhost/prestashop1609/modules/socialsharing/img/facebook.gif" alt="Facebook Like" /> -->
			</button>
							<button type="button" class="btn btn-default btn-google-plus" onclick="socialsharing_google_click();">
				<i class="icon-google-plus"></i> Google+
				<!-- <img src="http://localhost/prestashop1609/modules/socialsharing/img/google.gif" alt="Google Plus" /> -->
			</button>
										<button type="button" class="btn btn-default btn-pinterest" onclick="socialsharing_pinterest_click('http://localhost/prestashop1609/16-thickbox_default/printed-summer-dress.jpg');">
				<i class="icon-pinterest"></i> Pinterest
				<!-- <img src="http://localhost/prestashop1609/modules/socialsharing/img/pinterest.gif" alt="Pinterest" /> -->
			</button>
			</p>
<?php }} ?>
