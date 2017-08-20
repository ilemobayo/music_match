<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 12/08/2017
 * Time: 17:54
 */

namespace Repository;


class ProfileRepository extends RepositoryAbstract
{
    public function saveTag(array $tags, $id){
        $this->db->delete('user_categories', 
            [
                'id_user' => $id
            ]
        );
        
        foreach ($tags as $tag){
            $tagdb = $this->db->fetchAssoc('SELECT * FROM categories WHERE genre = :tag',
                [
                    ':tag' => $tag
                ]
            );

//            $tagIsRegister = $this->db->fetchAssoc('SELECT * FROM user_categories WHERE id_category = :id_category AND id_user = :id_user',
//                [
//                    ':id_category' => $tagdb['id_category'],
//                    'id_user' => $id
//                ]
//            );

            if($tagdb /*&& !$tagIsRegister*/){
                $this->db->insert('user_categories',
                    [
                        'id_category' => $tagdb['id_category'],
                        'id_user' => $id
                    ]
                );
            }
        }
    }
}