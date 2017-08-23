<?php
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
//Request::setTrustedProxies(array('127.0.0.1'));
$app->get('/', function () use ($app) {
    return $app['twig']->render('index.html.twig');
})
->bind('homepage')
->before(function(Request $request, Application $app){
    if($app['user.manager']->getUser()){
        return $app->redirect($app['url_generator']->generate('dashboardDisplay', ['username' => $app['user.manager']->getUser()->getUsername()]));
    }       
})
;
// ----------------- User ----------------- //
$app
    ->match('/inscription', 'user.controller:registerAction')
    ->bind('register')
;
$app
    ->match('/connexion', 'user.controller:loginAction')
    ->bind('login')
;
$app
    ->match('/ajouter_tags', 'profile.controller:addTagsAction')
    ->bind('addTags')
    ->before(function(Request $request, Application $app){
        if(!$app['user.manager']->getUser()){
            $app['session']->getFlashBag()->add('error', 'Veuillez vous connecter pour accéder au site');
            return $app->redirect($app['url_generator']->generate('homepage'));
        }        
    })
;
$app
    ->get('/{username}/profil', 'profile.controller:displayProfileAction')
    /*->assert('username', '/^[a-zA-Z0-9_-]{6,20}$/') /* username caractères acceptés : 
    a-z, A-Z, 0-9, _ -, de 6 à 20 caractères */
    ->bind('display')
    ->before(function(Request $request, Application $app){
        if(!$app['user.manager']->getUser()){
            $app['session']->getFlashBag()->add('error', 'Veuillez vous connecter pour accéder au site');
            return $app->redirect($app['url_generator']->generate('homepage'));
        }        
    })
;
$app
    ->match('/{username}/edition_profil', 'profile.controller:editProfileAction')
    ->bind('edit')
    ->before(function(Request $request, Application $app){
        if(!$app['user.manager']->getUser() || $app['user.manager']->getUser()->getUsername() != $request->get('username')){
            $app['session']->getFlashBag()->add('error', 'Veuillez vous connecter pour accéder au site');
            return $app->redirect($app['url_generator']->generate('homepage'));
        }        
    })
;
$app
    ->match('/deconnexion', 'user.controller:logoutAction')
    ->bind('logout')
;

$app
    ->get('/desinscription', 'user.controller:deleteUserAction')
    ->bind('user_delete')
;

$app
    ->match('/mot_de_passe_oublie', 'user.controller:forgottenPass')
    ->bind('forgottenPass')
;

// ----------------- Dashboard ----------------- //
$app
    ->get('/{username}/accueil', 'dashboard.controller:userMusicDisplayAction')
    ->bind('dashboardDisplay')
    ->before(function(Request $request, Application $app){
        if(!$app['user.manager']->getUser() || $app['user.manager']->getUser()->getUsername() != $request->get('username') || !$app['user.manager']->getUser()->getTags()){
            if(!$app['user.manager']->getUser()->getTags()){
                $app['session']->getFlashBag()->add('error', 'Veuillez sélectionner au moins une catégorie');
                return $app->redirect($app['url_generator']->generate('addTags'));
            }
            else{
                $app['session']->getFlashBag()->add('error', 'Veuillez vous connecter pour accéder au site');
                return $app->redirect($app['url_generator']->generate('homepage'));
            }            
        }        
    })
;
    
$app
    ->get('/{username}/bibliotheque', 'dashboard.controller:userLibraryMusicDisplayAction')
    ->bind('dashboardLibrary')
    ->before(function(Request $request, Application $app){
        if(!$app['user.manager']->getUser() || $app['user.manager']->getUser()->getUsername() != $request->get('username')){
            $app['session']->getFlashBag()->add('error', 'Veuillez vous connecter pour accéder au site');
            return $app->redirect($app['url_generator']->generate('homepage'));
        }
    })
;
$app
    ->get('/amis', 'dashboard.controller:userFriendsDisplayAction')
    ->bind('dashboardfriend')
    ->before(function(Request $request, Application $app){
        if(!$app['user.manager']->getUser()){
            $app['session']->getFlashBag()->add('error', 'Veuillez vous connecter pour accéder au site');
            return $app->redirect($app['url_generator']->generate('homepage'));
        }
    })
;
// ----------------- Album --------------------- //
$app
    ->get('/album/{id_album}', 'music.controller:showAlbumAction')
    ->bind('showAlbum')
;
$app
    ->get('/artist/{id_artist}', 'music.controller:showArtistAction')
    ->bind('showArtist')
;
// ----------------- Recherche --------------------- //
$app
    ->get('/search', 'search.controller:searchAction')
    //->value('query', null) // valeur par défaut pour l'id
    ->bind('search')
;
//--------------------ajax----------------------------//
$app
    ->post('/ajax/addTrack', 'ajax.controller:addTrackAction')
    ->bind('ajax_addTrack')
;
$app
    ->post('/ajax/removeTrack', 'ajax.controller:removeTrackAction')
    ->bind('ajax_removeTrack')
;
$app
    ->post('/ajax/addFriend', 'ajax.controller:addFriendAction')
    ->bind('ajax_addFriend')
;
$app
    ->post('/ajax/removeFriend', 'ajax.controller:removeFriendAction')
    ->bind('ajax_removeFriend')
;
//-------------------------------------------------------//
$app->error(function (Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }
    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/'.$code.'.html.twig',
        'errors/'.substr($code, 0, 2).'x.html.twig',
        'errors/'.substr($code, 0, 1).'xx.html.twig',
        'errors/default.html.twig',
    );
    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});