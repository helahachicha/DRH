<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Souscompetences Controller
 *
 * @property \App\Model\Table\SouscompetencesTable $Souscompetences
 * @method \App\Model\Entity\Souscompetence[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SouscompetencesController extends AppController
{
   /**
     * addSouscompetence
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *          competence_id(Int) *Required
     * 
     * @Output: data : success message
     */
    public function addSouscompetence(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
           // $querry=$this->request->getData();
           // $data=json_decode($querry['data']); 
            $data=$this->request->getData();
            debug($data);die;

        }
         /* create souscompetences entity */
        if (1==1){
            $souscompetences = $this->Souscompetences->newEmptyEntity();
            $souscompetences->label=$data->label;  
            $souscompetences->competence_id=$data->competence_id;  

            $this->Souscompetences->save($souscompetences); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

     /**
     * editSouscompetence
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *          competence_id(Int) *Required
     *         
     * @Output: data : success message
     */
    public function editSouscompetence(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $souscompetences=$this->Souscompetences->get($id);
         /* create souscompetences entity */
        if (1==1){
            $souscompetences->label=$data->label;  
            $souscompetences->competence_id=$data->competence_id;  

            $this->Souscompetences->save($souscompetences); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
    * getAllSouscompetence
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllSouscompetence()
    {

        /* search */
        $souscompetences = $this->Souscompetences->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $souscompetences,
            '_serialize' => ['success', 'data']
        ]);
    }
    
    /**
      * getSouscompetence
      *
      * @Input: id
      *
      * @Output: data
      */
     public function getSouscompetence(){
 
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
 
         $souscompetences = $this->Souscompetences->find('all', [
             'conditions'=>[
                 'id IS'=>$id,
             ],
             ['contain'=>'Competences']
         ])->first();
         // debug($souscompetences);die;
         
         if(empty($souscompetences)){
            throw new UnauthorizedException('Souscompetences not found');
        }

        /*send result */

        $this->set([
            'success' => true,
            'data' => $souscompetences,
            '_serialize' => ['success', 'data']
        ]);
     }

     /**
      * deleteSouscompetence
      *
      * @Input: id
      *
      * @Output: data
      */

     public function deleteSouscompetence(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $souscompetences = $this->Souscompetences->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete souscompetences  */

        if (1==1){
            $this->Souscompetences->delete($souscompetences);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }
}
