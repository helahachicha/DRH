<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Profilposteconfirmes Controller
 *
 * @property \App\Model\Table\ProfilposteconfirmesTable $Profilposteconfirmes
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
     *          contenucomptechdc (String) 
     *          nvisegestempdc (String) 
     *          isuivigestempdc (String) 
     *          nvisecomminteradc (String) 
     *          isuivicomminteradc (String) 
     *          nvisetracolldc (String) 
     *          isuivitracolldc (String) 
     *          nviseresprobdc (String) 
     *          isuiviresprobdc (String) 
     *          nviseservexcelldc (String) 
     *          isuiviservexcelldc (String) 
     *          nviseraisconcepdc (String) 
     *          isuiviraisconcepdc (String) 
 

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
            $profilposteconfirmes->contenucomptechdc=$data->contenucomptechdc;  
            $profilposteconfirmes->nvisegestempdc=$data->nvisegestempdc;  
            $profilposteconfirmes->isuivigestempdc=$data->isuivigestempdc;  
            $profilposteconfirmes->nvisecomminteradc=$data->nvisecomminteradc;  
            $profilposteconfirmes->isuivicomminteradc=$data->isuivicomminteradc;  
            $profilposteconfirmes->nvisetracolldc=$data->nvisetracolldc;  
            $profilposteconfirmes->isuivitracolldc=$data->isuivitracolldc;  
            $profilposteconfirmes->nviseresprobdc=$data->nviseresprobdc;  
            $profilposteconfirmes->isuiviresprobdc=$data->isuiviresprobdc; 
            $profilposteconfirmes->nviseservexcelldc=$data->nviseservexcelldc;  
            $profilposteconfirmes->isuiviservexcelldc=$data->isuiviservexcelldc;  
            $profilposteconfirmes->nviseraisconcepdc=$data->nviseraisconcepdc;  
            $profilposteconfirmes->isuiviraisconcepdc=$data->isuiviraisconcepdc;
 

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
