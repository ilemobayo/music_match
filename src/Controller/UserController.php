<?php

namespace Controller;

use Entity\User;
use Form\Type\LoginType;
use Form\Type\RegisterType;
use Symfony\Component\HttpFoundation\Request;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author Hello
 */
class UserController extends ControllerAbstract{
    
    public function registerAction(Request $request){
        
        $user = new User;
        
        $registerform = $this->app['form.factory']->create(RegisterType::class, $user);
        $registerform->handleRequest($request);
        
        if ($registerform->isValid()) {
            
            $passHash = $this->app['user.manager']->encodePassword($user->getPassword());
 
            $this->app['user.repository']->save($user, 
               [
                   'pseudo' => $user->getUsername(),
                   'mdp' => $passHash,
                   'email' => $user->getEmail(),
                   'role' => 'ROLE_USER'
               ]
            );
        // do something with the data

        // redirect somewhere
        // //todo rediriger vers profil
        //return $app->redirect('...');
    }
        
        $registerFormView = $registerform->createView();
   
        return $this->render('user/register.html.twig',[
            'registerForm' => $registerFormView
        ]);
    }
    
    public function loginAction(Request $request){
        
        $currentUser = new User;
        
        $loginForm = $this->app['form.factory']->create(LoginType::class, $currentUser);
        $loginForm->handleRequest($request);
        
        if($loginForm->isValid()){
            $user = $this->app['user.repository']->findByEmail($currentUser->getEmail());
   
            if(!is_null($user)){
                if($this->app['user.manager']->verifyPassword($currentUser->getPassword(), $user->getPassword()))
                {
                    echo 'ok';
                    $this->app['user.manager']->login($user);
                    
                    print_r($this->app['user.manager']->getUser());
                    //return $this->redirectRoute('homepage');
                }
            }
            $this->addFlashMessage('Identification incorrecte', 'error');
        }
        
        return $this->render('user/login.html.twig', 
            [
                'loginForm' => $loginForm->createView(),
            ] 
        );
    }
}
