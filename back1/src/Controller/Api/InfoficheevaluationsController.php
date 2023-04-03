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
     * addInfoficheevaluation
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
    public function addInfoficheevaluation(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create infoficheevaluations entity */
        if (1==1){
            $infoficheevaluations = $this->Infoficheevaluations->newEmptyEntity();
            $infoficheevaluations->nomprenom=$data->nomprenom;  
            $infoficheevaluations->objetevaluation=$data->objetevaluation;  
            $infoficheevaluations->dateevaluation=$data->dateevaluation;  
            $infoficheevaluations->decisiondirection=$data->decisiondirection;  
            $infoficheevaluations->categorie_id=$data->categorie_id;  

            $this->Infoficheevaluations->save($infoficheevaluations); 
        }
         /* create competences entity */
         if (1==1){
            $competences = $this->Competences->newEmptyEntity();
            $competences->label=$data->label;
            $competences->categorie_id=$data->categorie_id;   

            $this->Competences->save($competences); 
        }
        /* create souscompetences entity */
        if (1==1){
            $souscompetences = $this->Souscompetences->newEmptyEntity();
            $souscompetences->label=$data->label;
            $souscompetences->competence_id=$data->competence_id;
            $savedProfil=$this->Souscompetences->save($souscompetences);
        }
        /* create indicateursuivis entity */
        if (1==1){
            $indicateursuivis = $this->Indicateursuivis->newEmptyEntity();
            $indicateursuivis->label=$data->label;
            $indicateursuivis->souscompetence_id=$data->souscompetence_id;
            $savedProfil=$this->Indicateursuivis->save($indicateursuivis);
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
               'Categories.Competences.Souscompetences.Indicateursuivis','Categories.Niveauvises'
               
            ],
            'conditions'=>[
                'Infoficheevaluations.id'=>$id

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
