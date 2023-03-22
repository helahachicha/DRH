<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Interims Controller
 *
 * @method \App\Model\Entity\Interim[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InterimsController extends AppController
{

    /**
     * addInterim
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *          categoriedev_id(Int) *Required

     * @Output: data : success message
     */
    public function addInterim(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create interims entity */
        if (1==1){
            $interims = $this->Interims->newEmptyEntity();
            $interims->label=$data->label;  
            $interims->categoriedev_id=$data->categoriedev_id;  

            $this->Interims->save($interims); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

     /**
     * editInterim
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *          categoriedev_id(Int) *Required
     *         
     * @Output: data : success message
     */
    public function editInterim(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $interims=$this->Interims->get($id);
         /* create interims entity */
        if (1==1){
            $interims->label=$data->label;  
            $interims->categoriedev_id=$data->categoriedev_id;  

            $this->Interims->save($interims); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
    * getAllInterim
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllInterim(){
    

        /* search */
        $interims = $this->Interims->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $interims,
            '_serialize' => ['success', 'data']
        ]);
    }


    /**
      * getInterim
      *
      * @Input: id
      *
      * @Output: data
    */
    public function getInterim(){

        $id = $this->request->getQuery('id');
        
        if(1==1){
            if (!isset($id) or empty($id) or $id == null ){
                throw new UnauthorizedException('Id is Required');
            }
           
        }
        $interims = $this->Interims->find('all', [
            'conditions'=>[
                'Interims.categoriedev_id'=>$id
            ],
            'contain' => [
                'Categoriedevs'
            ]
            
        ]);
        if(empty($interims)){
            throw new UnauthorizedException('Place not found');
        }

        $this->set([
            'success' => true,
            'data' => $interims,
            '_serialize' => ['success', 'data']
        ]);
    }


    /**
      * deleteInterim
      *
      * @Input: id
      *
      * @Output: data
      */

      public function deleteInterim(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $interims = $this->Interims->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete interims  */

        if (1==1){
            $this->Interims->delete($interims);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }
}
