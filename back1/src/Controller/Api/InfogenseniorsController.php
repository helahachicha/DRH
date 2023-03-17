<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Infogenseniors Controller
 *
 * @method \App\Model\Entity\Infogensenior[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InfogenseniorsController extends AppController
{
    /**
    * getAllInfogensenior
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllInfogensenior()
    {

        /* search */
        $infogenseniors = $this->Infogenseniors->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $infogenseniors,
            '_serialize' => ['success', 'data']
        ]);
    }

    /**
     * editInfogensenior
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
    public function editInfogensenior(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $infogenseniors=$this->Infogenseniors->get($id);
         /* create infogenseniors entity */
        if (1==1){
            $infogenseniors->majnds=$data->majnds;  
            $infogenseniors->duds=$data->duds;  
            $infogenseniors->Fonctionds=$data->Fonctionds;  
            $infogenseniors->Categorieds=$data->Categorieds;  
            $infogenseniors->Suphierds=$data->Suphierds;  
            $infogenseniors->Superds=$data->Superds; 
            $infogenseniors->Interimds=$data->Interimds; 

            $this->Infogenseniors->save($infogenseniors); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

    /**
      *  getInfogensenior
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getInfogensenior(){
 
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

        $infogenseniors = $this->Infogenseniors->find('all', [
            'conditions'=>[
                'id IS'=>$id,
            ],
           
        ])->first();
        // debug($infogenseniors);die;
        
        if(empty($infogenseniors)){
           throw new UnauthorizedException('Infogenseniors not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $infogenseniors,
           '_serialize' => ['success', 'data']
       ]);
    }
}
