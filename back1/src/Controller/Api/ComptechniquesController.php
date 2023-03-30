<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Comptechniques Controller
 *
 * @method \App\Model\Entity\Comptechnique[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ComptechniquesController extends AppController
{

     /**
     * editComptechnique
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *          testtechnique_id(Int) *Required
     *         
     * @Output: data : success message
     */
    public function editComptechnique(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $comptechniques=$this->Comptechniques->get($id);
         /* create comptechniques entity */
        if (1==1){
            $comptechniques->label=$data->label;  
            $comptechniques->testtechnique_id=$data->testtechnique_id;   

            $this->Comptechniques->save($comptechniques); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
    * getAllComptechnique
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllComptechnique()
    {

        /* search */
        $comptechniques = $this->Comptechniques->find('all',[
            'contain' => [
                'Testtechniques'
            ]
        ]);
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $comptechniques,
            '_serialize' => ['success', 'data']
        ]);
    }
    
    /**
      * getComptechnique
      *
      * @Input: id
      *
      * @Output: data
      */
     public function getComptechnique(){
 
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
 
         $comptechniques = $this->Comptechniques->find('all', [
             'conditions'=>[
                 'id IS'=>$id,
             ],
            
         ])->first();
         // debug($comptechniques);die;
         
         if(empty($comptechniques)){
            throw new UnauthorizedException('Comptechniques not found');
        }

        /*send result */

        $this->set([
            'success' => true,
            'data' => $comptechniques,
            '_serialize' => ['success', 'data']
        ]);
     }


    /**
      * getComptechByTesttech
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getComptechByTesttech(){
 
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
        $this->loadModel('Testtechniques');
        $test = $this->Testtechniques->find('all', [
            'contain' => [
               'Categories'        
            ],
            
            'conditions'=>[
                'categorie_id IS'=>$id,

            ],
        ])->toArray();
        foreach($test as $t){
           $tesId=$t->id;
        }
        $comptechniques = $this->Comptechniques->find('all', [
            'contain' => [
                'Questions.Sousquestions'
            ],
            
            'conditions'=>[
                'testtechnique_id IS'=>$tesId

            ],
           
           
        ])->toArray();

        if(empty($comptechniques)){
           throw new UnauthorizedException('Comptechniques not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $comptechniques,
           '_serialize' => ['success', 'data']
       ]);
    }

     /**
      * deleteComptechnique
      *
      * @Input: id
      *
      * @Output: data
      */

     public function deleteComptechnique(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $comptechniques = $this->Comptechniques->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete comptechniques  */

        if (1==1){
            $this->Comptechniques->delete($comptechniques);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }
}
