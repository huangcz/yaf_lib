<?php

define("APP_PATH",  dirname(__FILE__));
define("LIB_PATH",  APP_PATH.'/application/library/');
define("MODULE_NAME",  '');

define("IS_WIN",  true);
define("APP_DEBUG",  true);

//添加钩子，在app_ini的时候初始书数据库、引入functions.php
//include APP_PATH.'/application/library/functions.php';
$app  = new Yaf_Application(APP_PATH . "/conf/application.ini");
Yaf_Loader::import("functions.php");
$app->getDispatcher()->throwException(FALSE);
$app->getDispatcher()->setErrorHandler("errorHandler");

$app->run();

//test