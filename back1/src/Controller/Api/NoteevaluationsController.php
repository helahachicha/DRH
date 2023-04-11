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
     *          point_id (Int) *Required
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
            $noteevaluations->point_id=$data->point;
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
      * getNoteevaluationByFormcomp
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getNoteevaluationByFormcomp(){
 
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

            'conditions'=>[
                'formcompetence_id IS'=>$id
            ],
            'contain'=>[
                'Points'
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
      * Calcul
      *
      * @Input: id
      *
      * @Output: data
      */

    public function Calcul() {

        $id = $this->request->getQuery('id');

        // Create an instance of indicateursuivis
        $indicateursuivis = $this->loadComponent('Indicateursuivis');
    
        // Call the getIndicateursuiviByFormcomp of indicateursuivis
        $resultIndi = $indicateursuivis->getIndicateursuiviByFormcomp($id);

         // Count the number of elements in $resultIndi
         $resultIndiCount = count($resultIndi);


        // Call the getNoteevaluationByFormcomp 
        $resultNote = $noteevaluations->getNoteevaluationByFormcomp($id);
    
        //Sum of elements in resultNote
        $resultNoteSum = array_sum($resultNote);

        //Division
        $score = $resultNoteSum / $resultIndiCount;

        debug($score);die;

        /*send result */
        $this->set([
            'success' => true,
            'Moyenne' => $score,
            '_serialize' => ['success', 'Moyenne']
        ]);
    }




    

    public function caluculPoint()
    {
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            debug($data);die;

        }
         /* create noteevaluations entity */
        if (1==1){
            $noteevaluations = $this->Noteevaluations->newEmptyEntity();
            $noteevaluations->point_id=$data->point_id;
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
}
