<?php
ini_set('error_log', '_LOG_');

define('APP_NAME', 'Ice Hrm');
define('FB_URL', 'Ice Hrm');
define('TWITTER_URL', 'Ice Hrm');

define('CLIENT_NAME', 'app');
define('APP_BASE_PATH', '../');
define('CLIENT_BASE_PATH', '../app/');
define('BASE_URL','http://rh-kgtrans.herokuapp.com/');
define('CLIENT_BASE_URL','http://rh-kgtrans.herokuapp.com/app/');

define('APP_DB', 'sql11443040');
define('APP_USERNAME', 'sql11443040');
define('APP_PASSWORD', 'iIxXpD8m2a');
define('APP_HOST', 'sql11.freemysqlhosting.net');
define('APP_CON_STR', 'mysqli://'.APP_USERNAME.':'.APP_PASSWORD.'@'.APP_HOST.'/'.APP_DB);

//file upload
define('FILE_TYPES', 'jpg,png,jpeg');
define('MAX_FILE_SIZE_KB', 10 * 1024);
