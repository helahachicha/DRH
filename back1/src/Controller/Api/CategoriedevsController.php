<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Categoriedevs Controller
 *
 * @method \App\Model\Entity\Categoriedev[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriedevsController extends AppController
{
/**
     * addCategoriedev
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *         
     * @Output: data : success message
     */
    public function addCategoriedev(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create categoriedevs entity */
        if (1==1){
            $categoriedevs = $this->Categoriedevs->newEmptyEntity();
            $categoriedevs->label=$data->label;  
   

            $this->Categoriedevs->save($categoriedevs); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

     /**
     * editCategoriedev
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *         
     * @Output: data : success message
     */
    public function editCategoriedev(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $categoriedevs=$this->Categoriedevs->get($id);
         /* create categoriedevs entity */
        if (1==1){
            $categoriedevs->label=$data->label;  

            $this->Categoriedevs->save($categoriedevs); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
    * getAllCategoriedev
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllCategoriedev()
    {

        /* search */
        $categoriedevs = $this->Categoriedevs->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $categoriedevs,
            '_serialize' => ['success', 'data']
        ]);
    }


     /**
      * getCategoriedev
      *
      * @Input: id
      *
      * @Output: data
    */
    public function getCategoriedev(){

        $id = $this->request->getQuery('id');
        
        if(1==1){
            if (!isset($id) or empty($id) or $id == null ){
                throw new UnauthorizedException('Id is Required');
            }
           
        }
        $categoriedevs = $this->Categoriedevs->find('all', [
            'conditions'=>[
                'id IS'=>$id
            ],
           
            
        ])->first();
        if(empty($categoriedevs)){
            throw new UnauthorizedException('Place not found');
        }

        $this->set([
            'success' => true,
            'data' => $categoriedevs,
            '_serialize' => ['success', 'data']
        ]);
    }
    

     /**
      * deleteCategoriedev
      *
      * @Input: id
      *
      * @Output: data
      */

      public function deleteCategoriedev(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $categoriedevs = $this->Categoriedevs->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete categoriedevs  */

        if (1==1){
            $this->Categoriedevs->delete($categoriedevs);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }

}
