<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Supervisions Controller
 *
 * @method \App\Model\Entity\Supervision[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SupervisionsController extends AppController
{
    /**
     * addSupervision
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *          categoriedev_id(Int) *Required
     *         
     * @Output: data : success message
     */
    public function addSupervision(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create supervisions entity */
        if (1==1){
            $supervisions = $this->Supervisions->newEmptyEntity();
            $supervisions->label=$data->label;  
            $supervisions->categoriedev_id=$data->categoriedev_id;  

            $this->Supervisions->save($supervisions); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

     /**
     * editSupervision
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *          categoriedev_id(Int) *Required
     *         
     * @Output: data : success message
     */
    public function editSupervision(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $supervisions=$this->Supervisions->get($id);
         /* create supervisions entity */
        if (1==1){
            $supervisions->label=$data->label;  
            $supervisions->categoriedev_id=$data->categoriedev_id;  

            $this->Supervisions->save($supervisions); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
    * getAllSupervision
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllSupervision()
    {

        /* search */
        $supervisions = $this->Supervisions->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $supervisions,
            '_serialize' => ['success', 'data']
        ]);
    }



    /**
      * getSupervisionBycategId
      *
      * @Input: id
      *
      * @Output: data
    */
    public function getSupervisionBycategId(){

        $id = $this->request->getQuery('id');
        
        if(1==1){
            if (!isset($id) or empty($id) or $id == null ){
                throw new UnauthorizedException('Id is Required');
            }
           
        }
        $supervisions = $this->Supervisions->find('all', [
            'conditions'=>[
                'Supervisions.categoriedev_id'=>$id
            ],
            'contain' => [
                'Categoriedevs'
            ]
            
        ]);
        if(empty($supervisions)){
            throw new UnauthorizedException('Place not found');
        }

        $this->set([
            'success' => true,
            'data' => $supervisions,
            '_serialize' => ['success', 'data']
        ]);
    }

    /**
      * deleteSupervision
      *
      * @Input: id
      *
      * @Output: data
      */

      public function deleteSupervision(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $supervisions = $this->Supervisions->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete supervisions  */

        if (1==1){
            $this->Supervisions->delete($supervisions);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }

}
