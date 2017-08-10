<?php

use Controller\UserController;
use Repository\UserRepository;
use Service\UserManager;
use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\FormServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Silex\Provider\LocaleServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\SessionServiceProvider;
use Silex\Provider\TranslationServiceProvider;
use Silex\Provider\TwigServiceProvider;

$app = new Application();
$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider(),
        [
            'twig.form.templates' => [
                'bootstrap_3_layout.html.twig'
            ]
        ]
    );
$app->register(new HttpFragmentServiceProvider());
$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...
    
    return $twig;
});

$app->register(
    new DoctrineServiceProvider(),
        [
            'db.options' => [
                'driver' => 'pdo_mysql',
                'host' => 'localhost',
                'dbname' => 'bdd_projet',
                'user' => 'root',
                'password' => '',
                'charset' => 'utf8'
            ]
        ]
);

// $app['session'] = gestionnaire de session de symfony
$app->register(new SessionServiceProvider());
$app->register(new FormServiceProvider());
$app->register(new LocaleServiceProvider());
$app->register(new TranslationServiceProvider(), array(
    'translator.domains' => array(),
));


// ----------------- Controller ----------------- //
            
$app['user.controller'] = function() use($app){
    return new UserController($app);
};          
     

// ----------------- Repository ----------------- //

$app['user.repository'] = function() use($app){
    return new UserRepository($app);
};


// ----------------- Manager ----------------- //

$app['user.manager'] = function() use($app){
    return new UserManager($app['session']);
};

return $app;
