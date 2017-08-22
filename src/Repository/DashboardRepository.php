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
        $isRegisterTrack = $this->db->fetchAssoc(
            'SELECT * FROM ' . $this->getTable() . ' WHERE id_track = :id_track AND id_user = :id_user',
            [
                ':id_track' => $id_track,
                ':id_user' => $id_user
            ]
        );
        if($isRegisterTrack){
            return false;
        }
        $this->persist($data);
        return true;
    }

    public function deleteTrack($id_track, $id_user){
        $data = [
            'id_track' => $id_track,
            'id_user' => $id_user
        ];
        $this->db->delete($this->getTable(), $data);
        return true;
    }
}