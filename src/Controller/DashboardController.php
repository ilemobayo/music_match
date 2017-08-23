<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Controller;
/**
 * Description of DashboardController
 *
 * @author Hello
 */
class DashboardController extends ControllerAbstract {
    
    public function userMusicDisplayAction($username){
        $user = $this->app['user.repository']->findByUsername($username);
        // me sort un tag au hasard et 4 au hasard
        $tags = $user->getTags();
        shuffle($tags);
        $tags = array_slice( $tags, 0, 4 );
        $tag = $tags[array_rand($tags)];
        // me sort un titre au hasard
        $idTracks = $user->getIdTracks();
        if($idTracks){
            $idTrack = $idTracks[array_rand($idTracks)];
        }
        $recommendationsTag = '';
        $recommendations = null;
        $recommendationsArtist = null;
        $seed = [];
        if($tags){
            $seed ['seed_genres'] = $tags;
            if($idTracks) {
                $seed['seed_tracks'] = [$idTrack];
            }
            $recommendations = $this->app['spotify.api']->getRecommendations($seed);
            $recommendationsTag = $this->app['spotify.api']->getRecommendations(
                [
                    'seed_genres' => [$tag]
                ]
            );
            if($idTracks){
                $Artist = $this->app['spotify.api']->getTrack($idTrack)->artists[0];
                $recommendationsArtist = $this->app['spotify.api']->getRecommendations(
                    [
                        'seed_artists' => [$Artist->id]
                    ]
                );
            }
        }
        return $this->render('dashboard/home.html.twig',
            [
                'user' => $user,
                'recommendations' => $recommendations,
                'tag' => $tag,
                'recommendationsTag' => $recommendationsTag,
                'artist' => (isset($Artist)) ? $Artist->name : null,
                'recommendationsArtist' => $recommendationsArtist
            ]
        );
    }
    
     public function userLibraryMusicDisplayAction($username){
        $user = $this->app['user.repository']->findByUsername($username);
        $idTracks = $user->getIdTracks();
        $tracksUser = ($idTracks) ? $this->app['spotify.api']->getTracks($idTracks) : false;
        return $this->render('dashboard/library.html.twig',
            [
                'user' => $user,
                'tracksUser' => $tracksUser
            ]
        );
    }
    public function userFriendsDisplayAction(){
        $usersFriends = $this->app['user.repository']->findUserFriend($this->app['user.manager']->getUser()->getId());
        
        return $this->render('dashboard/friends.html.twig',
             [
                 'user' => $this->app['user.manager']->getUser(),
                 'usersFriends' => $usersFriends,
             ]
         );
    }
}