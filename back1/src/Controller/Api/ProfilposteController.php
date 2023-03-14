<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Profilposte Controller
 *
 * @method \App\Model\Entity\Profilposte[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfilposteController extends AppController
{
    /**
    * getAllProfilposte
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllProfilposte()
    {

        /* search */
        $profilposte = $this->Profilposte->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $profilposte,
            '_serialize' => ['success', 'data']
        ]);
    }


     /**
     * editProfilposte
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
    public function editProfilposte(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            // debug($data);die;

        }
        $id=$this->request->getQuery('id');
        $profilposte=$this->Profilposte->get($id);
         /* create profilposte entity */
        
        if (1==1){
            $profilposte->comptech=$data->comptech;  
            $profilposte->contenucomptech=$data->contenucomptech;  
            $profilposte->comporgan=$data->comporgan;  
            $profilposte->gestemps=$data->gestemps;  
            $profilposte->nvisegestemp=$data->nvisegestemp;  
            $profilposte->isuivigestemp=$data->isuivigestemp;  
            $profilposte->compcompor=$data->compcompor;  
            $profilposte->geek=$data->geek;  
            $profilposte->autod=$data->autod;  
            $profilposte->positivite=$data->positivite;  
            $profilposte->commintera=$data->commintera;  
            $profilposte->nvisecommintera=$data->nvisecommintera;  
            $profilposte->isuivicommintera=$data->isuivicommintera;  
            $profilposte->tracoll=$data->tracoll;  
            $profilposte->nvisetracoll=$data->nvisetracoll;  
            $profilposte->isuivitracoll=$data->isuivitracoll;  
            $profilposte->resprob=$data->resprob;  
            $profilposte->nviseresprob=$data->nviseresprob;  
            $profilposte->isuiviresprob=$data->isuiviresprob;  
            $profilposte->servexcell=$data->servexcell;  
            $profilposte->nviseservexcell=$data->nviseservexcell;  
            $profilposte->isuiviservexcell=$data->isuiviservexcell;  
            $profilposte->droit=$data->droit;  
            $profilposte->contenudroit=$data->contenudroit;  
            $profilposte->devoir=$data->devoir;  
            $profilposte->contenudevoir=$data->contenudevoir;  
            $profilposte->validation=$data->validation;  
            $profilposte->fonction=$data->fonction;  
            $profilposte->nompre=$data->nompre;  
            $profilposte->fonction1=$data->fonction1;  
            $profilposte->nompre1=$data->nompre1;  
            $profilposte->fonction2=$data->fonction2;  
            $profilposte->nompre2=$data->nompre2;   

            $this->Profilposte->save($profilposte); 
        }
       

         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }
}
