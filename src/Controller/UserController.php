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
    
    public function forgottenPass(Request $request){
        $alpha = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        
        if($request->isMethod('POST')){
            $email = $request->request->get('email');
            $user = $this->app['user.repository']->findByEmail($email);
            
            if($user){
                shuffle($alpha);
                $mdp = implode(array_slice($alpha, 0, 9));
                $hash = $this->app['user.manager']->encodePassword($mdp);
                $user->setPassword($hash);
                
                
                $sujet = 'Réinitialisation du mot de passe Music Match';
                $message = 'Voici votre nouveau mot de passe : ' . $mdp . ".\n" . 'Veuillez l\'utiliser pour vous connecter à votre profil et le changer au plus vite.\n A bientôt sur Music Match !';
                $headers = 'From: musicmatch@noreply.fr';
                
                if(mail('luront@gmail.com', $sujet, $message, $headers)){
                    $this->app['user.repository']->save($user, 
                        [
                            'mdp' => $user->getPassword()
                        ]
                    );
                    
                    return $this->redirectRoute('homepage');
                }
            }
        }
        
        return $this->render('user/forgottenPass.html.twig');
    }
    
    public function selectTagsAction(){
        $tags = $this->app['user.manager']->getUser()->getTags();
        
        return $this->render('edit.html.twig', 
            [
                'tags' => getTags()
            ]
        );
    }
}