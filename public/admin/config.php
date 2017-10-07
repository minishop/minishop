<?php
// HTTP
define('HTTP_SERVER', 'http://mycart.dev/admin/');
define('HTTP_CATALOG', 'http://mycart.dev/');

// HTTPS
define('HTTPS_SERVER', 'http://mycart.dev/admin/');
define('HTTPS_CATALOG', 'http://mycart.dev/');

// DIR
define('DIR_APPLICATION', __DIR__.'/');
define('DIR_SYSTEM', dirname(__DIR__).'/system/');
define('DIR_IMAGE', dirname(__DIR__).'/assets/image/');
define('DIR_STORAGE', dirname(dirname(__DIR__)) . '/storage/shop/');
define('DIR_CATALOG', dirname(__DIR__).'/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mpdo');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'mycart');
define('DB_PORT', '3306');
define('DB_PREFIX', 'shop_');

// MyCnCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
