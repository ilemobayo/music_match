<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Controller;
use Symfony\Component\HttpFoundation\Request;
/**
 * Description of SearchController
 *
 * @author Hello
 */
class SearchController extends ControllerAbstract {
    public function searchAction(Request $request){
        $query = $request->query->get('q');
        if($query){
            $resultAlbums = $this->app['spotify.api']->search($query, 'album', ['limit' => 8]);
            $resultTracks = $this->app['spotify.api']->search($query, 'track', ['limit' => 8]);
            $resultArtists = $this->app['spotify.api']->search($query, 'artist', ['limit' => 8]);
            $resultUsers = $this->app['search.repository']->searchUsers($query) ;
        }
        return $this->render('search/search.html.twig',
            [
                'resultAlbums' => (isset($resultAlbums)) ? $resultAlbums : null,
                'resultTracks' => (isset($resultTracks)) ? $resultTracks : null,
                'resultArtists' => (isset($resultArtists)) ? $resultArtists : null,
                'resultUsers' => (!empty($resultUsers)) ? $resultUsers : null,
                'query' => $query
            ]
        );
    }
}