<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Reponses Controller
 *
 * @method \App\Model\Entity\Reponse[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReponsesController extends AppController
{
     /**
     * addReponse
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *          question_id(Int) *Required
     *         
     * @Output: data : success message
     */
    public function addReponse(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create reponses entity */
        if (1==1){
            $reponses = $this->Reponses->newEmptyEntity();
            $reponses->label=$data->label;  
            $reponses->question_id=$data->question_id;   

            $this->Reponses->save($reponses); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
     * editReponse
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *          question_id(Int) *Required
     *         
     * @Output: data : success message
     */
    public function editReponse(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $reponses=$this->Reponses->get($id);
         /* create reponses entity */
        if (1==1){
            $reponses->label=$data->label;  
            $reponses->question_id=$data->question_id;

            $this->Reponses->save($reponses); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
    * getAllReponse
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllReponse()
    {

        /* search */
        $reponses = $this->Reponses->find('all',[
            'contain' => [
                'Questions'
            ]
        ]);
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $reponses,
            '_serialize' => ['success', 'data']
        ]);
    }
    
    /**
      * getReponse
      *
      * @Input: id
      *
      * @Output: data
      */
     public function getReponse(){
 
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
 
         $reponses = $this->Reponses->find('all', [
             'conditions'=>[
                 'id IS'=>$id,
             ],
            
         ])->first();
         // debug($reponses);die;
         
         if(empty($reponses)){
            throw new UnauthorizedException('Reponses not found');
        }

        /*send result */

        $this->set([
            'success' => true,
            'data' => $reponses,
            '_serialize' => ['success', 'data']
        ]);
     }

     /**
      * deleteReponse
      *
      * @Input: id
      *
      * @Output: data
      */

     public function deleteReponse(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $reponses = $this->Reponses->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete reponses  */

        if (1==1){
            $this->Reponses->delete($reponses);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }
}
