<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Coutformaexternes Controller
 *
 * @method \App\Model\Entity\Coutformaexterne[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoutformaexternesController extends AppController
{
   /**
     * addCoutformaexterne
     *
     * @Input:
     *         data:
     *          coutformahd (Float) *Required
     *          tocoformadt(Float) *Required
     *          locaespace (Float) *Required
     *          comax (Float) *Required
     *          tocout(Float) *Required
     *          chargeto (Float) *Required
     *         
     * @Output: data : success message
     */
    public function addCoutformaexterne(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create coutformaexternes entity */
        if (1==1){
            $coutformaexternes = $this->Coutformaexternes->newEmptyEntity();
            $coutformaexternes->coutformahd=$data->coutformahd;  
            $coutformaexternes->tocoformadt=$data->tocoformadt;  
            $coutformaexternes->locaespace=$data->locaespace;  
            $coutformaexternes->comax=$data->comax;  
            $coutformaexternes->tocout=$data->tocout;  
            $coutformaexternes->chargeto=$data->chargeto;   

            $this->Coutformaexternes->save($coutformaexternes); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

     /**
     * editCoutformaexterne
     *
     * @Input:
     *         data:
     *          coutformahd (Float) *Required
     *          tocoformadt(Float) *Required
     *          locaespace (Float) *Required
     *          comax (Float) *Required
     *          tocout(Float) *Required
     *          chargeto (Float) *Required
     *         
     * @Output: data : success message
     */
    public function editCoutformaexterne(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $coutformaexternes=$this->Coutformaexternes->get($id);
         /* create coutformaexternes entity */
        if (1==1){
            $coutformaexternes->coutformahd=$data->coutformahd;  
            $coutformaexternes->tocoformadt=$data->tocoformadt;  
            $coutformaexternes->locaespace=$data->locaespace;  
            $coutformaexternes->comax=$data->comax;  
            $coutformaexternes->tocout=$data->tocout;  
            $coutformaexternes->chargeto=$data->chargeto; 

            $this->Coutformaexternes->save($coutformaexternes); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
    * getAllCoutformaexterne
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllCoutformaexterne()
    {

        /* search */
        $coutformaexternes = $this->Coutformaexternes->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $coutformaexternes,
            '_serialize' => ['success', 'data']
        ]);
    }
    
    /**
      * getCoutformaexterne
      *
      * @Input: id
      *
      * @Output: data
      */
     public function getCoutformaexterne(){
 
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
 
         $coutformaexternes = $this->Coutformaexternes->find('all', [
             'conditions'=>[
                 'id IS'=>$id,
             ],
            
         ])->first();
         // debug($coutformaexternes);die;
         
         if(empty($coutformaexternes)){
            throw new UnauthorizedException('Coutformaexternes not found');
        }

        /*send result */

        $this->set([
            'success' => true,
            'data' => $coutformaexternes,
            '_serialize' => ['success', 'data']
        ]);
     }


     public function deleteCoutformaexterne(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        $coutformaexternes = $this->Coutformaexternes->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();
        if ($this->Coutformaexternes->delete($coutformaexternes)){
            $this->set([
                'success' => true,
                '_serialize' => ['success']
            ]);
        }
     }
}
