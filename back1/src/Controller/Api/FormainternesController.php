<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Formainternes Controller
 *
 * @method \App\Model\Entity\Formainterne[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FormainternesController extends AppController
{
    /**
     * addformainterne
     *
     * @Input:
     *         data:
     *          tycomp (String) *Required
     *          themeforma (String) *Required
     *          animateur (String) *Required
     *          poste (String) *Required
     *          datee (DateTime) *Required
     *          hentrer (Time) *Required
     *          hsortie (Time) *Required
     * 
     * @Output: data : success message
     */
    public function addformainterne(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create $formainternes entity */
        if (1==1){
            $formainternes = $this->Formainternes->newEmptyEntity();
            $formainternes->tycomp=$data->tycomp;  
            $formainternes->themeforma=$data->themeforma;  
            $formainternes->animateur=$data->animateur;  
            $formainternes->poste=$data->poste;  
            $formainternes->datee=$data->datee;  
            $formainternes->hentrer=$data->hentrer; 
            $formainternes->hsortie=$data->hsortie;     

            $this->Formainternes->save($formainternes); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

 /**
     * editformainterne
     *
     * @Input:
     *         data:
     *          tycomp (String) *Required
     *          themeforma (String) *Required
     *          animateur (String) *Required
     *          poste (String) *Required
     *          datee (DateTime) *Required
     *          hentrer (Time) *Required
     *          hsortie (Time) *Required
     * @Output: data : success message
     */
    public function editformainterne(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $formainternes=$this->Formainternes->get($id);
         /* create coutformaexternes entity */
        if (1==1){
            $formainternes->tycomp=$data->tycomp;  
            $formainternes->themeforma=$data->themeforma;  
            $formainternes->animateur=$data->animateur;  
            $formainternes->poste=$data->poste;  
            $formainternes->datee=$data->datee;  
            $formainternes->hentrer=$data->hentrer; 
            $formainternes->hsortie=$data->hsortie;  

            $this->Formainternes->save($formainternes); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updatesd with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

    /**
    * getAllFormainterne
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllFormainterne()
    {

        /* search */
        $formainternes = $this->Formainternes->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $formainternes,
            '_serialize' => ['success', 'data']
        ]);
    }

    /**
      * getFormainterne
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getFormainterne(){
 
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

        $formainternes = $this->Formainternes->find('all', [
            'conditions'=>[
                'id IS'=>$id,
            ],
           
        ])->first();
        // debug($formainternes);die;
        
        if(empty($formainternes)){
           throw new UnauthorizedException('Coutformaexterne not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $formainternes,
           '_serialize' => ['success', 'data']
       ]);
    }

}
