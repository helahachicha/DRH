<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Testtechniques Controller
 *
 * @method \App\Model\Entity\Testtechnique[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TesttechniquesController extends AppController
{
    /**
     * addTesttechnique
     *
     * @Input:
     *         data:
     *          duree (String) *Required
     *          label(String) *Required
     *          categorie_id (Int) *Required
     *         
     * @Output: data : success message
     */
    public function addTesttechnique(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create testtechniques entity */
        if (1==1){
            $testtechniques = $this->Testtechniques->newEmptyEntity();
            $testtechniques->duree=$data->duree;  
            $testtechniques->label=$data->label;  
            $testtechniques->categorie_id=$data->categorie_id;     

            $this->Testtechniques->save($testtechniques); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

     /**
     * editTesttechnique
     *
     * @Input:
     *         data:
     *          duree (String) *Required
     *          label(String) *Required
     *          categorie_id (Int) *Required
     *         
     * @Output: data : success message
     */
    public function editTesttechnique(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $testtechniques=$this->Testtechniques->get($id);
         /* create testtechniques entity */
        if (1==1){
            $testtechniques->duree=$data->duree;  
            $testtechniques->label=$data->label;  
            $testtechniques->categorie_id=$data->categorie_id;

            $this->Testtechniques->save($testtechniques); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
    * getAllTesttechnique
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllTesttechnique()
    {

        /* search */
        $testtechniques = $this->Testtechniques->find('all',[
            'contain' => [
                'Categories'
            ]
        ]);
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $testtechniques,
            '_serialize' => ['success', 'data']
        ]);
    }


    
    /**
    * getAllLabelTesttechnique
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllLabelTesttechnique()
    {

        /* search */
        $testtechniques = $this->Testtechniques->find('all',[
            'fields' => [
                'label'
            ]
        ]);
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $testtechniques,
            '_serialize' => ['success', 'data']
        ]);
    }

    
    /**
      * getTesttechnique
      *
      * @Input: id
      *
      * @Output: data
      */
     public function getTesttechnique(){
 
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
 
         $testtechniques = $this->Testtechniques->find('all', [
             'conditions'=>[
                 'id IS'=>$id,
             ],
            
         ])->first();
         // debug($testtechniques);die;
         
         if(empty($testtechniques)){
            throw new UnauthorizedException('Testtechniques not found');
        }

        /*send result */

        $this->set([
            'success' => true,
            'data' => $testtechniques,
            '_serialize' => ['success', 'data']
        ]);
     }

     /**
      * deleteTesttechnique
      *
      * @Input: id
      *
      * @Output: data
      */

     public function deleteTesttechnique(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $testtechniques = $this->Testtechniques->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete testtechniques  */

        if (1==1){
            $this->Testtechniques->delete($testtechniques);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }
}
