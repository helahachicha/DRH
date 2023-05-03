<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Categories Controller
 *
 * @property \App\Model\Table\CategoriesTable $Categories
 * @method \App\Model\Entity\Category[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriesController extends AppController
{


    /**
     * addCategories
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *          profilposte_id (Int) *Required
     *         
     * @Output: data : success message
     */
    public function addCategories(){
        
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
     * editCategorie
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *          profilposte_id (Int) *Required
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

}
