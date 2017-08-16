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
       
        $result = '';
        $query = $request->query->get('q');
        
        if($query){
            $result = $this->app['spotify.api']->search($query, 'album');
        }
     
        return $this->render('search/search.html.twig',
            [
                'result' => $result,
                'query' => $query
            ]
        );
    }
    
            
}
