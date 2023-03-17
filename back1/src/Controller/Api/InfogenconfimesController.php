<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Infogenconfimes Controller
 *
 * @method \App\Model\Entity\Infogenconfime[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InfogenconfimesController extends AppController
{
     /**
    * getAllInfogenconfime
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllInfogenconfime()
    {

        /* search */
        $infogenconfimes = $this->Infogenconfimes->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $infogenconfimes,
            '_serialize' => ['success', 'data']
        ]);
    }

    /**
     * editInfogenconfime
     *
     * @Input:
     *         data:
     *          majndc (Int) 
     *          dudc(Date)
     *          Fonctiondc (String)
     *          categoriedc (String) 
     *          Suphierdc (String) 
     *          Superdc (String) 
     *          interidc (String) 
     *          
     *         
     * @Output: data : success message
     */
    public function editInfogenconfime(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $infogenconfimes=$this->Infogenconfimes->get($id);
         /* create infogenconfimes entity */
        if (1==1){
            $infogenconfimes->majndc=$data->majndc;  
            $infogenconfimes->dudc=$data->dudc;  
            $infogenconfimes->Fonctiondc=$data->Fonctiondc;  
            $infogenconfimes->categoriedc=$data->categoriedc;  
            $infogenconfimes->Suphierdc=$data->Suphierdc;  
            $infogenconfimes->Superdc=$data->Superdc; 
            $infogenconfimes->interidc=$data->interidc; 

            $this->Infogenconfimes->save($infogenconfimes); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

    /**
      *  getInfogenconfime
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getInfogenconfime(){
 
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

        $infogenconfimes = $this->Infogenconfimes->find('all', [
            'conditions'=>[
                'id IS'=>$id,
            ],
           
        ])->first();
        // debug($infogenconfimes);die;
        
        if(empty($infogenconfimes)){
           throw new UnauthorizedException('Infogenconfimes not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $infogenconfimes,
           '_serialize' => ['success', 'data']
       ]);
    }
}
