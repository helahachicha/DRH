<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Fonctions Controller
 *
 * @method \App\Model\Entity\Fonction[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FonctionsController extends AppController
{

     /**
     * addFonction
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *         
     * @Output: data : success message
     */
    public function addFonction(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create fonctions entity */
        if (1==1){
            $fonctions = $this->Fonctions->newEmptyEntity();
            $fonctions->label=$data->label;  

            $this->Fonctions->save($fonctions); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

     /**
     * editFonction
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *         
     * @Output: data : success message
     */
    public function editFonction(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $fonctions=$this->Fonctions->get($id);
         /* create fonctions entity */
        if (1==1){
            $fonctions->label=$data->label;  

            $this->Fonctions->save($fonctions); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }



   /**
      * getFonction
      *
      * @Input: id
      *
      * @Output: data
    */
    public function getFonction(){

        $id = $this->request->getQuery('id');
        
        if(1==1){
            if (!isset($id) or empty($id) or $id == null ){
                throw new UnauthorizedException('Id is Required');
            }
           
        }
        $fonctions = $this->Fonctions->find('all', [
            'conditions'=>[
                'id IS'=>$id
            ],
           
            
        ])->first();
        if(empty($fonctions)){
            throw new UnauthorizedException('Place not found');
        }

        $this->set([
            'success' => true,
            'data' => $fonctions,
            '_serialize' => ['success', 'data']
        ]);
    }


    /**
    * getAllFonction
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllFonction()
    {

        /* search */
        $fonctions = $this->Fonctions->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $fonctions,
            '_serialize' => ['success', 'data']
        ]);
    }

      /**
      * deleteFonction
      *
      * @Input: id
      *
      * @Output: data
      */

      public function deleteFonction(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $fonctions = $this->Fonctions->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete fonctions  */

        if (1==1){
            $this->Fonctions->delete($fonctions);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }


}
