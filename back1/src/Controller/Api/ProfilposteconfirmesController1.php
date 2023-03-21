<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Profilposteconfirmes Controller
 *
 * @method \App\Model\Entity\Profilposteconfirme[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfilposteconfirmesController extends AppController
{
    /**
    * getAllProfilposteconfirme
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllProfilposteconfirme()
    {

        /* search */
        $profilposteconfirmes = $this->Profilposteconfirmes->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $profilposteconfirmes,
            '_serialize' => ['success', 'data']
        ]);
    }


     /**
     * editProfilposteconfirme
     *
     * @Input:
     *         data:
     *          comptechdc (String) 
     *          contenucomptechdc (String) 
     *          comporgandc (String)
     *          gestempsdc (String) 
     *          nvisegestempdc (String) 
     *          isuivigestempdc (String) 
     *          compcompordc (String) 
     *      	autonomiedc (String) 
     *      	comminteradc (String) 
     *          nvisecomminteradc (String) 
     *          isuivicomminteradc (String) 
     *          tracolldc (String) 
     *          nvisetracolldc (String) 
     *          isuivitracolldc (String) 
     * 	        resprobdc (String) 
     *          nviseresprobdc (String) 
     *          isuiviresprobdc (String) 
     *          servexcelldc (String) 
     *          nviseservexcelldc (String) 
     *          isuiviservexcelldc (String) 
     *          raisconcepdc (String) 
     *          nviseraisconcepdc (String) 
     *          isuiviraisconcepdc (String) 
     *          droitdc (String) 
     *          contenudroitdc (String) 
     *          devoirdc (String) 
     *          contenudevoirdc (String) 
     *          validationdc (String)
     *          contenuvaliddc (String)
     *          fonctiondc (String) 
     *          nompredc (String) 
     *          fonctiondc1 (String) 
     *          nompredc1 (String) 
     *          fonctiondc2 (String) 
     *          nompredc2 (String) 
 

     *         
     *         
     * @Output: data : success message
     */
    public function editProfilposteconfirme(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            // debug($data);die;

        }
        $id=$this->request->getQuery('id');
        $profilposteconfirmes=$this->Profilposteconfirmes->get($id);
         /* create profilposteconfirmes entity */
        
        if (1==1){
            $profilposteconfirmes->comptechdc=$data->comptechdc;  
            $profilposteconfirmes->contenucomptechdc=$data->contenucomptechdc;  
            $profilposteconfirmes->comporgandc=$data->comporgandc;  
            $profilposteconfirmes->gestempsdc=$data->gestempsdc;  
            $profilposteconfirmes->nvisegestempdc=$data->nvisegestempdc;  
            $profilposteconfirmes->isuivigestempdc=$data->isuivigestempdc;  
            $profilposteconfirmes->compcompordc=$data->compcompordc;  
            $profilposteconfirmes->autonomiedc=$data->autonomiedc;  
            $profilposteconfirmes->comminteradc=$data->comminteradc;  
            $profilposteconfirmes->nvisecomminteradc=$data->nvisecomminteradc;  
            $profilposteconfirmes->isuivicomminteradc=$data->isuivicomminteradc;
            $profilposteconfirmes->tracolldc=$data->tracolldc;  
            $profilposteconfirmes->nvisetracolldc=$data->nvisetracolldc;  
            $profilposteconfirmes->isuivitracolldc=$data->isuivitracolldc;  
            $profilposteconfirmes->resprobdc=$data->resprobdc;  
            $profilposteconfirmes->nviseresprobdc=$data->nviseresprobdc;  
            $profilposteconfirmes->isuiviresprobdc=$data->isuiviresprobdc; 
            $profilposteconfirmes->servexcelldc=$data->servexcelldc;  
            $profilposteconfirmes->nviseservexcelldc=$data->nviseservexcelldc;  
            $profilposteconfirmes->isuiviservexcelldc=$data->isuiviservexcelldc;  
            $profilposteconfirmes->raisconcepdc=$data->raisconcepdc;  
            $profilposteconfirmes->nviseraisconcepdc=$data->nviseraisconcepdc;  
            $profilposteconfirmes->isuiviraisconcepdc=$data->isuiviraisconcepdc;
            $profilposteconfirmes->droitdc=$data->droitdc;  
            $profilposteconfirmes->contenudroitdc=$data->contenudroitdc;  
            $profilposteconfirmes->devoirdc=$data->devoirdc;  
            $profilposteconfirmes->contenudevoirdc=$data->contenudevoirdc;  
            $profilposteconfirmes->validationdc=$data->validationdc;
            $profilposteconfirmes->contenuvaliddc=$data->contenuvaliddc;
            $profilposteconfirmes->fonctiondc=$data->fonctiondc;  
            $profilposteconfirmes->nompredc=$data->nompredc;  
            $profilposteconfirmes->fonctiondc1=$data->fonctiondc1;  
            $profilposteconfirmes->nompredc1=$data->nompredc1;  
            $profilposteconfirmes->fonctiondc2=$data->fonctiondc2;  
            $profilposteconfirmes->nompredc2=$data->nompredc2;   

            $this->Profilposteconfirmes->save($profilposteconfirmes); 
        }
       

         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
      * getProfilposteconfirme
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getProfilposteconfirme(){
 
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

        $profilposteconfirmes = $this->Profilposteconfirmes->find('all', [
            'conditions'=>[
                'id IS'=>$id,
            ],
           
        ])->first();
        // debug($profilposteconfirmes);die;
        
        if(empty($profilposteconfirmes)){
           throw new UnauthorizedException('Profilposteconfirmes not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $profilposteconfirmes,
           '_serialize' => ['success', 'data']
       ]);
    }

    /**
      * deleteProfilposteconfirme
      *
      * @Input: id
      *
      * @Output: data
      */

      public function deleteProfilposteconfirme(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $profilposteconfirmes = $this->Profilposteconfirmes->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete profilposteconfirmes  */

        if (1==1){
            $this->Profilposteconfirmes->delete($profilposteconfirmes);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }
}
