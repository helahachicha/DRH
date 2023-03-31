<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Infoficheevaluations Controller
 *
 * @method \App\Model\Entity\Infoficheevaluation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InfoficheevaluationsController extends AppController
{
   /**
      * getInfoficheevaluationByCat
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getInfoficheevaluationByCat(){
 
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

         

        $infoficheevaluations = $this->Infoficheevaluations->find('all', [
            'contain' => [
                'Categories'
            ],
            'conditions'=>[
                'categorie_id IS'=>$id

            ],
           
           
        ])->toArray();

        if(empty($infoficheevaluations)){
           throw new UnauthorizedException('Infoficheevaluations not found');
       }

        /*send result */

        $this->set([
            'success' => true,
            'data' => $infoficheevaluations,
            '_serialize' => ['success', 'data']
        ]);
    }



    /**
      * getAllNom
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getAllNom(){
 
        $infoficheevaluations = $this->Infoficheevaluations->find('all', [
            'fields'=>[
                'nomprenom'

            ],
               
        ])->toArray();

        /*send result */

        $this->set([
            'success' => true,
            'data' => $infoficheevaluations,
            '_serialize' => ['success', 'data']
        ]);
    }


    /**
      * getInfoficheevaluation
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getInfoficheevaluation(){
 
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

        $infoficheevaluations = $this->Infoficheevaluations->find('all', [
            'conditions'=>[
                'id IS'=>$id,
            ],
           
        ])->first();
        // debug($infoficheevaluations);die;
        
        if(empty($infoficheevaluations)){
           throw new UnauthorizedException('Infoficheevaluations not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $infoficheevaluations,
           '_serialize' => ['success', 'data']
       ]);
    }




     /**
      * deleteInfoficheevaluation
      *
      * @Input: id
      *
      * @Output: data
      */

      public function deleteInfoficheevaluation(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $infoficheevaluations = $this->Infoficheevaluations->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete$infoficheevaluations  */

        if (1==1){
            $this->Infoficheevaluations->delete($infoficheevaluations);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }

}
