<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Repository;

use Entity\User;

/**
 * Description of UserRepository
 *
 * @author Hello
 */

class UserRepository extends RepositoryAbstract {
    
//    public function save(User $user){
//           
//        $userData = array(
//            'pseudo' => $user->getUsername(),
//            'mdp' => $user->getPassword(),
//            'email' => $user->getEmail(),
//            'role' => 'ROLE_USER'
//            );
//        
//        $this->db->insert('users', $userData);
//    }
    
    public function findByEmail($email){
        $dbUser = $this->db->fetchAssoc(
            'SELECT * FROM users WHERE email = :email',
            [
                ':email' => $email
            ]
        );
        
        if(!empty($dbUser)){
            return $this->buildEntity($dbUser);
        }
    }
    
    public function findByUsername($username){
        $dbUser = $this->db->fetchAssoc(
            'SELECT * FROM users WHERE pseudo = :pseudo',
            [
                ':pseudo' => $username
            ]
        );
        
        $dbUserCategories = $this->db->fetchAll('SELECT c.genre FROM user_categories uc JOIN categories c ON uc.id_category = c.id_category WHERE uc.id_user = :id_user', 
            [
                ':id_user' => $dbUser['id_user']
            ]
        );
        
        $tags= [];
        
        foreach ($dbUserCategories as $tag){
            $tags[] = $tag['genre'];
        }
        
        if(!empty($dbUser)){
            return $this->buildEntity($dbUser, $tags);
        }
        
    }

    protected function buildEntity(array $data, array $tags) {
        $user = new User();
        $user->setId($data['id_user']);
        $user->setUsername($data['pseudo']);
        $user->setPassword($data['mdp']);
        $user->setEmail($data['email']);
        $user->setRole($data['role']);
        $user->setRegisterDate($data['register_date']);
        $user->setPicture($data['picture']);
        if(!empty($tags)){
            $user->setTags($tags);
        }
        return $user;
    }

}
