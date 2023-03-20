<?php
define('APP_PATH', dirname(realpath(__FILE__)) . DS.'..');
define('VIEW_PATH', APP_PATH . DS . 'views' . DS);
define('TEMPLATE_PATH', APP_PATH . DS . 'template' . DS);

define('LANGUAGES_PATH', APP_PATH . DS . 'languages' . DS);


define('CSS', '/css/');
define('JS', '/js/');

//Database Credentials
defined('DATABASE_HOST_NAME')       ? null : define('DATABASE_HOST_NAME', 'localhost');
defined('DATABASE_USER_NAME')       ? null : define('DATABASE_USER_NAME', 'root');
defined('DATABASE_PASSWORD')        ? null : define('DATABASE_PASSWORD', 'P@W86i*%pCw4');
defined('DATABASE_DB_NAME')         ? null : define('DATABASE_DB_NAME', 'company');
defined('DATABASE_PORT_NUMBER')     ? null : define('DATABASE_PORT_NUMBER', 3306);
defined('DATABASE_CONN_DRIVER')     ? null : define('DATABASE_CONN_DRIVER', 1);

defined('APP_DEFAULT_LANGUAGE')     ? null : define ('APP_DEFAULT_LANGUAGE', 'ar');
