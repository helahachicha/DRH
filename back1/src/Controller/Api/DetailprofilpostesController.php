<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Detailprofilpostes Controller
 *
 * @method \App\Model\Entity\Detailprofilposte[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DetailprofilpostesController extends AppController
{
    /**
     * addDetailprofilposte
     *
     * @Input:
     *         data:
     *          fonction (Float) *Required
     *          categorie(Float) *Required
     *          superhierar (Float) *Required
     *          supervision (Float) *Required
     *          interim(Float) *Required
     *          profilposte_id (Float) *Required
     *         
     * @Output: data : success message
     */
    public function addDetailprofilposte(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create detailprofilpostes entity */
        if (1==1){
            $detailprofilpostes = $this->Detailprofilpostes->newEmptyEntity();
            $detailprofilpostes->fonction=$data->fonction;  
            $detailprofilpostes->categorie=$data->categorie;  
            $detailprofilpostes->superhierar=$data->superhierar;  
            $detailprofilpostes->supervision=$data->supervision;  
            $detailprofilpostes->interim=$data->interim;  
            $detailprofilpostes->profilposte_id=$data->profilposte_id;   

            $this->Detailprofilpostes->save($detailprofilpostes); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

     /**
     * editDetailprofilposte
     *
     * @Input:
     *         data:
     *          fonction (Float) *Required
     *          categorie(Float) *Required
     *          superhierar (Float) *Required
     *          supervision (Float) *Required
     *          interim(Float) *Required
     *          profilposte_id (Float) *Required
     *         
     * @Output: data : success message
     */
    public function editDetailprofilposte(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $detailprofilpostes=$this->Detailprofilpostes->get($id);
         /* create detailprofilpostes entity */
        if (1==1){
            $detailprofilpostes->fonction=$data->fonction;  
            $detailprofilpostes->categorie=$data->categorie;  
            $detailprofilpostes->superhierar=$data->superhierar;  
            $detailprofilpostes->supervision=$data->supervision;  
            $detailprofilpostes->interim=$data->interim;  
            $detailprofilpostes->profilposte_id=$data->profilposte_id;

            $this->Detailprofilpostes->save($detailprofilpostes); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
    * getAllDetailprofilposte
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllDetailprofilposte()
    {

        /* search */
        $detailprofilpostes = $this->Detailprofilpostes->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $detailprofilpostes,
            '_serialize' => ['success', 'data']
        ]);
    }
    
    /**
      * getDetailprofilposte
      *
      * @Input: id
      *
      * @Output: data
      */
     public function getDetailprofilposte(){
 
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
 
         $detailprofilpostes = $this->Detailprofilpostes->find('all', [
             'conditions'=>[
                 'id IS'=>$id,
             ],
            
         ])->first();
         // debug($detailprofilpostes);die;
         
         if(empty($detailprofilpostes)){
            throw new UnauthorizedException('Detailprofilpostes not found');
        }

        /*send result */

        $this->set([
            'success' => true,
            'data' => $detailprofilpostes,
            '_serialize' => ['success', 'data']
        ]);
     }

     /**
      * deleteDetailprofilposte
      *
      * @Input: id
      *
      * @Output: data
      */

     public function deleteDetailprofilposte(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $detailprofilpostes = $this->Detailprofilpostes->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete detailprofilpostes  */

        if (1==1){
            $this->Detailprofilpostes->delete($detailprofilpostes);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }
}
