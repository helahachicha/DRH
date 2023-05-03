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


    /***
     * addInfoficheevaluation
     *
     * @Input:
     *         data:
     *   
     *          objetevaluation(String) *Required
     *          dateevaluation (Date) *Required
     *          decisiondirection (String) *Required
     *          employe_id(Int) *Required
     *         
     * @Output: data : success message
     */
    public function addInfoficheevaluation(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
           // $querry=$this->request->getData();
            //$data=json_decode($querry['data']); 
            $data=$this->request->getData();
           // debug($data);

        }     
        $this->loadModel('Employes');

        /* create employes entity */
        if (1==1){
         $employes = $this->Employes->newEmptyEntity(); 
         $employes->nomprenom=$data->nomprenom;  
         $employes->categorie_id=$data->categorie_id;  
         $savedEmployes=$this->Employes->save($employes); 
     }
         /* create infoficheevaluations entity */
        if (1==1){
            $infoficheevaluations = $this->Infoficheevaluations->newEmptyEntity(); 
            $infoficheevaluations->objetevaluation=$data->objetevaluation;  
            $infoficheevaluations->dateevaluation=$data->dateevaluation;  
            $infoficheevaluations->decisiondirection=$data->decisiondirection;  
            $infoficheevaluations->employe_id=$savedEmployes->id;  
            $this->Infoficheevaluations->save($infoficheevaluations); 
        }
        $idcompet=[];
        $idindica=[];

        $this->loadModel('Competences');
        $competence= $this->Competences->find('all')->toArray();
        foreach($competence as $compet){
   
            array_push($idcompet,$compet->id);
            debug($idcompet,$compet->id);

        }
        $this->loadModel('Indicateursuivis');
        $indicateur= $this->Indicateursuivis->find('all',[
            'conditions' => [
                'Indicateursuivis.competence_id'=> $idcompet
            ]
        ])->toArray();
        foreach($indicateur as $indic){
      
            array_push($idindica,$indic->id);
            debug($idindica,$indic->id);

        }
        $this->loadModel('Pointindicateurs');
        /* create pointindicateurs entity */
           if (1==1)
           {
               foreach ($data->Pointindicateur as $pointindic)
               {
                   $pointindicateurs = $this->Pointindicateurs->newEmptyEntity();
                   $pointindicateurs->label=$pointindic->label; 
                   foreach($indicateur as $indic){

                   $pointindicateurs->indicateursuivi_id=$indic->id;  
                  // debug($pointindic); 
                }
                $pointindicateurs->employe_id=$savedEmployes->id; 

                  $savedPointindic=$this->Pointindicateurs->save($pointindicateurs);
                }
            }
  
            $this->loadModel('Pointindicasous');
        /* create pointindicasous entity */
           if (1==1)
           {
               foreach ($data->Pointindicasou as $pointindicsou)
               {
                   $pointindicasous = $this->Pointindicasous->newEmptyEntity();
                   $pointindicasous->label=$pointindicsou->label; 
                   $pointindicasous->indicasoucompa_id=$pointindicsou->indicasoucompa_id;   
                   $pointindicasous->employe_id=$savedEmployes->id; 
                  // debug($pointindicsou); 
                  $savedPointindic=$this->Pointindicasous->save($pointindicasous);
                }
            }

            
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

     /**
     * editInfoficheevaluation
     *
     * @Input:
     *         data:
     *          nomprenom (String) *Required
     *          objetevaluation(String) *Required
     *          dateevaluation (Date) *Required
     *          decisiondirection (String) *Required
     *          categorie_id(Int) *Required
     *         
     * @Output: data : success message
     */
    public function editInfoficheevaluation(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $infoficheevaluations=$this->Infoficheevaluations->get($id);
         /* create infoficheevaluations entity */
        if (1==1){
            $infoficheevaluations->nomprenom=$data->nomprenom;  
            $infoficheevaluations->objetevaluation=$data->objetevaluation;  
            $infoficheevaluations->dateevaluation=$data->dateevaluation;  
            $infoficheevaluations->decisiondirection=$data->decisiondirection;  
            $infoficheevaluations->categorie_id=$data->categorie_id; 

            $this->Infoficheevaluations->save($infoficheevaluations); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }




   /**
      * getInfoficheevaluationByCat
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getInfoficheevaluationByEmployeId(){
 
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
                'Employes'
            ], 
            'conditions'=>[
                'infoficheevaluations.employe_id IS'=>$id

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
                'id',
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



}
