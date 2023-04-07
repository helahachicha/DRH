<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Formcompetences Controller
 *
 * @property \App\Model\Table\FormcompetencesTable $Formcompetences
 * @method \App\Model\Entity\Formcompetence[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FormcompetencesController extends AppController
{
    /****
      * getFormcompetencebyDetailppId
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getFormcompetencebyDetailppId(){
 
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

         

        $formcompetences = $this->Formcompetences->find('all', [
            'conditions'=>[
                'formcompetences.detailprofilposte_id IS'=>$id

            ],
            'contain' => [
                'Competences','Niveauvises','Indicateursuivis'
              ],
    
        ])->toArray();

        if(empty($formcompetences)){
           throw new UnauthorizedException('Formcompetences not found');
       }

        /*send result */

        $this->set([
            'success' => true,
            'data' => $formcompetences,
            '_serialize' => ['success', 'data']
        ]);
    }

}
