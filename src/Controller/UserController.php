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

        if ($registerform->isSubmitted() && $registerform->isValid()) {



            /*
             * verifie si l'utilisateur existe deja ou non avant de l'enregistrer en bdd
             */

            //dump($this->app['user.repository']->findByUsername($user->getUsername()));

            if(
                !$this->app['user.repository']->findByUsername($user->getUsername())&&
                !$this->app['user.repository']->findByEmail($user->getEmail())
            ){
                $passHash = $this->app['user.manager']->encodePassword($user->getPassword());


                $this->app['user.repository']->save($user,
                   [
                       'pseudo' => $user->getUsername(),
                       'mdp' => $passHash,
                       'email' => $user->getEmail(),
                       'register_date' => date('Y-m-d H:i:s'),
                       'role' => 'ROLE_USER'
                   ]
                );

                $this->app['user.manager']->login($user);

                // redirect somewhere
                return $this->redirectRoute('addTags');
            }

            $this->addFlashMessage('le pseudo ou l\' email sont déja pris', 'error');
        }

        
        $registerFormView = $registerform->createView();
   
        return $this->render('user/register.html.twig',[
            'registerForm' => $registerFormView
        ]);
    }
    
    public function loginAction(Request $request){
       
        if($request->isMethod('POST')){
            $user = $this->app['user.repository']->findByEmail($request->request->get('email'));
            
            if(!is_null($user)){
                if($this->app['user.manager']->verifyPassword($request->request->get('password'), $user->getPassword()))
                {
                    $this->app['user.manager']->login($user);

                    return $this->redirectRoute('dashboardDisplay', ['username' => $user->getUsername()]);
                }
            }
            $this->addFlashMessage('Identification incorrecte', 'error');
        }
        
        return $this->redirectRoute('homepage');
        
    }
    
    public function logoutAction(){
        $this->app['user.manager']->logout();
        
        return $this->redirectRoute('homepage');
    }
    
//    public function selectTagsAction(){
//        $tags = $this->app['user.manager']->getUser()->getTags();
//        
//        return $this->render('edit.html.twig', 
//            [
//                'tags' => getTags()
//            ]
//        );
//    }
    
    public function deleteUserAction(){
        $this->app['user.repository']->deleteUser($this->app['user.manager']->getUser());
        $this->app['session']->getFlashBag()->add('success', 'Votre compte a bien été supprimé');
        return $this->logoutAction();
    }
}
