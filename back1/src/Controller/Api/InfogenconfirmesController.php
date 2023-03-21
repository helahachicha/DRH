<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Infogenconfirmes Controller
 *
 * @method \App\Model\Entity\Infogenconfirme[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InfogenconfirmesController extends AppController
{
     /**
    * getAllInfogenconfirme
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllInfogenconfirme()
    {

        /* search */
        $infogenconfirmes = $this->Infogenconfirmes->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $infogenconfirmes,
            '_serialize' => ['success', 'data']
        ]);
    }

    /**
     * editInfogenconfirme
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
    public function editInfogenconfirme(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $infogenconfirmes=$this->Infogenconfirmes->get($id);
         /* create infogenconfirmes entity */
        if (1==1){
            $infogenconfirmes->majndc=$data->majndc;  
            $infogenconfirmes->dudc=$data->dudc;  
            $infogenconfirmes->Fonctiondc=$data->Fonctiondc;  
            $infogenconfirmes->categoriedc=$data->categoriedc;  
            $infogenconfirmes->Suphierdc=$data->Suphierdc;  
            $infogenconfirmes->Superdc=$data->Superdc; 
            $infogenconfirmes->interidc=$data->interidc; 

            $this->Infogenconfirmes->save($infogenconfirmes); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

    /**
      *  getInfogenconfirme
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getInfogenconfirme(){
 
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

        $infogenconfirmes = $this->Infogenconfirmes->find('all', [
            'conditions'=>[
                'id IS'=>$id,
            ],
           
        ])->first();
        // debug($infogenconfirmes);die;
        
        if(empty($infogenconfirmes)){
           throw new UnauthorizedException('Infogenconfirmes not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $infogenconfirmes,
           '_serialize' => ['success', 'data']
       ]);
    }


    /**
      * deleteInfogenconfirme
      *
      * @Input: id
      *
      * @Output: data
      */

      public function deleteInfogenconfirme(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $infogenconfirmes = $this->Infogenconfirmes->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete infogenconfirmes  */

        if (1==1){
            $this->Infogenconfirmes->delete($infogenconfirmes);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }
}
