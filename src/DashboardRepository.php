<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 16/08/2017
 * Time: 16:20
 */

namespace Repository;


use Controller\ControllerAbstract;

class DashboardRepository extends RepositoryAbstract
{

    public function getTable(){
        return 'library';
    }

    public function saveTrack($id_track, $id_user) {
        $data = [
            'id_track' => $id_track,
            'id_user' => $id_user
        ];

        $this->persist($data);
    }
}