<?php
/**
 * @author           Jam <developer478@gmail.com>
 * @copyright        (c) 2023-2025, Jam. All Rights Reserved.
 * @link             https://codexnova.com
*/

// Note, the script requires PHP 8.0 or higher
namespace JamBlog;

use JamBlog\Engine as Engine;

if (version_compare(PHP_VERSION, '8.0', '<')){
    exit('Your PHP version is ' . PHP_VERSION . '. The script requires PHP 8.0 or higher.');
}

if (!extension_loaded('mbstring')){
    exit('The script requires "mbstring" PHP extension. Please install it.');
}

// Set constants (root server path + root URL)
define('PROT', (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') ? 'https://' : 'http://');

define('ROOT_URL', PROT . $_SERVER['HTTP_HOST'] . str_replace('\\', '', dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES))) . '/');

// Remove backslashes for Windows compatibility
define('ROOT_PATH', __DIR__ . '/');

try
{
    require ROOT_PATH . 'Engine/Loader.php';
    Engine\Loader::getInstance()->init(); // Load necessary classes
    $aParams = ['ctrl' => (!empty($_GET['p']) ? $_GET['p'] : 'blog'), 'act' => (!empty($_GET['a']) ? $_GET['a'] : 'index')];
    Engine\Router::run($aParams);
}
catch (\Exception $exception)
{
    echo $exception->getMessage();
}
