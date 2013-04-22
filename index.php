<?php
//
// PHASE: BOOTSTRAP
//
define('NETFLEX_INSTALL_PATH', dirname(__FILE__));
define('NETFLEX_SITE_PATH', NETFLEX_INSTALL_PATH . '/site');

require(NETFLEX_INSTALL_PATH.'/src/NFlex/bootstrap.php');

$net = NFlex::Instance();

// PHASE: FRONTCONTROLLER ROUTE
//
$net->FrontControllerRoute();
//
// PHASE: THEME ENGINE RENDER
//
$net->ThemeEngineRender();



