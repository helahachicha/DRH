<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Questions Controller
 *
 * @method \App\Model\Entity\Question[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuestionsController extends AppController
{

     /**
     * editQuestion
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *          comptechnique_id(Int) *Required
     *         
     * @Output: data : success message
     */
    public function editQuestion(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $questions=$this->Questions->get($id);
         /* create questions entity */
        if (1==1){
            $questions->label=$data->label;  
            $questions->comptechnique_id=$data->comptechnique_id;

            $this->Questions->save($questions); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
    * getAllQuestion
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllQuestion()
    {

        /* search */
        $questions = $this->Questions->find('all',[
            'contain' => [
                'Comptechniques'
            ]
        ]);
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $questions,
            '_serialize' => ['success', 'data']
        ]);
    }
    
    /**
      * getQuestion
      *
      * @Input: id
      *
      * @Output: data
      */
     public function getQuestion(){
 
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
 
         $questions = $this->Questions->find('all', [
             'conditions'=>[
                 'id IS'=>$id,
             ],
            
         ])->first();
         // debug($questions);die;
         
         if(empty($questions)){
            throw new UnauthorizedException('Questions not found');
        }

        /*send result */

        $this->set([
            'success' => true,
            'data' => $questions,
            '_serialize' => ['success', 'data']
        ]);
     }


     

     /**
      * deleteQuestion
      *
      * @Input: id
      *
      * @Output: data
      */

     public function deleteQuestion(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $questions = $this->Questions->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete questions  */

        if (1==1){
            $this->Questions->delete($questions);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }
}
