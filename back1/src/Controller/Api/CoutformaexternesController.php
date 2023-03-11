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
     * addcoutformaexterne
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
           // debug($data);die;

        }
         /* create coutformaexternes entity */
        if (1==1){
            $coutformaexternes = $this->coutformaexternes->newEmptyEntity();
            $coutformaexternes->coutformahd=$data->typecomp;  
            $coutformaexternes->tocoformadt=$data->themforma;  
            $coutformaexternes->locaespace=$data->participant;  
            $coutformaexternes->comax=$data->nbparticipant;  
            $coutformaexternes->tocout=$data->raisonforma ;  
            $coutformaexternes->chargeto=$data->organismeforma ;   

            $this->Coutformaexternes->save($coutformaexternes); 
        }
       
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
           // debug($data);die;

        }
        $id=$this->request->getQuery('id');
        $coutformaexternes=$this->Coutformaexternes->get($id);
         /* create coutformaexternes entity */
        if (1==1){
            $coutformaexternes = $this->coutformaexternes->newEmptyEntity();
            $coutformaexternes->coutformahd=$data->typecomp;  
            $coutformaexternes->tocoformadt=$data->themforma;  
            $coutformaexternes->locaespace=$data->participant;  
            $coutformaexternes->comax=$data->nbparticipant;  
            $coutformaexternes->tocout=$data->raisonforma ;  
            $coutformaexternes->chargeto=$data->organismeforma ; 

            $this->Coutformaexternes->save($coutformaexternes); 
        }
       
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
    * getAllFormaexterne
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllFormaexterne()
    {

        /* search */
        $formaexternes = $this->Formaexternes->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $formaexternes,
            '_serialize' => ['success', 'data']
        ]);
    }
    
    /**
      * getFormaexternes
      *
      * @Input: id
      *
      * @Output: data
      */
     public function getFormaexternes(){
 
         $id = $this->request->getQuery('id');
         
         if(1==1){
             if (!isset($id) or empty($id) or $id == null ){
                 throw new UnauthorizedException('Id is Required');
             }
             if(!is_numeric($id)){
                 throw new UnauthorizedException('Id is not Valid');
             }
         }
 
         $formaexterne = $this->Formaexternes->find('all', [
             'conditions'=>[
                 'id'=>$id,
             ],
            
         ])->first();
 
         if(empty($formaexternes)){
             throw new UnauthorizedException('Formaexterne not found');
         }
 
         $this->set([
             'success' => true,
             'data' => $formaexternes,
             '_serialize' => ['success', 'data']
         ]);
     }
}
