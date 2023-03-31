<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Noteevaluations Controller
 *
 * @method \App\Model\Entity\Noteevaluation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NoteevaluationsController extends AppController
{

    /**
     * addNoteevaluation
     *
     * @Input:
     *         data:
     *          point (String) *Required
     *          indicateursuivi_id (Int) *Required
     *         
     * @Output: data : success message
     */
    public function addNoteevaluation(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create noteevaluations entity */
        if (1==1){
            $noteevaluations = $this->Noteevaluations->newEmptyEntity();
            $noteevaluations->point=$data->point;
            $noteevaluations->indicateursuivi_id=$data->indicateursuivi_id;   

            $this->Noteevaluations->save($noteevaluations); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
     * editNoteevaluation
     *
     * @Input:
     *         data:
     *          point (String) *Required
     *          indicateursuivi_id (Int) *Required
     * 
     * @Output: data : success message
     */
    public function editNoteevaluation(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $noteevaluations=$this->Noteevaluations->get($id);
         /* create noteevaluations entity */
        if (1==1){
            $noteevaluations->point=$data->point;
            $noteevaluations->indicateursuivi_id=$data->indicateursuivi_id;     

            $this->Noteevaluations->save($noteevaluations); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }




    /**
      * getNoteevaluationByindisuivi
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getNoteevaluationByindisuivi(){
 
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

        $noteevaluations = $this->Noteevaluations->find('all', [
            'contain' => [
                'Indicateursuivis'
            ],
            'conditions'=>[
                'indicateursuivi_id IS'=>$id
            ],
            
           
           
        ])->toArray();

        if(empty($noteevaluations)){
           throw new UnauthorizedException('Noteevaluations not found');
       }
       
       /*send result */

       $this->set([
           
           'success' => true,
           'data' => $noteevaluations,
           '_serialize' => ['success' , 'data' , 'Somme'], 
       ]);
    }


    
    /**
      * getIndicateursuiviBySouscomp
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getIndicateursuiviBySouscomp(){
 
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

        $indicateursuivis = $this->Indicateursuivis->find('all', [

            'conditions'=>[
                'souscompetence_id IS'=>$id

            ],
           
           
        ])->toArray();

        if(empty($indicateursuivis)){
           throw new UnauthorizedException('Indicateursuivis not found');
       }


       /*send result */

       $this->set([
           'success' => true,
           'data' => $indicateursuivis,
           '_serialize' => ['success', 'data']
       ]);
    }

    /* function Calcul */

    public function Calcul(){

           /*Calcul Score  */

           $noteevaluations = $this->getNoteevaluationByindisuivi();
           $indicateursuivis = $this->getIndicateursuiviBySouscomp();
           $S=0;
           foreach ($noteevaluations as $noteevaluation) {
            $S += $point->point;
        }
            $noteevaluations = $this->Noteevaluations->count();
    
            $moyenne=0;
            $moyenne=$S/$noteevaluations;

        /*send result */

        $this->set([
            'success' => true,
            'Moyenne' => $moyenne,
            '_serialize' => ['success', 'Moyenne']
        ]);
    }
}