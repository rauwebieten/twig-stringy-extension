<?php

namespace examples;

use RauweBieten\TwigStringyExtension;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once  __DIR__ . '/../vendor/autoload.php';

$loader = new FilesystemLoader(__DIR__);
$twig = new Environment($loader);
$twig->addExtension(new TwigStringyExtension());

echo $twig->render('template.html.twig',[]);