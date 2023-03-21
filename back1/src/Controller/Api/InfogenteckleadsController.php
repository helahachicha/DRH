<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Infogenteckleads Controller
 *
 * @method \App\Model\Entity\Infogentecklead[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InfogenteckleadsController extends AppController
{
     /**
    * getAllInfogentecklead
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllInfogentecklead()
    {

        /* search */
        $infogenteckleads = $this->Infogenteckleads->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $infogenteckleads,
            '_serialize' => ['success', 'data']
        ]);
    }

    /**
     * editInfogentecklead
     *
     * @Input:
     *         data:
     *          refdt (String) 
     *          majndt (Int) 
     *          dudt(Date)
     *          Fonctiondt (String)
     *          Categoriedt (String) 
     *          Suphierdt (String) 
     *          Superdt (String) 
     *          Interimdt (String) 
     *          
     *         
     * @Output: data : success message
     */
    public function editInfogentecklead(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $infogenteckleads=$this->Infogenteckleads->get($id);
         /* create infogenteckleads entity */
        if (1==1){
            $infogenteckleads->refdt=$data->refdt;  
            $infogenteckleads->majndt=$data->majndt;  
            $infogenteckleads->dudt=$data->dudt;  
            $infogenteckleads->Fonctiondt=$data->Fonctiondt;  
            $infogenteckleads->Categoriedt=$data->Categoriedt;  
            $infogenteckleads->Suphierdt=$data->Suphierdt;  
            $infogenteckleads->Superdt=$data->Superdt; 
            $infogenteckleads->Interimdt=$data->Interimdt; 

            $this->Infogenteckleads->save($infogenteckleads); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

    /**
      *  getInfogentecklead
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getInfogentecklead(){
 
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

        $infogenteckleads = $this->Infogenteckleads->find('all', [
            'conditions'=>[
                'id IS'=>$id,
            ],
           
        ])->first();
        // debug($infogenteckleads);die;
        
        if(empty($infogenteckleads)){
           throw new UnauthorizedException('Infogenteckleads not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $infogenteckleads,
           '_serialize' => ['success', 'data']
       ]);
    }


    /**
      * deleteInfogentecklead
      *
      * @Input: id
      *
      * @Output: data
      */

      public function deleteInfogentecklead(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $infogenteckleads = $this->Infogenteckleads->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete infogenteckleads  */

        if (1==1){
            $this->Infogenteckleads->delete($infogenteckleads);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }
}
