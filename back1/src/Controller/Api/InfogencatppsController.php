<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Infogencatpps Controller
 *
 * @property \App\Model\Table\InfogencatppsTable $Infogencatpps
 * @method \App\Model\Entity\Infogencatpp[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InfogencatppsController extends AppController
{
    /**
     * addInfogencatpp
     *
     * @Input:
     *         data:
     *          fonction (String) *Required
     *          label(String) *Required
     *          suphierar (String) *Required
     *          supervision (String) *Required
     *          interim(String) *Required
     *          categorie_id (String) *Required
     *         
     * @Output: data : success message
     */
    public function addInfogencatpp(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create infogencatpps entity */
        if (1==1){
            $infogencatpps = $this->Infogencatpps->newEmptyEntity();
            $infogencatpps->fonction=$data->fonction;  
            $infogencatpps->label=$data->label;  
            $infogencatpps->suphierar=$data->suphierar;  
            $infogencatpps->supervision=$data->supervision;  
            $infogencatpps->interim=$data->interim;  
            $infogencatpps->categorie_id=$data->categorie_id;   

            $this->Infogencatpps->save($infogencatpps); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

     /**
     * editInfogencatpp
     *
     * @Input:
     *         data:
     *          fonction (String) *Required
     *          label(String) *Required
     *          suphierar (String) *Required
     *          supervision (String) *Required
     *          interim(String) *Required
     *          categorie_id (String) *Required
     *         
     * @Output: data : success message
     */
    public function editInfogencatpp(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $infogencatpps=$this->Infogencatpps->get($id);
         /* create infogencatpps entity */
        if (1==1){
            $infogencatpps->fonction=$data->fonction;  
            $infogencatpps->label=$data->label;  
            $infogencatpps->suphierar=$data->suphierar;  
            $infogencatpps->supervision=$data->supervision;  
            $infogencatpps->interim=$data->interim;  
            $infogencatpps->categorie_id=$data->categorie_id;  

            $this->Infogencatpps->save($infogencatpps); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
    * getAllInfogencatpp
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllInfogencatpp()
    {

        /* search */
        $infogencatpps = $this->Infogencatpps->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $infogencatpps,
            '_serialize' => ['success', 'data']
        ]);
    }
    
    /**
      * getInfogencatpp
      *
      * @Input: id
      *
      * @Output: data
      */
     public function getInfogencatpp(){
 
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
 
         $infogencatpps = $this->Infogencatpps->find('all', [
             'conditions'=>[
                 'id IS'=>$id,
             ],
             ['contain'=>'Categories']
         ])->first();
         // debug($infogencatpps);die;
         
         if(empty($infogencatpps)){
            throw new UnauthorizedException('Infogencatpps not found');
        }

        /*send result */

        $this->set([
            'success' => true,
            'data' => $infogencatpps,
            '_serialize' => ['success', 'data']
        ]);
     }

     /**
      * deleteInfogencatpp
      *
      * @Input: id
      *
      * @Output: data
      */

     public function deleteInfogencatpp(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $infogencatpps = $this->Infogencatpps->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
            
        ])->first();

        /* delete infogencatpps  */

        if (1==1){
            $this->Infogencatpps->delete($infogencatpps);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }
}
