<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Profilposteds Controller
 *
 * @method \App\Model\Entity\Profilposted[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfilpostedsController extends AppController
{
    /**
    * getAllProfilposteds
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllProfilposteds()
    {

        /* search */
        $profilposteds = $this->Profilposteds->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $profilposteds,
            '_serialize' => ['success', 'data']
        ]);
    }


     /**
     * editProfilposteds
     *
     * @Input:
     *         data:
     *          comptechds (String) 
     *          contenucomptechds (String) 
     *          comporgands(String)
     *          gestempsds(String) 
     *          nvisegestempds (String) 
     *          isuivigestempds (String) 
     *          compcompords (String) 
     * 
     *      	comminterads (String) 
     *      	nvisecomminterads (String) 
     *          isuivicomminterads (String) 
     *          tracollds (String) 
     *          nvisetracollds (String) 
     *          isuivitracollds (String) 
     *          resprobds (String) 
     * 	        nviseresprobds (String) 
     *          isuiviresprobds (String) 
     *          servexcellds (String) 
     *          nviseservexcellds (String) 
     *          isuiviservexcellds (String) 
     *          raisconcepds (String) 
     *          nviseraisconcepds (String) 
     *          isuiviraisconcepds (String) 
     *          leadershipds (String) 
     *          nviseleadershipds (String) 
     *          isuivileadershipds (String) 
     *          droitds (String) 
     *          contenudroitds (String) 
     *          devoirds (String) 
     *          contenudevoirds (String) 
     *          validationds (String)
     *          contenuvalidds (String)
     *          fonctionds (String) 
     *          nompreds (String) 
     *          fonctionds1 (String) 
     *          nompreds1 (String) 
     *          fonctionds2 (String) 
     *          nompreds2 (String) 
 

     *         
     *         
     * @Output: data : success message
     */
    public function editProfilposteds(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            // debug($data);die;

        }
        $id=$this->request->getQuery('id');
        $profilposteds=$this->Profilposteds->get($id);
         /* create profilposteds entity */
        
        if (1==1){
            $profilposteds->comptechds=$data->comptechds;  
            $profilposteds->contenucomptechds=$data->contenucomptechds;  
            $profilposteds->comporgands=$data->comporgands;  
            $profilposteds->gestempsds=$data->gestempsds;  
            $profilposteds->nvisegestempds=$data->nvisegestempds;  
            $profilposteds->isuivigestempds=$data->isuivigestempds;  
            $profilposteds->compcompords=$data->compcompords;  
            $profilposteds->comminterads=$data->comminterads;  
            $profilposteds->nvisecomminterads=$data->nvisecomminterads;  
            $profilposteds->isuivicomminterads=$data->isuivicomminterads;  
            $profilposteds->tracollds=$data->tracollds;
            $profilposteds->nvisetracollds=$data->nvisetracollds;  
            $profilposteds->isuivitracollds=$data->isuivitracollds;  
            $profilposteds->resprobds=$data->resprobds;  
            $profilposteds->nviseresprobds=$data->nviseresprobds;  
            $profilposteds->isuiviresprobds=$data->isuiviresprobds;  
            $profilposteds->servexcellds=$data->servexcellds; 
            $profilposteds->nviseservexcellds=$data->nviseservexcellds;  
            $profilposteds->isuiviservexcellds=$data->isuiviservexcellds;  
            $profilposteds->raisconcepds=$data->raisconcepds;  
            $profilposteds->nviseraisconcepds=$data->nviseraisconcepds;  
            $profilposteds->isuiviraisconcepds=$data->isuiviraisconcepds;  
            $profilposteds->leadershipds=$data->leadershipds;
            $profilposteds->nviseleadershipds=$data->nviseleadershipds;  
            $profilposteds->isuivileadershipds=$data->isuivileadershipds;  
            $profilposteds->droitds=$data->droitds; 
            $profilposteds->contenudroitds=$data->contenudroitds; 
            $profilposteds->devoirds=$data->devoirds; 
            $profilposteds->contenudevoirds=$data->contenudevoirds;   
            $profilposteds->validationds=$data->validationds;
            $profilposteds->contenuvalidds=$data->contenuvalidds;
            $profilposteds->fonctionds=$data->fonctionds;  
            $profilposteds->nompreds=$data->nompreds;  
            $profilposteds->fonctionds1=$data->fonctionds1;  
            $profilposteds->nompreds1=$data->nompreds1;  
            $profilposteds->fonctionds2=$data->fonctionds2;  
            $profilposteds->nompreds2=$data->nompreds2;   
            $this->Profilposteds->save($profilposteds); 
        }
       

         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
      * getProfilposteds
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getProfilposteds(){
 
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

        $profilposteds = $this->Profilposteds->find('all', [
            'conditions'=>[
                'id IS'=>$id,
            ],
           
        ])->first();
        // debug($profilposteds);die;
        
        if(empty($profilposteds)){
           throw new UnauthorizedException('Profilposteds not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $profilposteds,
           '_serialize' => ['success', 'data']
       ]);
    }
}
