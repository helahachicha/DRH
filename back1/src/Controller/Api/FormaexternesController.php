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
     *          themeformation_id (Int) *Required
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
            $formaexternes->themeformation_id=$data->themeformation_id;  
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
            
            if (!empty($formaexternes->typecomp && preg_match('/^[a-zA-Z]+$/', $formaexternes->typecomp)) 
            and !empty($formaexternes->themeformation_id)
            and !empty($formaexternes->participant && preg_match('/^[a-zA-Z]+$/', $formaexternes->participant))
            and !empty($formaexternes->nbparticipant)
            and !empty($formaexternes->raisonforma && preg_match('/^[a-zA-Z]+$/', $formaexternes->raisonforma))
            and !empty($formaexternes->organismeforma && preg_match('/^[a-zA-Z]+$/', $formaexternes->organismeforma)) 
            and !empty($formaexternes->formalite && preg_match('/^[a-zA-Z]+$/', $formaexternes->formalite))
            and !empty($formaexternes->formateur && preg_match('/^[a-zA-Z]+$/', $formaexternes->formateur))
            and !empty($formaexternes->raisonchoix && preg_match('/^[a-zA-Z]+$/', $formaexternes->raisonchoix))
            and !empty($formaexternes->dureeforma)and !empty($formaexternes->nbjour)
            and !empty($formaexternes->nbhjour)and !empty($formaexternes->date)
            and !empty($formaexternes->horaireforma)
            and !empty($formaexternes->pause && preg_match('/^[a-zA-Z]+$/', $formaexternes->pause))
            and !empty($formaexternes->lieuforma && preg_match('/^[a-zA-Z]+$/', $formaexternes->lieuforma))) {
                if ($this->Formaexternes->save($formaexternes)){
                    $message= "Formation ajouter avec succés !";
                    
                }
                    
            } else if (empty($formaexternes->typecomp) or empty($formaexternes->themeformation_id)
            or empty($formaexternes->participant)or empty($formaexternes->nbparticipant)
            or empty($formaexternes->raisonforma)or empty($formaexternes->organismeforma) 
            or empty($formaexternes->formalite)or empty($formaexternes->formateur)
            or empty($formaexternes->raisonchoix)or empty($formaexternes->dureeforma)
            or empty($formaexternes->nbjour)or empty($formaexternes->nbhjour)
            or empty($formaexternes->date)or empty($formaexternes->horaireforma)
            or empty($formaexternes->pause)or empty($formaexternes->lieuforma)) {
                $message = "Remplir tous les champs !";    
            } else {
                $message = "Les champs 'Type de compétence', 'Participant','Raison de formation',
                'Organisme de formation', 'Formalité de réalisation', 'Formateur', 'Pause café' et 
                'Lieu de formation' doit être des chaînes de caractères non vide !"; 
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
     * editFormaexterne
     *
     * @Input:
     *         data:
     *          typecomp (String) *Required
     *          themeformation_id (Int) *Required
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
            $formaexternes->typecomp=$data->typecomp;  
            $formaexternes->themeformation_id=$data->themeformation_id;  
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

            if (!empty($formaexternes->typecomp && preg_match('/^[a-zA-Z]+$/', $formaexternes->typecomp)) 
            and !empty($formaexternes->themeformation_id)
            and !empty($formaexternes->participant && preg_match('/^[a-zA-Z]+$/', $formaexternes->participant))
            and !empty($formaexternes->nbparticipant)
            and !empty($formaexternes->raisonforma && preg_match('/^[a-zA-Z]+$/', $formaexternes->raisonforma))
            and !empty($formaexternes->organismeforma && preg_match('/^[a-zA-Z]+$/', $formaexternes->organismeforma)) 
            and !empty($formaexternes->formalite && preg_match('/^[a-zA-Z]+$/', $formaexternes->formalite))
            and !empty($formaexternes->formateur && preg_match('/^[a-zA-Z]+$/', $formaexternes->formateur))
            and !empty($formaexternes->raisonchoix && preg_match('/^[a-zA-Z]+$/', $formaexternes->raisonchoix))
            and !empty($formaexternes->dureeforma)and !empty($formaexternes->nbjour)
            and !empty($formaexternes->nbhjour)and !empty($formaexternes->date)
            and !empty($formaexternes->horaireforma)
            and !empty($formaexternes->pause && preg_match('/^[a-zA-Z]+$/', $formaexternes->pause))
            and !empty($formaexternes->lieuforma && preg_match('/^[a-zA-Z]+$/', $formaexternes->lieuforma))) {
                if ($this->Formaexternes->save($formaexternes)){
                    $message= "Formation modifier avec succés !";
                    
                }
                    
            } else if (empty($formaexternes->typecomp) or empty($formaexternes->themeformation_id)
            or empty($formaexternes->participant)or empty($formaexternes->nbparticipant)
            or empty($formaexternes->raisonforma)or empty($formaexternes->organismeforma) 
            or empty($formaexternes->formalite)or empty($formaexternes->formateur)
            or empty($formaexternes->raisonchoix)or empty($formaexternes->dureeforma)
            or empty($formaexternes->nbjour)or empty($formaexternes->nbhjour)
            or empty($formaexternes->date)or empty($formaexternes->horaireforma)
            or empty($formaexternes->pause)or empty($formaexternes->lieuforma)) {
                $message = "Remplir tous les champs !";    
            } else {
                $message = "Les champs 'Type de compétence', 'Participant','Raison de formation',
                'Organisme de formation', 'Formalité de réalisation', 'Formateur', 'Pause café' et 
                'Lieu de formation' doit être des chaînes de caractères non vide !"; 
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
    * getAllFormaexterne
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllFormaexterne()
    {

        /* search */
        $formaexternes = $this->Formaexternes->find('all',[
            'contain' => ['Themeformations']
        ]);
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $formaexternes,
            '_serialize' => ['success', 'data']
        ]);
    }
    
    /**
      * getFormaexterne
      *
      * @Input: id
      *
      * @Output: data
      */
     public function getFormaexterne(){
 
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

 
         $formaexternes = $this->Formaexternes->find('all', [
             'conditions'=>[
                 'id IS'=>$id,
             ],
            
         ])->first();
           // debug($formaexternes);die;

         if(empty($formaexternes)){
             throw new UnauthorizedException('Formaexternes not found');
         }
 
         /*send result */
         $this->set([
             'success' => true,
             'data' => $formaexternes,
             '_serialize' => ['success', 'data']
         ]);
     }


     /**
      * deleteFormaexterne
      *
      * @Input: id
      *
      * @Output: data
      */

      public function deleteFormaexterne(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $formaexternes = $this->Formaexternes->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete formaexternes  */

        if (1==1){
            $this->Formaexternes->delete($formaexternes);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }
}
