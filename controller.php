<?php 
global $twig;
require_once './vendor/autoload.php';
$template_dir = './views/';

$vars = array(
  'name' => 'Steve'
);

$loader = new Twig_Loader_Filesystem($template_dir);
$loader->addPath('./assets');

$twig = new Twig_Environment($loader, array(
    'cache' => false, //'/tmp/cache',
    'debug' => true
));