<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Idpropostedt Controller
 *
 * @method \App\Model\Entity\Idpropostedt[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IdpropostedtController extends AppController
{
     /**
    * getAllIdpropostedt
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllIdpropostedt()
    {

        /* search */
        $idpropostedt = $this->Idpropostedt->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $idpropostedt,
            '_serialize' => ['success', 'data']
        ]);
    }

    /**
     * editIdpropostedt
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
    public function editIdpropostedt(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $idpropostedt=$this->Idpropostedt->get($id);
         /* create Idpropostedt entity */
        if (1==1){
            $idpropostedt->refdt=$data->refdt;  
            $idpropostedt->majndt=$data->majndt;  
            $idpropostedt->dudt=$data->dudt;  
            $idpropostedt->Fonctiondt=$data->Fonctiondt;  
            $idpropostedt->Categoriedt=$data->Categoriedt;  
            $idpropostedt->Suphierdt=$data->Suphierdt;  
            $idpropostedt->Superdt=$data->Superdt; 
            $idpropostedt->Interimdt=$data->Interimdt; 

            $this->Idpropostedt->save($idpropostedt); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

    /**
      *  getIdpropostedt
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getIdpropostedt(){
 
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

        $idpropostedt = $this->Idpropostedt->find('all', [
            'conditions'=>[
                'id IS'=>$id,
            ],
           
        ])->first();
        // debug($idpropostedt);die;
        
        if(empty($idpropostedt)){
           throw new UnauthorizedException('Idpropostedt not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $idpropostedt,
           '_serialize' => ['success', 'data']
       ]);
    }
}
