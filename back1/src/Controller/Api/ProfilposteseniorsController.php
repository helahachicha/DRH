<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Profilposteseniors Controller
 *
 * @method \App\Model\Entity\Profilpostesenior[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfilposteseniorsController extends AppController
{
   /**
    * getAllProfilpostesenior
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllProfilpostesenior()
    {

        /* search */
        $profilposteseniors = $this->Profilposteseniors->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $profilposteseniors,
            '_serialize' => ['success', 'data']
        ]);
    }


     /**
     * editProfilpostesenior
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
    public function editProfilpostesenior(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            // debug($data);die;

        }
        $id=$this->request->getQuery('id');
        $profilposteseniors=$this->Profilposteseniors->get($id);
         /* create profilposteseniors entity */
        
        if (1==1){
            $profilposteseniors->comptechds=$data->comptechds;  
            $profilposteseniors->contenucomptechds=$data->contenucomptechds;  
            $profilposteseniors->comporgands=$data->comporgands;  
            $profilposteseniors->gestempsds=$data->gestempsds;  
            $profilposteseniors->nvisegestempds=$data->nvisegestempds;  
            $profilposteseniors->isuivigestempds=$data->isuivigestempds;  
            $profilposteseniors->compcompords=$data->compcompords;  
            $profilposteseniors->comminterads=$data->comminterads;  
            $profilposteseniors->nvisecomminterads=$data->nvisecomminterads;  
            $profilposteseniors->isuivicomminterads=$data->isuivicomminterads;  
            $profilposteseniors->tracollds=$data->tracollds;
            $profilposteseniors->nvisetracollds=$data->nvisetracollds;  
            $profilposteseniors->isuivitracollds=$data->isuivitracollds;  
            $profilposteseniors->resprobds=$data->resprobds;  
            $profilposteseniors->nviseresprobds=$data->nviseresprobds;  
            $profilposteseniors->isuiviresprobds=$data->isuiviresprobds;  
            $profilposteseniors->servexcellds=$data->servexcellds; 
            $profilposteseniors->nviseservexcellds=$data->nviseservexcellds;  
            $profilposteseniors->isuiviservexcellds=$data->isuiviservexcellds;  
            $profilposteseniors->raisconcepds=$data->raisconcepds;  
            $profilposteseniors->nviseraisconcepds=$data->nviseraisconcepds;  
            $profilposteseniors->isuiviraisconcepds=$data->isuiviraisconcepds;  
            $profilposteseniors->leadershipds=$data->leadershipds;
            $profilposteseniors->nviseleadershipds=$data->nviseleadershipds;  
            $profilposteseniors->isuivileadershipds=$data->isuivileadershipds;  
            $profilposteseniors->droitds=$data->droitds; 
            $profilposteseniors->contenudroitds=$data->contenudroitds; 
            $profilposteseniors->devoirds=$data->devoirds; 
            $profilposteseniors->contenudevoirds=$data->contenudevoirds;   
            $profilposteseniors->validationds=$data->validationds;
            $profilposteseniors->contenuvalidds=$data->contenuvalidds;
            $profilposteseniors->fonctionds=$data->fonctionds;  
            $profilposteseniors->nompreds=$data->nompreds;  
            $profilposteseniors->fonctionds1=$data->fonctionds1;  
            $profilposteseniors->nompreds1=$data->nompreds1;  
            $profilposteseniors->fonctionds2=$data->fonctionds2;  
            $profilposteseniors->nompreds2=$data->nompreds2;   
            $this->Profilposteseniors->save($profilposteseniors); 
        }
       

         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
      * getProfilpostesenior
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getProfilpostesenior(){
 
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

        $profilposteseniors = $this->Profilposteseniors->find('all', [
            'conditions'=>[
                'id IS'=>$id,
            ],
           
        ])->first();
        // debug($profilposteseniors);die;
        
        if(empty($profilposteseniors)){
           throw new UnauthorizedException('Profilposteseniors not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $profilposteseniors,
           '_serialize' => ['success', 'data']
       ]);
    }
}
