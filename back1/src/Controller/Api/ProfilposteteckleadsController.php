<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Profilposteteckleads Controller
 *
 * @method \App\Model\Entity\Profilpostetecklead[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfilposteteckleadsController extends AppController
{
    /**
    * getAllProfilpostetecklead
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllProfilpostetecklead()
    {

        /* search */
        $profilposteteckleads = $this->Profilposteteckleads->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $profilposteteckleads,
            '_serialize' => ['success', 'data']
        ]);
    }


     /**
     * editProfilpostetecklead
     *
     * @Input:
     *         data:
     *          comptechdt (String) 
     *          contenucomptechdt (String) 
     *          comporgandt(String)
     *          gestempsdt(String) 
     *          nvisegestempdt (String) 
     *          isuivigestempdt (String) 
     *          compcompordt(String) 
     *      	comminteradt (String) 
     *      	nvisecomminteradt (String) 
     *          isuivicomminteradt (String) 
     *          tracolldt (String) 
     *          nvisetracolldt (String) 
     *          isuivitracolldt (String) 
     *          resprobdt (String) 
     * 	        nviseresprobdt (String) 
     *          isuiviresprobdt (String)
     *          raisanaldt (String) 
     *          nviseraisanaldt (String) 
     *          isuiviraisanaldt (String) 
     *          leadershipdt (String) 
     *          nviseleadershipdt (String) 
     *          isuivileadershipdt (String) 
     *          soudevdt (String) 
     *          nvisesoudevdt (String) 
     *          isuivisoudevdt (String) 
     *          droitdt (String) 
     *          contenudroitdt (String) 
     *          devoirdt (String) 
     *          contenudevoirdt (String) 
     *          validationdt (String)
     *          contenuvaliddt (String)
     *          fonctiondt (String) 
     *          nompredt (String) 
     *          fonctiondt1 (String) 
     *          nompredt1 (String) 
     *          fonctiondt2 (String) 
     *          nompredt2 (String) 
 

     *         
     *         
     * @Output: data : success message
     */
    public function editProfilpostetecklead(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            // debug($data);die;

        }
        $id=$this->request->getQuery('id');
        $profilposteteckleads=$this->Profilposteteckleads->get($id);
         /* create profilposteteckleads entity */
        
        if (1==1){
            $profilposteteckleads->comptechdt=$data->comptechdt;  
            $profilposteteckleads->contenucomptechdt=$data->contenucomptechdt;  
            $profilposteteckleads->comporgandt=$data->comporgandt;  
            $profilposteteckleads->gestempsdt=$data->gestempsdt;  
            $profilposteteckleads->nvisegestempdt=$data->nvisegestempdt;  
            $profilposteteckleads->isuivigestempdt=$data->isuivigestempdt;  
            $profilposteteckleads->compcompordt=$data->compcompordt;  
            $profilposteteckleads->comminteradt=$data->comminteradt;  
            $profilposteteckleads->nvisecomminteradt=$data->nvisecomminteradt;  
            $profilposteteckleads->isuivicomminteradt=$data->isuivicomminteradt;  
            $profilposteteckleads->tracolldt=$data->tracolldt;
            $profilposteteckleads->nvisetracolldt=$data->nvisetracolldt;  
            $profilposteteckleads->isuivitracolldt=$data->isuivitracolldt;  
            $profilposteteckleads->resprobdt=$data->resprobdt;  
            $profilposteteckleads->nviseresprobdt=$data->nviseresprobdt;  
            $profilposteteckleads->isuiviresprobdt=$data->isuiviresprobdt; 
            $profilposteteckleads->raisanaldt=$data->raisanaldt; 
            $profilposteteckleads->nviseraisanaldt=$data->nviseraisanaldt;  
            $profilposteteckleads->isuiviraisanaldt=$data->isuiviraisanaldt;  
            $profilposteteckleads->leadershipdt=$data->leadershipdt;
            $profilposteteckleads->nviseleadershipdt=$data->nviseleadershipdt;  
            $profilposteteckleads->isuivileadershipdt=$data->isuivileadershipdt;
            $profilposteteckleads->soudevdt=$data->soudevdt;  
            $profilposteteckleads->nvisesoudevdt=$data->nvisesoudevdt;  
            $profilposteteckleads->isuivisoudevdt=$data->isuivisoudevdt; 
            $profilposteteckleads->droitdt=$data->droitdt; 
            $profilposteteckleads->contenudroitdt=$data->contenudroitdt; 
            $profilposteteckleads->devoirdt=$data->devoirdt; 
            $profilposteteckleads->contenudevoirdt=$data->contenudevoirdt;   
            $profilposteteckleads->validationdt=$data->validationdt;
            $profilposteteckleads->contenuvaliddt=$data->contenuvaliddt;
            $profilposteteckleads->fonctiondt=$data->fonctiondt;  
            $profilposteteckleads->nompredt=$data->nompredt;  
            $profilposteteckleads->fonctiondt1=$data->fonctiondt1;  
            $profilposteteckleads->nompredt1=$data->nompredt1;  
            $profilposteteckleads->fonctiondt2=$data->fonctiondt2;  
            $profilposteteckleads->nompredt2=$data->nompredt2;   

            $this->Profilposteteckleads->save($profilposteteckleads); 
        }
       

         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
      * getProfilpostetecklead
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getProfilpostetecklead(){
 
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

        $profilposteteckleads = $this->Profilposteteckleads->find('all', [
            'conditions'=>[
                'id IS'=>$id,
            ],
           
        ])->first();
        // debug($profilposteteckleads);die;
        
        if(empty($profilposteteckleads)){
           throw new UnauthorizedException('Profilposteteckleads not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $profilposteteckleads,
           '_serialize' => ['success', 'data']
       ]);
    }


    /**
      * deleteProfilpostetecklead
      *
      * @Input: id
      *
      * @Output: data
      */

      public function deleteProfilpostetecklead(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $profilposteteckleads = $this->Profilposteteckleads->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete profilposteteckleads  */

        if (1==1){
            $this->Profilposteteckleads->delete($profilposteteckleads);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }
}
