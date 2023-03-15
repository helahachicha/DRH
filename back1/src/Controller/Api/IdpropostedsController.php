<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Idproposteds Controller
 *
 * @method \App\Model\Entity\Idproposted[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IdpropostedsController extends AppController
{
    /**
    * getAllIdproposteds
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllIdproposteds()
    {

        /* search */
        $idproposteds = $this->Idproposteds->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $idproposteds,
            '_serialize' => ['success', 'data']
        ]);
    }

    /**
     * editIdproposteds
     *
     * @Input:
     *         data:
     *          majnds (Int) 
     *          duds(Date)
     *          Fonctionds (String)
     *          Categorieds(String) 
     *          Suphierds (String) 
     *          Superds (String) 
     *          Interimds (String) 
     *          
     *         
     * @Output: data : success message
     */
    public function editIdproposteds(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $idproposteds=$this->Idproposteds->get($id);
         /* create Idproposteds entity */
        if (1==1){
            $idproposteds->majnds=$data->majnds;  
            $idproposteds->duds=$data->duds;  
            $idproposteds->Fonctionds=$data->Fonctionds;  
            $idproposteds->Categorieds=$data->Categorieds;  
            $idproposteds->Suphierds=$data->Suphierds;  
            $idproposteds->Superds=$data->Superds; 
            $idproposteds->Interimds=$data->Interimds; 

            $this->Idproposteds->save($idproposteds); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

    /**
      *  getIdproposteds
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getIdproposteds(){
 
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

        $idproposteds = $this->Idproposteds->find('all', [
            'conditions'=>[
                'id IS'=>$id,
            ],
           
        ])->first();
        // debug($idproposte);die;
        
        if(empty($idproposteds)){
           throw new UnauthorizedException('Idproposteds not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $idproposteds,
           '_serialize' => ['success', 'data']
       ]);
    }
}
