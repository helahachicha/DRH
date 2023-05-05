<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Detailprofilpostes Controller
 *
 * @method \App\Model\Entity\Detailprofilposte[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DetailprofilpostesController extends AppController
{

    /**
      * getDetailppByCat
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getDetailppByCat(){
        $id = $this->request->getQuery('id');

        /* search */
        if (1 == 1) {
            if (!isset($id) or empty($id) or $id == null) {
                throw new UnauthorizedException('Id is Required');
            }

            if (!is_numeric($id)) {
                throw new UnauthorizedException('Id is not Valid');
            }
        }

       $detailprofilpostes = $this->Detailprofilpostes->find('all', [

        'conditions'=>[
            'detailprofilpostes.id IS'=>$id,
        ],

        'contain' => [
            'Profilpostes',
            'Categories.Niveauvises',
            'Formcompetences.Competences.Indicateursuivis'=>['conditions'=>[
                'Indicateursuivis.detailprofilposte_id IS'=>$id,
            ]],
            'Formcompetences.Competences.Souscompetences'=>['conditions'=>[
                'Souscompetences.detailprofilposte_id IS'=>$id,
            ]],
            'Formcompetences.Competences.Souscompetences.Indicasoucompas'=>['conditions'=>[
                'Indicasoucompas.detailprofilposte_id IS'=>$id,
            ]],
        ],
    ])->first();


        /* send result */
        $this->set([
            'success' => true,
            'data' => $detailprofilpostes,
            '_serialize' => ['success', 'data']
        ]);
    }
    

}
