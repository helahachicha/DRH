<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Infogenjuniors Controller
 *
 * @method \App\Model\Entity\Infogenjunior[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InfogenjuniorsController extends AppController
{
      /**
    * getAllInfogenjunior
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllInfogenjunior()
    {

        /* search */
        $infogenjuniors = $this->Infogenjuniors->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $infogenjuniors,
            '_serialize' => ['success', 'data']
        ]);
    }

    /**
     * editInfogenjunior
     *
     * @Input:
     *         data:
     *          majn (Int) 
     *          du(Date)
     *          Fonction (String)
     *          Categorie (String) 
     *          Suphier(String) 
     *          Super (String) 
     *          Interim(String) 
     *          
     *         
     * @Output: data : success message
     */
    public function editInfogenjunior(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $infogenjuniors=$this->Infogenjuniors->get($id);
         /* create Idproposte entity */
        if (1==1){
            $infogenjuniors->majn=$data->majn;  
            $infogenjuniors->du=$data->du;  
            $infogenjuniors->Fonction=$data->Fonction;  
            $infogenjuniors->Categorie=$data->Categorie;  
            $infogenjuniors->Suphier=$data->Suphier;  
            $infogenjuniors->Super=$data->Super; 
            $infogenjuniors->Interim=$data->Interim; 

            $this->Infogenjuniors->save($infogenjuniors); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

    /**
      *  getInfogenjunior
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getInfogenjunior(){
 
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

        $infogenjuniors = $this->Infogenjuniors->find('all', [
            'conditions'=>[
                'id IS'=>$id,
            ],
           
        ])->first();
        // debug($infogenjuniors);die;
        
        if(empty($infogenjuniors)){
           throw new UnauthorizedException('Infogenjuniors not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $infogenjuniors,
           '_serialize' => ['success', 'data']
       ]);
    }


    /**
      * deleteInfogenjunior
      *
      * @Input: id
      *
      * @Output: data
      */

      public function deleteInfogenjunior(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $infogenjuniors = $this->Infogenjuniors->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete infogenjuniors  */

        if (1==1){
            $this->Infogenjuniors->delete($infogenjuniors);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }
}
