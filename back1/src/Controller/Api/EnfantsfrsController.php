<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Enfantsfrs Controller
 *
 * @method \App\Model\Entity\Enfantsfr[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnfantsfrsController extends AppController
{
    /**
     * addEnfantsfr
     *
     * @Input:
     *         data:
     *          ordreen  (Int) *Required
     *          prenomen(String) *Required
     *          datenaien (Date) *Required
     *          niveauetudeen (String) *Required
     *          centreintereten(String) *Required
     *          etatsanteen (String) *Required
     *         
     * @Output: data : success message
     */
    public function addEnfantsfr(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;
        }
         /* create enfantsfrs entity */
        if (1==1){
            $enfantsfrs = $this->Enfantsfrs->newEmptyEntity();
            $enfantsfrs->ordreen=$data->ordreen;  
            $enfantsfrs->prenomen=$data->prenomen;  
            $enfantsfrs->datenaien=$data->datenaien;  
            $enfantsfrs->niveauetudeen=$data->niveauetudeen;  
            $enfantsfrs->centreintereten=$data->centreintereten;  
            $enfantsfrs->etatsanteen=$data->etatsanteen;   

            $this->Enfantsfrs->save($enfantsfrs); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

     /**
     * editEnfantsfr
     *
     * @Input:
     *         data:
     *          ordreen  (Int) *Required
     *          prenomen(String) *Required
     *          datenaien (Date) *Required
     *          niveauetudeen (String) *Required
     *          centreintereten(String) *Required
     *          etatsanteen (String) *Required
     *         
     * @Output: data : success message
     */
    public function editEnfantsfr(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $enfantsfrs=$this->Enfantsfrs->get($id);
         /* create enfantsfrs entity */
        if (1==1){
            $enfantsfrs->ordreen=$data->ordreen;  
            $enfantsfrs->prenomen=$data->prenomen;  
            $enfantsfrs->datenaien=$data->datenaien;  
            $enfantsfrs->niveauetudeen=$data->niveauetudeen;  
            $enfantsfrs->centreintereten=$data->centreintereten;  
            $enfantsfrs->etatsanteen=$data->etatsanteen; 

            $this->Enfantsfrs->save($enfantsfrs); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
    * getAllEnfantsfr
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllEnfantsfr()
    {

        /* search */
        $enfantsfrs = $this->Enfantsfrs->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $enfantsfrs,
            '_serialize' => ['success', 'data']
        ]);
    }
    
    /**
      * getEnfantsfr
      *
      * @Input: id
      *
      * @Output: data
      */
     public function getEnfantsfr(){
 
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
 
         $enfantsfrs = $this->Enfantsfrs->find('all', [
             'conditions'=>[
                 'id IS'=>$id,
             ],
            
         ])->first();
         // debug($enfantsfrs);die;
         
         if(empty($enfantsfrs)){
            throw new UnauthorizedException('Enfantsfrs not found');
        }

        /*send result */

        $this->set([
            'success' => true,
            'data' => $enfantsfrs,
            '_serialize' => ['success', 'data']
        ]);
     }

      /**
      * deleteEnfantsfr
      *
      * @Input: id
      *
      * @Output: data
      */

      public function deleteEnfantsfr(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $enfantsfrs = $this->Enfantsfrs->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete enfantsfrs  */

        if (1==1){
            $this->Enfantsfrs->delete($enfantsfrs);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }

}
