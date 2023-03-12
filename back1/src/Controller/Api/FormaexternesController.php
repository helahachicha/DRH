<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Formaexternes Controller
 *
 * @method \App\Model\Entity\Formaexterne[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FormaexternesController extends AppController
{
   /**
     * addFormaexterne
     *
     * @Input:
     *         data:
     *          typecomp (String) *Required
     *          themforma (String) *Required
     *          participant (String) *Required
     *          nbparticipant (int) *Required
     *          raisonforma (String) *Required
     *          organismeforma (String) *Required
     *          formalite (String) *Required
     *      	formateur (String) *Required
     *      	raisonchoix (String) *Required
     *          dureeforma (String) *Required
     *          nbjour (int) *Required
     *          nbhjour (int) *Required
     *          date (DateTime) *Required
     *          horaireforma (String) *Required
     * 	        pause (String) *Required
     *          lieuforma (String) *Required
     *         
     * @Output: data : success message
     */
    public function addFormaexterne(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create formaexternes entity */
        if (1==1){
            $formaexternes = $this->Formaexternes->newEmptyEntity();
            $formaexternes->typecomp=$data->typecomp;  
            $formaexternes->themforma=$data->themforma;  
            $formaexternes->participant=$data->participant;  
            $formaexternes->nbparticipant=$data->nbparticipant;  
            $formaexternes->raisonforma=$data->raisonforma ;  
            $formaexternes->organismeforma=$data->organismeforma ;  
            $formaexternes->formalite=$data->formalite ;  
            $formaexternes->formateur=$data->formateur;  
            $formaexternes->raisonchoix=$data->raisonchoix ;  
            $formaexternes->dureeforma=$data->dureeforma;  
            $formaexternes->nbjour=$data->nbjour;  
            $formaexternes->nbhjour=$data->nbhjour;  
            $formaexternes->date=$data->date;  
            $formaexternes->horaireforma=$data->horaireforma;  
            $formaexternes->pause=$data->pause ;  
            $formaexternes->lieuforma=$data->lieuforma;  

            $this->Formaexternes->save($formaexternes); 
        }
       
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

     /**
     * editFormaexterne
     *
     * @Input:
     *         data:
     *          typecomp (String) *Required
     *          themforma (String) *Required
     *          participant (String) *Required
     *          nbparticipant (int) *Required
     *          raisonforma (String) *Required
     *          organismeforma (String) *Required
     *          formalite (String) *Required
     *      	formateur (String) *Required
     *      	raisonchoix (String) *Required
     *          dureeforma (String) *Required
     *          nbjour (int) *Required
     *          nbhjour (int) *Required
     *          date (DateTime) *Required
     *          horaireforma (String) *Required
     * 	        pause (String) *Required
     *          lieuforma (String) *Required
     *         
     * @Output: data : success message
     */
    public function editFormaexterne(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            // debug($data);die;

        }
        $id=$this->request->getQuery('id');
        $formaexternes=$this->Formaexternes->get($id);
         /* create formaexternes entity */
        if (1==1){
            $formaexternes = $this->Formaexternes->newEmptyEntity();
            $formaexternes->typecomp=$data->typecomp;  
            $formaexternes->themforma=$data->themforma;  
            $formaexternes->participant=$data->participant;  
            $formaexternes->nbparticipant=$data->nbparticipant;  
            $formaexternes->raisonforma=$data->raisonforma ;  
            $formaexternes->organismeforma=$data->organismeforma ;  
            $formaexternes->formalite=$data->formalite ;  
            $formaexternes->formateur=$data->formateur;  
            $formaexternes->raisonchoix=$data->raisonchoix ;  
            $formaexternes->dureeforma=$data->dureeforma;  
            $formaexternes->nbjour=$data->nbjour;  
            $formaexternes->nbhjour=$data->nbhjour;  
            $formaexternes->date=$data->date;  
            $formaexternes->horaireforma=$data->horaireforma;  
            $formaexternes->pause=$data->pause ;  
            $formaexternes->lieuforma=$data->lieuforma;  

            $this->Formaexternes->save($formaexternes); 
        }
       
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
    * getAllFormaexterne
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllFormaexterne()
    {

        /* search */
        $formaexternes = $this->Formaexternes->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $formaexternes,
            '_serialize' => ['success', 'data']
        ]);
    }
    
    /**
      * getFormaexternes
      *
      * @Input: id
      *
      * @Output: data
      */
     public function getFormaexternes(){
 
         $id = $this->request->getQuery('id');
         
         if(1==1){
             if (!isset($id) or empty($id) or $id == null ){
                 throw new UnauthorizedException('Id is Required');
             }
             if(!is_numeric($id)){
                 throw new UnauthorizedException('Id is not Valid');
             }
         }
 
         $formaexterne = $this->Formaexternes->find('all', [
             'conditions'=>[
                 'id'=>$id,
             ],
            
         ])->first();
 
         if(empty($formaexternes)){
             throw new UnauthorizedException('Formaexterne not found');
         }
 
         $this->set([
             'success' => true,
             'data' => $formaexternes,
             '_serialize' => ['success', 'data']
         ]);
     }
}
