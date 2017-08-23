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
        $tags = $this->searchTagsUser($dbUser['id_user']);
        $idTracks = $this->findTracksUser($dbUser['id_user']);
        if(!empty($dbUser)){
            return $this->buildEntity($dbUser, $tags, $idTracks);
        }
    }
    
    public function findByUsername($username){
        $dbUser = $this->db->fetchAssoc(
            'SELECT * FROM users WHERE pseudo = :pseudo',
            [
                ':pseudo' => $username
            ]
        );
        $tags = $this->searchTagsUser($dbUser['id_user']);
        $idTracks = $this->findTracksUser($dbUser['id_user']);
        if(!empty($dbUser)){
            return $this->buildEntity($dbUser, $tags, $idTracks);
        }
        
    }
    
    
    public function findUserFriend($id_user){
        
        $sql = 'SELECT users.id_user, users.pseudo, users.mdp, users.email, users.role, users.register_date, users.picture FROM user_relationships left JOIN users ON user_relationships.id_user = users.id_user  WHERE user_relationships.id_friend = :id_user' .
' UNION'.
' SELECT users.id_user, users.pseudo, users.mdp, users.email, users.role, users.register_date, users.picture FROM user_relationships left JOIN users ON user_relationships.id_friend = users.id_user  WHERE user_relationships.id_user = :id_user';
        $dbUsers = $this->db->fetchAll($sql,
            [
                ':id_user' => $id_user
            ]
        );
           
        if(empty($dbUsers)){
            return FALSE;
        }
           
        $users = [];
        foreach ($dbUsers as $dbUser){
            $users[] = $this->buildEntity($dbUser);
        }
        return $users;
    }
    
    
    public function save($entity, array $data){
        // Si la catégorie a un id, on est en update
        // sinon, en insert
        $where = !empty($entity->getId())
            ? ['id_user' => $entity->getId()]
            : null
        ;
        // Appel à la méthode de RepositoryAbstract pour enregistrer
        $this->persist($data, $where);
        // On set l'id quand on est en insert
        if(empty($entity->getId())) {
            $entity->setId($this->db->lastInsertid());
        }
    }
    /**
     * recharche les tags de l'utilisateur grâce a son id
     * @param $id
     * @return array
     */
    protected function searchTagsUser($id){
        $dbUserCategories = $this->db->fetchAll('SELECT c.genre FROM user_categories uc JOIN categories c ON uc.id_category = c.id_category WHERE uc.id_user = :id_user',
            [
                ':id_user' => $id
            ]
        );
        $tags= [];
        foreach ($dbUserCategories as $tag){
            $tags[] = $tag['genre'];
        }
        return $tags;
    }
    public function findTracksUser($id_user){
        $sql = 'SELECT id_track FROM library WHERE id_user = :id_user';
        $dbtracks =  $this->db->fetchAll($sql, [
                ':id_user' => $id_user
            ]
        );
        $tracks = [];
        foreach ($dbtracks as $dbtrack){
            $tracks[] = $dbtrack['id_track'];
        }
        return $tracks;
    }
    protected function buildEntity(array $data, array $tags = [], array $idTracks = []) {
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
        if(!empty($idTracks)){
            $user->setIdTracks($idTracks);
        }
        return $user;
    }
}