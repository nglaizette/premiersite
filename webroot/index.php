<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

define('WEBROOT', dirname(__FILE__));
define('ROOT', dirname(WEBROOT)); // dirname dossier parent
define('DS', DIRECTORY_SEPARATOR);
define('CORE', ROOT.DS.'core');
define('BASE_URL', dirname(dirname($_SERVER['SCRIPT_NAME'])));

require CORE.DS.'includes.php';
new Dispatcher();

for ($i = 0; $i < 10; ++$i) {
    echo 'N'.PHP_EOL;
}

echo $_SERVER['DOCUMENT_ROOT'];
?>

<pre>
	<?php print_r($_SERVER);
echo PHP_EOL;
echo __FILE__;
echo PHP_EOL;
echo CORE;
echo PHP_EOL;
echo BASE_URL;
?>
</pre>