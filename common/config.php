<?php
// Base directory for the project
define('BASE_PATH', dirname(__DIR__) . '/');

// Common paths
define('COMMON_PATH', BASE_PATH . 'common/');

// Site settings
define('SITE_TITLE', 'Algorithm Visualization');
define('DEVELOPER_NAME', 'Aiden Rader');

// NPM package name
define('CODE_RUNNER_PKG', '@foldbread/coderunner_plugin');
define('CODE_RUNNER_VERSION', '1.0.0'); //! Don't forget to bump when I publish a new version

// Asset versioning
define('ASSET_VER', '1.0.0');

// CDN versions
define('CDN_BOOTSTRAP_VER', '5.3.3');
define('CDN_JQUERY_VER',   '3.7.1');
define('CDN_MONACO_VER',   '0.49.0');
define('CDN_FONTAWESOME_VER', '6.5.2');

// Dev errors
define('APP_ENV', 'dev');
if (APP_ENV === 'dev') {
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
}