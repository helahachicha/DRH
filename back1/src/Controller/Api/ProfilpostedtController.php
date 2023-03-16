<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Profilpostedt Controller
 *
 * @method \App\Model\Entity\Profilpostedt[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfilpostedtController extends AppController
{
    /**
    * getAllProfilpostedt
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllProfilpostedt()
    {

        /* search */
        $profilpostedt = $this->Profilpostedt->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $profilpostedt,
            '_serialize' => ['success', 'data']
        ]);
    }


     /**
     * editProfilpostedt
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
    public function editProfilpostedt(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            // debug($data);die;

        }
        $id=$this->request->getQuery('id');
        $profilpostedt=$this->Profilpostedt->get($id);
         /* create profilpostedt entity */
        
        if (1==1){
            $profilpostedt->comptechdt=$data->comptechdt;  
            $profilpostedt->contenucomptechdt=$data->contenucomptechdt;  
            $profilpostedt->comporgandt=$data->comporgandt;  
            $profilpostedt->gestempsdt=$data->gestempsdt;  
            $profilpostedt->nvisegestempdt=$data->nvisegestempdt;  
            $profilpostedt->isuivigestempdt=$data->isuivigestempdt;  
            $profilpostedt->compcompordt=$data->compcompordt;  
            $profilpostedt->comminteradt=$data->comminteradt;  
            $profilpostedt->nvisecomminteradt=$data->nvisecomminteradt;  
            $profilpostedt->isuivicomminteradt=$data->isuivicomminteradt;  
            $profilpostedt->tracolldt=$data->tracolldt;
            $profilpostedt->nvisetracolldt=$data->nvisetracolldt;  
            $profilpostedt->isuivitracolldt=$data->isuivitracolldt;  
            $profilpostedt->resprobdt=$data->resprobdt;  
            $profilpostedt->nviseresprobdt=$data->nviseresprobdt;  
            $profilpostedt->isuiviresprobdt=$data->isuiviresprobdt; 
            $profilpostedt->raisanaldt=$data->raisanaldt; 
            $profilpostedt->nviseraisanaldt=$data->nviseraisanaldt;  
            $profilpostedt->isuiviraisanaldt=$data->isuiviraisanaldt;  
            $profilpostedt->leadershipdt=$data->leadershipdt;
            $profilpostedt->nviseleadershipdt=$data->nviseleadershipdt;  
            $profilpostedt->isuivileadershipdt=$data->isuivileadershipdt;
            $profilpostedt->soudevdt=$data->soudevdt;  
            $profilpostedt->nvisesoudevdt=$data->nvisesoudevdt;  
            $profilpostedt->isuivisoudevdt=$data->isuivisoudevdt; 
            $profilpostedt->droitdt=$data->droitdt; 
            $profilpostedt->contenudroitdt=$data->contenudroitdt; 
            $profilpostedt->devoirdt=$data->devoirdt; 
            $profilpostedt->contenudevoirdt=$data->contenudevoirdt;   
            $profilpostedt->validationdt=$data->validationdt;
            $profilpostedt->contenuvaliddt=$data->contenuvaliddt;
            $profilpostedt->fonctiondt=$data->fonctiondt;  
            $profilpostedt->nompredt=$data->nompredt;  
            $profilpostedt->fonctiondt1=$data->fonctiondt1;  
            $profilpostedt->nompredt1=$data->nompredt1;  
            $profilpostedt->fonctiondt2=$data->fonctiondt2;  
            $profilpostedt->nompredt2=$data->nompredt2;   

            $this->Profilpostedt->save($profilpostedt); 
        }
       

         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
      * getProfilpostedt
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getProfilpostedt(){
 
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

        $profilpostedt = $this->Profilpostedt->find('all', [
            'conditions'=>[
                'id IS'=>$id,
            ],
           
        ])->first();
        // debug($profilpostedt);die;
        
        if(empty($profilpostedt)){
           throw new UnauthorizedException('Profilpostedt not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $profilpostedt,
           '_serialize' => ['success', 'data']
       ]);
    }
}
