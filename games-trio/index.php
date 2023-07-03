<?php

define('DIR_ROOT', './');
define('DIR_CORE', DIR_ROOT.'core/');
define('DIR_MODULES', DIR_ROOT . 'modules/');
define('DIR_VIEW', DIR_ROOT . 'view/');

//DIR
include(DIR_MODULES . "include_cofing.php");

include(DIR_CORE . "constants.php");
include(DIR_CORE . "functions.php");



$page = isset($_GET['page']) ? $_GET['page'] : '';


switch ($page) {
    case '':
    case 'home':
        $module_name = $page == '' ? "home" : "e404";
        break;
    default:
        $module_name = $page;
        break;
}

//$module_name = DIR_MODULES . "module-$module_name.php";

$module_name = DIR_MODULES . "include_{$module_name}.php";
if (file_exists($module_name)){
    include $module_name;
}
else{
    header( 'Location:' .  URL_E404);
}

mysqli_close($connect);
exit;
?>