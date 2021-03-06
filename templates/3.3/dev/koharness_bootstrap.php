<?php
/**
 * Generates a bootstrap in the module base directory (equivalent to the index.php) that defines the
 * koharnessed paths.
 *
 * @author    Andrew Coulton <andrew@ingenerator.com>
 * @copyright 2013 inGenerator Ltd
 * @licence   BSD
 */
$template = <<<TEMPLATE
<?php
// This bootstrap file was generated by koharness. Use it to load the Kohana environment for your tests.
// It serves the same job that would be done by your index.php in a standard Kohana install.

// Define the Kohana environment
define('APPPATH', '$apppath');
define('MOPDATH', '$modpath');
define('SYSPATH', '$syspath');
define('DOCROOT', '$docroot');
define('KOHARNESS_SRC', '$cwd/vendor/ingenerator/koharness/');
define('EXT', '.php');
error_reporting(E_ALL | E_STRICT);
define('KOHANA_START_TIME', microtime(TRUE));
define('KOHANA_START_MEMORY', memory_get_usage());

// Require the application bootstrap
require(APPPATH.'bootstrap.php');

TEMPLATE;
return $template;
