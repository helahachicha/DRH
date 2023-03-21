<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Infogenfpsychiques Controller
 *
 * @method \App\Model\Entity\Infogenfpsychique[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InfogenfpsychiquesController extends AppController
{
    /**
     * addInfogenfpsychique
     *
     * @Input:
     *         data:
     *          nomprenom (String) *Required
     *          dateevaluation (date) *Required
     *          objetevaluation (String) *Required
     *          decisiondirection (String) *Required
     * 
     * @Output: data : success message
     */
    public function addInfogenfpsychique(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            //$querry=$this->request->getData();
            //$data=json_decode($querry['data']); 
            $data=$this->request->getData();
            debug($data);die;

        }
         /* create infogenfpsychiques entity */
        if (1==1){
            $infogenfpsychiques = $this->Infogenfpsychiques->newEmptyEntity();
            $infogenfpsychiques->nomprenom=$data->nomprenom;  
            $infogenfpsychiques->dateevaluation=$data->dateevaluation;  
            $infogenfpsychiques->objetevaluation=$data->objetevaluation;  
            $infogenfpsychiques->decisiondirection=$data->decisiondirection;      

            $this->Infogenfpsychiques->save($infogenfpsychiques); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

 /**
     * editInfogenfpsychique
     *
     * @Input:
     *         data:
     *          nomprenom (String) *Required
     *          dateevaluation (date) *Required
     *          objetevaluation (String) *Required
     *          decisiondirection (String) *Required
     * @Output: data : success message
     */
    public function editInfogenfpsychique(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $infogenfpsychiques=$this->Infogenfpsychiques->get($id);
         /* create infogenfpsychiques entity */
        if (1==1){
            $infogenfpsychiques->nomprenom=$data->nomprenom;  
            $infogenfpsychiques->dateevaluation=$data->dateevaluation;  
            $infogenfpsychiques->objetevaluation=$data->objetevaluation;  
            $infogenfpsychiques->decisiondirection=$data->decisiondirection;   

            $this->Infogenfpsychiques->save($infogenfpsychiques); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updatesd with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

    /**
    * getAllInfogenfpsychique
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllInfogenfpsychique()
    {

        /* search */
        $infogenfpsychiques = $this->Infogenfpsychiques->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $infogenfpsychiques,
            '_serialize' => ['success', 'data']
        ]);
    }

    /**
      * getInfogenfpsychique
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getInfogenfpsychique(){
 
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

        $infogenfpsychiques = $this->Infogenfpsychiques->find('all', [
            'conditions'=>[
                'id IS'=>$id,
            ],
           
        ])->first();
        // debug($infogenfpsychiques);die;
        
        if(empty($infogenfpsychiques)){
           throw new UnauthorizedException('Infogenfpsychiques not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $infogenfpsychiques,
           '_serialize' => ['success', 'data']
       ]);
    }


    /**
      * deleteInfogenfpsychique
      *
      * @Input: id
      *
      * @Output: data
      */

      public function deleteInfogenfpsychique(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $infogenfpsychiques = $this->Infogenfpsychiques->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete infogenfpsychiques  */

        if (1==1){
            $this->Infogenfpsychiques->delete($infogenfpsychiques);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }
}
