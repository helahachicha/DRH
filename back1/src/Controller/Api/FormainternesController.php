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
     * addFormainterne
     *
     * @Input:
     *         data:
     *          tycomp (String) *Required
     *          themeformation_id (Int) *Required
     *          animateur (String) *Required
     *          poste (String) *Required
     *          date (Date) *Required
     *          hentrer (Time) *Required
     *          hsortie (Time) *Required
     * 
     * @Output: data : success message
     */
    public function addFormainterne(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create formainternes entity */
        if (1==1){
            $formainternes = $this->Formainternes->newEmptyEntity();
            $formainternes->tycomp=$data->tycomp;  
            $formainternes->themeformation_id=$data->themeformation_id;  
            $formainternes->animateur=$data->animateur;  
            $formainternes->poste=$data->poste;  
            $formainternes->date=$data->date;  
            $formainternes->hentrer=$data->hentrer; 
            $formainternes->hsortie=$data->hsortie;     

            $this->Formainternes->save($formainternes);

        }

         /*send result */
        $this->set([
            'success' => true,
            'message' =>  $message,
            '_serialize' => ['success', 'message']
        ]);
    
    }

 /**
     * editFormainterne
     *
     * @Input:
     *         data:
     *          tycomp (String) *Required
     *          themeformation_id (Int) *Required
     *          animateur (String) *Required
     *          poste (String) *Required
     *          date (Date) *Required
     *          hentrer (Time) *Required
     *          hsortie (Time) *Required
     * @Output: data : success message
     */
    public function editFormainterne(){
        
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
         /* create coutformainternes entity */
        if (1==1){
            $formainternes->tycomp=$data->tycomp;  
            $formainternes->themeformation_id=$data->themeformation_id;  
            $formainternes->animateur=$data->animateur;  
            $formainternes->poste=$data->poste;  
            $formainternes->date=$data->date;  
            $formainternes->hentrer=$data->hentrer; 
            $formainternes->hsortie=$data->hsortie;  
                if ($this->Formainternes->save($formainternes)){
                    $message= "Formation modifier avec succés !";
                }
        }
        /*send result */
        $this->set([
            'success' => true,
            'message' =>  $message,
            '_serialize' => ['success', 'message']
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
        $formainternes = $this->Formainternes->find('all',[
            'contain' => [
                'Themeformations'
            ]
        ]);
 
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
           throw new UnauthorizedException('Coutformaexternes not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $formainternes,
           '_serialize' => ['success', 'data']
       ]);
    }


    /**
      * deleteFormainterne
      *
      * @Input: id
      *
      * @Output: data
      */

      public function deleteFormainterne(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $formainternes = $this->Formainternes->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete formainternes  */

        if (1==1){
            $this->Formainternes->delete($formainternes);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }

}
