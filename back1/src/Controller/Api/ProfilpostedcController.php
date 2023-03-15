<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Profilpostedc Controller
 *
 * @method \App\Model\Entity\Profilpostedc[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfilpostedcController extends AppController
{
    /**
    * getAllProfilpostedc
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllProfilpostedc()
    {

        /* search */
        $profilpostedc = $this->Profilpostedc->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $profilpostedc,
            '_serialize' => ['success', 'data']
        ]);
    }


     /**
     * editProfilpostedc
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
    public function editProfilpostedc(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            // debug($data);die;

        }
        $id=$this->request->getQuery('id');
        $profilpostedc=$this->Profilpostedc->get($id);
         /* create profilpostedc entity */
        
        if (1==1){
            $profilpostedc->comptechdc=$data->comptechdc;  
            $profilpostedc->contenucomptechdc=$data->contenucomptechdc;  
            $profilpostedc->comporgandc=$data->comporgandc;  
            $profilpostedc->gestempsdc=$data->gestempsdc;  
            $profilpostedc->nvisegestempdc=$data->nvisegestempdc;  
            $profilpostedc->isuivigestempdc=$data->isuivigestempdc;  
            $profilpostedc->compcompordc=$data->compcompordc;  
            $profilpostedc->autonomiedc=$data->autonomiedc;  
            $profilpostedc->comminteradc=$data->comminteradc;  
            $profilpostedc->nvisecomminteradc=$data->nvisecomminteradc;  
            $profilpostedc->isuivicomminteradc=$data->isuivicomminteradc;
            $profilpostedc->tracolldc=$data->tracolldc;  
            $profilpostedc->nvisetracolldc=$data->nvisetracolldc;  
            $profilpostedc->isuivitracolldc=$data->isuivitracolldc;  
            $profilpostedc->resprobdc=$data->resprobdc;  
            $profilpostedc->nviseresprobdc=$data->nviseresprobdc;  
            $profilpostedc->isuiviresprobdc=$data->isuiviresprobdc; 
            $profilpostedc->servexcelldc=$data->servexcelldc;  
            $profilpostedc->nviseservexcelldc=$data->nviseservexcelldc;  
            $profilpostedc->isuiviservexcelldc=$data->isuiviservexcelldc;  
            $profilpostedc->raisconcepdc=$data->raisconcepdc;  
            $profilpostedc->nviseraisconcepdc=$data->nviseraisconcepdc;  
            $profilpostedc->isuiviraisconcepdc=$data->isuiviraisconcepdc;
            $profilpostedc->droitdc=$data->droitdc;  
            $profilpostedc->contenudroitdc=$data->contenudroitdc;  
            $profilpostedc->devoirdc=$data->devoirdc;  
            $profilpostedc->contenudevoirdc=$data->contenudevoirdc;  
            $profilpostedc->validationdc=$data->validationdc;
            $profilpostedc->contenuvaliddc=$data->contenuvaliddc;
            $profilpostedc->fonctiondc=$data->fonctiondc;  
            $profilpostedc->nompredc=$data->nompredc;  
            $profilpostedc->fonctiondc1=$data->fonctiondc1;  
            $profilpostedc->nompredc1=$data->nompredc1;  
            $profilpostedc->fonctiondc2=$data->fonctiondc2;  
            $profilpostedc->nompredc2=$data->nompredc2;   

            $this->Profilpostedc->save($profilpostedc); 
        }
       

         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
      * getProfilpostedc
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getProfilpostedc(){
 
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

        $profilpostedc = $this->Profilpostedc->find('all', [
            'conditions'=>[
                'id IS'=>$id,
            ],
           
        ])->first();
        // debug($profilpostedc);die;
        
        if(empty($profilpostedc)){
           throw new UnauthorizedException('Profilpostedc not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $profilpostedc,
           '_serialize' => ['success', 'data']
       ]);
    }
}
