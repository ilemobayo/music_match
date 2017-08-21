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
}