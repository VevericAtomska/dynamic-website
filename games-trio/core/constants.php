<?php
define('URL_SCRIPT_NAME', $_SERVER['PHP_SELF']);

//informacije o serveru i izvrsnom okruzenju


define('URL_SCRIPT', $_SERVER['REQUEST_URI']);

define('URL_E404', URL_SCRIPT_NAME . '?page=e404');

define('DIR_LOGIN', DIR_MODULES . 'login/');
define('DIR_ANALYSIS', DIR_VIEW . 'analysis/');
define('DIR_CONTACT', DIR_VIEW . 'contact/');
define('DIR_FAQ', DIR_VIEW . 'faq/');
define('DIR_GAMES', DIR_VIEW . 'games/');
define('DIR_GENRES', DIR_VIEW . 'genres/');
define('DIR_INSTALLATION', DIR_VIEW . 'installation/');
define('DIR_TEMPLATE', DIR_VIEW . 'template/');
define('DIR_404', DIR_VIEW.'404/');


define('DIR_PUBLIC', DIR_ROOT . 'public/');
define('DIR_ASSETS', DIR_PUBLIC . 'assets/');
define('DIR_BANNERS', DIR_ASSETS.'banners/');
define('DIR_ICONS', DIR_ASSETS.'icons/');
define('DIR_IMAGES', DIR_ASSETS.'images');
define('DIR_IMG', DIR_ASSETS.'img/');



define('DIR_CSS', DIR_PUBLIC . 'css/');

define('DIR_JS', DIR_PUBLIC . 'js/');




?>