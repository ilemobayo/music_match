<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 21/08/2017
 * Time: 13:11
 */
namespace Repository;
use Entity\User;
class SearchRepository extends RepositoryAbstract
{
    public function searchUsers($query){
        $dbUsers = $this->db->fetchAll('SELECT * FROM users WHERE pseudo LIKE :query',
            [
                ':query' => '%' . $query . '%'
            ]
        );
        if(empty($dbUsers)){
            return false;
        }
        $users = [];
        foreach ($dbUsers as $dbUser){
            $users[] = $this->buildEntity($dbUser);
        }
        return $users;
    }

    public function savefriend($id_friend, $id_user){
        $data = [
            'id_friend' => $id_friend,
            'id_user' => $id_user
        ];
        $isRegisterFriend1 = $this->db->fetchAssoc(
            'SELECT * FROM user_relationships WHERE id_user = :id_user AND id_friend = :id_friend',
            [
                ':id_friend' => $id_friend,
                ':id_user' => $id_user
            ]
        );
        $isRegisterFriend2 = $this->db->fetchAssoc(
            'SELECT * FROM user_relationships WHERE id_user = :id_friend AND id_friend = :id_user',
            [
                ':id_friend' => $id_friend,
                ':id_user' => $id_user
            ]
        );
        if($isRegisterFriend1 || $isRegisterFriend2 || $id_user == $id_friend){
            return false;
        }
        $this->db->insert('user_relationships', $data);
        return true;
    }
    public function removefriend($id_friend, $id_user){
        $data = [
            'id_friend' => $id_friend,
            'id_user' => $id_user
        ];
        $isRegisterFriend1 = $this->db->fetchAssoc(
            'SELECT * FROM user_relationships WHERE id_user = :id_user AND id_friend = :id_friend',
            [
                ':id_friend' => $id_friend,
                ':id_user' => $id_user
            ]
        );
        $isRegisterFriend2 = $this->db->fetchAssoc(
            'SELECT * FROM user_relationships WHERE id_user = :id_friend AND id_friend = :id_user',
            [
                ':id_friend' => $id_friend,
                ':id_user' => $id_user
            ]
        );
        if($isRegisterFriend1 || $isRegisterFriend2){
            $this->db->delete('user_relationships', $data);
            return true;
        }
        return false;
    }
    protected function buildEntity(array $data) {
        $user = new User();
        $user->setId($data['id_user']);
        $user->setUsername($data['pseudo']);
        $user->setPassword($data['mdp']);
        $user->setEmail($data['email']);
        $user->setRole($data['role']);
        $user->setRegisterDate($data['register_date']);
        $user->setPicture($data['picture']);
        return $user;
    }
}