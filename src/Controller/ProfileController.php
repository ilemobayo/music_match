<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

/**
 * Description of ProfilController
 *
 * @author Hello
 */
class ProfileController extends ControllerAbstract {
    
    public function displayProfileAction($username){
        $profile = $this->app['user.repository']->findByUsername($username);
    
        return $this->render('user/profile.html.twig',
            [
                'profile' => $profile
            ]);
    }
    
    public function editProfileAction($username){
        $profile = $this->app['user.repository']->findByUsername($username);
    
        return $this->render('user/edit.html.twig',
            [
                'profile' => $profile
            ]);
    }
}
