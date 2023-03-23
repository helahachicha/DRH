<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Categories Controller
 *
 * @method \App\Model\Entity\Category[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriesController extends AppController
{
    /**
     * addCategorie
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *          profilposte_id(Int) *Required
     *         
     * @Output: data : success message
     */
    public function addCategorie(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create categories entity */
        if (1==1){
            $categories = $this->Categories->newEmptyEntity();
            $categories->label=$data->label;  
            $categories->profilposte_id=$data->profilposte_id;     

            $this->Categories->save($categories); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

     /**
     * editCategorie
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *          profilposte_id(Int) *Required
     *         
     * @Output: data : success message
     */
    public function editCategorie(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $categories=$this->Categories->get($id);
         /* create categories entity */
        if (1==1){
            $categories->label=$data->label;  
            $categories->profilposte_id=$data->profilposte_id;  

            $this->Categories->save($categories); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
    * getAllCategorie
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllCategorie()
    {

        /* search */
        $categories = $this->Categories->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $categories,
            '_serialize' => ['success', 'data']
        ]);
    }
    
    /**
      * getCategorie
      *
      * @Input: id
      *
      * @Output: data
      */
     public function getCategorie(){
 
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
 
         $categories = $this->Categories->find('all', [
             'conditions'=>[
                 'id IS'=>$id,
             ],
            ['contain'=>'Profilpostes']
         ])->first();
         // debug($categories);die;
         
         if(empty($categories)){
            throw new UnauthorizedException('Categories not found');
        }

        /*send result */

        $this->set([
            'success' => true,
            'data' => $categories,
            '_serialize' => ['success', 'data']
        ]);
     }

     /**
      * deleteCategorie
      *
      * @Input: id
      *
      * @Output: data
      */

     public function deleteCategorie(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $categories = $this->Categories->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],

        ])->first();

        /* delete categories  */

        if (1==1){
            $this->Categories->delete($categories);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }
}