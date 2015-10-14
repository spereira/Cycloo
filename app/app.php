<?php


use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;


// Register global error and exception handlers

ErrorHandler::register();
ExceptionHandler::register();


// Register service providers.

$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

//enregistre un nouveau service nommé dao.article sous la forme d'une instance partagée de la classe ArticleDAO. Une fois le service enregistré, l'appel $app['dao.article'] renverra cette instance.
// Register services.

$app['dao.article'] = $app->share(function ($app) {
    return new Cycloo\DAO\BikeDAO($app['db']);

});