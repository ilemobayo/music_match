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

    protected function buildEntity(array $data) {
        $user = new User();
        $user->setId($data['id_user']);
        $user->setUsername($data['pseudo']);
        $user->setPassword($data['mdp']);
        $user->setEmail($data['email']);
        $user->setRole($data['role']);
        return $user;
    }

}
