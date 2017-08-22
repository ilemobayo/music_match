<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 16/08/2017
 * Time: 15:54
 */
namespace Controller;
use Symfony\Component\HttpFoundation\Request;
class AjaxController extends ControllerAbstract
{
    public function addTrackAction(Request $request){
        $id = $request->request->get('id');
        $ifRegisterTrack = $this->app['dashboard.repository']->saveTrack($id, $this->app['user.manager']->getUser()->getId());
        if($ifRegisterTrack) {
            $data = [
                'status' => 'succes',
                'message' => 'Le titre a été ajouté à votre bibliotheque'
            ];
        }else{
            $data = [
                'status' => 'error',
                'message' => 'Le titre est déjà présent dans votre bibliotheque'
            ];
        }
        return $this->app->json($data, 200);
    }
    public function removeTrackAction(Request $request){
        $id = $request->request->get('id');
        $this->app['dashboard.repository']->deleteTrack($id, $this->app['user.manager']->getUser()->getId());
            $data = [
                'status' => 'succes',
                'message' => 'Le titre à été supprimé de votre bibliotheque'
            ];
        return $this->app->json($data, 200);
    }
    public function addFriendAction(Request $request){
        $id = $request->request->get('id');
        $ifRegisterFriend = $this->app['search.repository']->savefriend($id, $this->app['user.manager']->getUser()->getId());
        if($ifRegisterFriend) {
            $data = [
                'status' => 'succes',
                'message' => 'L\'utilisateur a été ajouté à vos amis'
            ];
        }else{
            $data = [
                'status' => 'error',
                'message' => 'L\'utilisateur est déjà présent dans vos amis'
            ];
        }
        return $this->app->json($data, 200);
    }
    public function removeFriendAction(Request $request){
        $id = $request->request->get('id');
        $id_friend = $request->request->get('id_friend');
        
        $ifdelete = $this->app['search.repository']->removefriend($id, $this->app['user.manager']->getUser()->getId());
        $ifdelete2 =$this->app['search.repository']->removefriend($this->app['user.manager']->getUser()->getId(), $id_friend);
        
        if($ifdelete || $ifdelete2) {
            $data = [
                'status' => 'succes',
                'message' => 'L\'ami a été supprimé de vos contacts'
            ];
        }else{
            $data = [
                'status' => 'error',
                'message' => 'L\'utilisateur n\'existe pas dans vos contacts'
            ];
        }
        return $this->app->json($data, 200);
    }
}