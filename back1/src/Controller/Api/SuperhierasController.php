<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Superhieras Controller
 *
 * @method \App\Model\Entity\Superhiera[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SuperhierasController extends AppController
{
    /**
     * addSuperhiera
     *
     * @Input:
     *         data:
     *          label (Float) *Required          
     *         
     * @Output: data : success message
     */
    public function addSuperhiera(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create superhieras entity */
        if (1==1){
            $superhieras = $this->Superhieras->newEmptyEntity();
            $superhieras->label=$data->label;  

            $this->Superhieras->save($superhieras); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

     /**
     * editSuperhiera
     *
     * @Input:
     *         data:
     *          label (Float) *Required  
     *         
     * @Output: data : success message
     */
    public function editSuperhiera(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $superhieras=$this->Superhieras->get($id);
         /* create superhieras entity */
        if (1==1){
            $superhieras->label=$data->label;  

            $this->Superhieras->save($superhieras); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


   /**
      * getSuperhiera
      *
      * @Input: id
      *
      * @Output: data
    */
    public function getSuperhiera(){

        $id = $this->request->getQuery('id');
        
        if(1==1){
            if (!isset($id) or empty($id) or $id == null ){
                throw new UnauthorizedException('Id is Required');
            }
           
        }
        $superhieras = $this->Superhieras->find('all', [
            'conditions'=>[
                'id IS'=>$id
            ],
           
            
        ])->first();
        if(empty($superhieras)){
            throw new UnauthorizedException('Place not found');
        }

        $this->set([
            'success' => true,
            'data' => $superhieras,
            '_serialize' => ['success', 'data']
        ]);
    }

/**
    * getAllSuperhiera
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllSuperhiera()
    {

        /* search */
        $superhieras = $this->Superhieras->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $superhieras,
            '_serialize' => ['success', 'data']
        ]);
    }

    /**
      * deleteSuperhiera
      *
      * @Input: id
      *
      * @Output: data
      */

      public function deleteSuperhiera(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $superhieras = $this->Superhieras->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete superhieras  */

        if (1==1){
            $this->Superhieras->delete($superhieras);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }


}
