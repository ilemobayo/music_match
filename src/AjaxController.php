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
    public function addTracktAction(Request $request){
        $id = $request->request->get('id');
        $this->app['dashboard.repository']->saveTrack($id, $this->app['user.manager']->getUser()->getId());
        $data = [
            'status' => 'succes',
            'message' => 'le titre aété ajouter à votre bibliotheque'
        ];
        return $this->app->json($data, 200);
    }
}