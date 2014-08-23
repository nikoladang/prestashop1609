<?php
if (($_SERVER["HTTP_HOST"] === 'localhost')) {
  $db_name = 'prestashop1609';
  $db_user = 'root';
  $password = '';
} elseif (($_SERVER["HTTP_HOST"] === 'tieucanhthuytinh.com') || ($_SERVER["HTTP_HOST"] === 'www.tieucanhthuytinh.com')) {
  $db_name = 'tieucanh';
  $db_user = 'tieucanh';
  $password = 'tieucanhvnaka';
}
define('_DB_SERVER_', 'localhost');
define('_DB_NAME_', $db_name);
define('_DB_USER_', $db_user);
define('_DB_PASSWD_', $password);
define('_DB_PREFIX_', 'ps_');
define('_MYSQL_ENGINE_', 'InnoDB');
define('_PS_CACHING_SYSTEM_', 'CacheMemcache');
define('_PS_CACHE_ENABLED_', '0');
define('_MEDIA_SERVER_1_', '');
define('_MEDIA_SERVER_2_', '');
define('_MEDIA_SERVER_3_', '');
define('_COOKIE_KEY_', 'sdvVpOgmOTyBhgp4PazcrSwRHiv3T2Uacmdshej039kcng1T4e1m9EhK');
define('_COOKIE_IV_', 'iToFx9db');
define('_PS_CREATION_DATE_', '2014-08-10');
if (!defined('_PS_VERSION_'))
	define('_PS_VERSION_', '1.6.0.9');
define('_RIJNDAEL_KEY_', 'PY6JRytgjusvYv7CudxaL1EFn5ZhkXeA');
define('_RIJNDAEL_IV_', 'qjWEToexbAb6qm71mw7vBQ==');
