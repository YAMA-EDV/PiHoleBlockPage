<?php
/**
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/

require 'vendor/autoload.php';

/**
 * Setup the blade template
 */
use Carbon\Carbon;
use Philo\Blade\Blade;
use Dotenv\Dotenv;

/** @var Dotenv $config Load the config file. */
$config = new Dotenv(__DIR__);
$config->load();

/** @var string Get current time */
$time = Carbon::now();

/** @var Blade $blade the blade instance */
$blade = new Blade($_ENV['VIEWS'], $_ENV['CACHE']);

/**
 * Detailed Pi-Hole Block Page: Show "Website Blocked" if user browses to site,
 * but not to image/file requests based on the work of WaLLy3K for DietPi & Pi-Hole
 */
$uri = escapeshellcmd($_SERVER['REQUEST_URI']);
$serverName = escapeshellcmd($_SERVER['SERVER_NAME']);

/** @var string $uriExt Retrieve server URI extension (EG: jpg, exe, php)*/
$uriExt = pathinfo($uri, PATHINFO_EXTENSION);

/** @var string $piHoleVersion The PiHole version */
$piHoleVersion = exec('cd /etc/.pihole/ && git describe --tags --abbrev=0');

/** @var string set the local $local */
$local = $_ENV['LOCAL'];

/** @var array $lang get the language file as array so we can use it in our blade templates */
$lang = include $_ENV['LANG'].'/'.$local.'.php';

/** @var array $varArray The array with variables that will be send to the view*/
$varArray = [
    'local'         => $local,
    'lang'          => $lang,
    'public'        => $_ENV['PUBLIC'],
    'uri'           => $uri,
    'serverName'    => $serverName,
    'uriExt'        => $uriExt,
];

/** Create the view and render it to the user*/
echo $blade->view()->make('page', $varArray)->render();