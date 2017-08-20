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
                'message' => 'le titre a été ajouter à votre bibliotheque'
            ];
        }else{
            $data = [
                'status' => 'error',
                'message' => 'le titre est deja present dans votre bibliotheque'
            ];
        }
        return $this->app->json($data, 200);
    }
    public function removeTrackAction(Request $request){
        $id = $request->request->get('id');
        $this->app['dashboard.repository']->deleteTrack($id, $this->app['user.manager']->getUser()->getId());
            $data = [
                'status' => 'succes',
                'message' => 'le titre à été supprimer de votre bibliotheque'
            ];
        return $this->app->json($data, 200);
    }
}