<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Sousquestions Controller
 *
 * @method \App\Model\Entity\Sousquestion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SousquestionsController extends AppController
{
    /**
     * addSousquestion
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *          question_id(Int) *Required
     *         
     * @Output: data : success message
     */
    public function addSousquestion(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create sousquestions entity */
        if (1==1){
            $sousquestions = $this->Sousquestions->newEmptyEntity();
            $sousquestions->label=$data->label;  
            $sousquestions->question_id=$data->question_id;    

            $this->Sousquestions->save($sousquestions); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

     /**
     * editSousquestion
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *          question_id(Int) *Required
     *         
     * @Output: data : success message
     */
    public function editSousquestion(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $sousquestions=$this->Sousquestions->get($id);
         /* create sousquestions entity */
        if (1==1){
            $sousquestions->label=$data->label;  
            $sousquestions->question_id=$data->question_id;

            $this->Sousquestions->save($sousquestions); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
    * getAllSousquestion
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllSousquestion()
    {

        /* search */
        $sousquestions = $this->Sousquestions->find('all',[
            'contain' => [
                'Questions'
            ]
        ]);
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $sousquestions,
            '_serialize' => ['success', 'data']
        ]);
    }
    
    /**
      * getSousquestion
      *
      * @Input: id
      *
      * @Output: data
      */
     public function getSousquestion(){
 
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
 
         $sousquestions = $this->Sousquestions->find('all', [
             'conditions'=>[
                 'id IS'=>$id,
             ],
            
         ])->first();
         // debug($sousquestions);die;
         
         if(empty($sousquestions)){
            throw new UnauthorizedException('Sousquestions not found');
        }

        /*send result */

        $this->set([
            'success' => true,
            'data' => $sousquestions,
            '_serialize' => ['success', 'data']
        ]);
     }

     /**
      * deleteSousquestion
      *
      * @Input: id
      *
      * @Output: data
      */

     public function deleteSousquestion(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $sousquestions = $this->Sousquestions->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete sousquestions  */

        if (1==1){
            $this->Sousquestions->delete($sousquestions);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }
}
