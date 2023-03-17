<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Profilpostejuniors Controller
 *
 * @method \App\Model\Entity\Profilpostejunior[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfilpostejuniorsController extends AppController
{
    /**
    * getAllProfilpostejunior
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllProfilpostejunior()
    {

        /* search */
        $profilpostejuniors = $this->Profilpostejuniors->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $profilpostejuniors,
            '_serialize' => ['success', 'data']
        ]);
    }


     /**
     * editProfilpostejunior
     *
     * @Input:
     *         data:
     *          comptech (String) 
     *          contenucomptech (String) 
     *          comporgan (String)
     *          gestemps (String) 
     *          nvisegestemp (String) 
     *          isuivigestemp (String) 
     *          compcompor (String) 
     *      	geek (String) 
     *      	autod (String) 
     *          positivite (String) 
     *          commintera (String) 
     *          nvisecommintera (String) 
     *          isuivicommintera (String) 
     *          tracoll (String) 
     * 	        nvisetracoll (String) 
     *          isuivitracoll (String) 
     *          resprob (String) 
     *          nviseresprob (String) 
     *          isuiviresprob (String) 
     *          servexcell (String) 
     *          nviseservexcell (String) 
     *          isuiviservexcell (String) 
     *          droit (String) 
     *          contenudroit (String) 
     *          devoir (String) 
     *          contenudevoir (String) 
     *          validation (String) 
     *          contenuvalid (String)
     *          fonction (String) 
     *          nompre (String) 
     *          fonction1 (String) 
     *          nompre1 (String) 
     *          fonction2 (String) 
     *          nompre2 (String) 
 

     *         
     *         
     * @Output: data : success message
     */
    public function editProfilpostejunior(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            // debug($data);die;

        }
        $id=$this->request->getQuery('id');
        $profilpostejuniors=$this->Profilpostejuniors->get($id);
         /* create profilpostejuniors entity */
        
        if (1==1){
            $profilpostejuniors->comptech=$data->comptech;  
            $profilpostejuniors->contenucomptech=$data->contenucomptech;  
            $profilpostejuniors->comporgan=$data->comporgan;  
            $profilpostejuniors->gestemps=$data->gestemps;  
            $profilpostejuniors->nvisegestemp=$data->nvisegestemp;  
            $profilpostejuniors->isuivigestemp=$data->isuivigestemp;  
            $profilpostejuniors->compcompor=$data->compcompor;  
            $profilpostejuniors->geek=$data->geek;  
            $profilpostejuniors->autod=$data->autod;  
            $profilpostejuniors->positivite=$data->positivite;  
            $profilpostejuniors->commintera=$data->commintera;  
            $profilpostejuniors->nvisecommintera=$data->nvisecommintera;  
            $profilpostejuniors->isuivicommintera=$data->isuivicommintera;  
            $profilpostejuniors->tracoll=$data->tracoll;  
            $profilpostejuniors->nvisetracoll=$data->nvisetracoll;  
            $profilpostejuniors->isuivitracoll=$data->isuivitracoll;  
            $profilpostejuniors->resprob=$data->resprob;  
            $profilpostejuniors->nviseresprob=$data->nviseresprob;  
            $profilpostejuniors->isuiviresprob=$data->isuiviresprob;  
            $profilpostejuniors->servexcell=$data->servexcell;  
            $profilpostejuniors->nviseservexcell=$data->nviseservexcell;  
            $profilpostejuniors->isuiviservexcell=$data->isuiviservexcell;  
            $profilpostejuniors->droit=$data->droit;  
            $profilpostejuniors->contenudroit=$data->contenudroit;  
            $profilpostejuniors->devoir=$data->devoir;  
            $profilpostejuniors->contenudevoir=$data->contenudevoir;  
            $profilpostejuniors->validation=$data->validation;  
            $profilpostejuniors->contenuvalid=$data->contenuvalid;
            $profilpostejuniors->fonction=$data->fonction;  
            $profilpostejuniors->nompre=$data->nompre;  
            $profilpostejuniors->fonction1=$data->fonction1;  
            $profilpostejuniors->nompre1=$data->nompre1;  
            $profilpostejuniors->fonction2=$data->fonction2;  
            $profilpostejuniors->nompre2=$data->nompre2;   

            $this->Profilpostejuniors->save($profilpostejuniors); 
        }
       

         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
      * getProfilpostejunior
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getProfilpostejunior(){
 
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

        $profilpostejuniors = $this->Profilpostejuniors->find('all', [
            'conditions'=>[
                'id IS'=>$id,
            ],
           
        ])->first();
        // debug($profilpostejuniors);die;
        
        if(empty($profilpostejuniors)){
           throw new UnauthorizedException('Profilpostejuniors not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $profilpostejuniors,
           '_serialize' => ['success', 'data']
       ]);
    }
}
