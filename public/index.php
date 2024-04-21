<html>
<!-- <link rel="stylesheet" href="/assets/styles/homepage.css"> -->
<link rel="about" href="/assets/main/about.php">

</html>


<?php

/* define('ROOT', 'http://localhost:8888/public'); */

$url = $_GET['url'] ?? 'home';
$url = explode("/", $url);

$page_name = trim($url[0]);
$filename = "/public/views/".$page_name.".php";

if(file_exists($filename))
{
    require_once $filename;
} 


require_once '../app/core/init.php';
require_once '../app/core/routes.php';
/* $env = parse_ini_file('../.env');  */
require '../app/core/config.php';

use app\core\Router;

require_once __DIR__ . '/helpers.php';

//to add a new route add to the app/core/routes.php array
$router = new Router($routes);
$router->serveRoute();




?>

