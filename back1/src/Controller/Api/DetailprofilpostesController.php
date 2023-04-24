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
        if(1==1){
            if (!isset($id) or empty($id) or $id == null ){
               throw new UnauthorizedException('Id is Required');
            }

            if(!is_numeric($id)){
               throw new UnauthorizedException('Id is not Valid');
            }
        }


        $detailprofilpostes = $this->Detailprofilpostes->find('all', [
             /*'contain' => [
               'Categories','Niveauvises','Competences.Indicateursuivis'
             ],*/
            'conditions'=>[
                'detailprofilpostes.categorie_id IS'=>$id,
            ],
            'contain' => [
                'Formcompetences','Formcompetences.Competences.Indicateursuivis','Formcompetences.Competences.Souscompetences.Indicasoucompas'
              ],

        ])->first();

        if(empty($detailprofilpostes)){
           throw new UnauthorizedException('Detailprofilpostes not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $detailprofilpostes,
           '_serialize' => ['success', 'data']
       ]);
    }


}
