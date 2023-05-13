<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Infoemployes Controller
 *
 * @property \App\Model\Table\InfoemployesTable $Infoemployes
 * @method \App\Model\Entity\Infoemploye[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InfoemployesController extends AppController
{
    /**
     * addInfoemploye
     *
     * @Input:
     *         data:
     *         
     * @Output: data : success message
     */
    public function addInfoemploye(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
             $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
          //  $data=$this->request->getData();

        }
         /* create infoemployes entity */
        if (1==1){
            $infoemployes = $this->Infoemployes->newEmptyEntity();
            $infoemployes->nomprenom=$data->nomprenom;  
            $infoemployes->adresse=$data->adresse;  
            $infoemployes->telprof=$data->telprof;  
            $infoemployes->telpersonnel=$data->telpersonnel;  
            $infoemployes->contact=$data->contact ;  
            $infoemployes->mailprof=$data->mailprof ;  
            $infoemployes->mailpersonnel=$data->mailpersonnel ;  
            $infoemployes->servicetravail=$data->servicetravail;  
            $infoemployes->poste_id=$data->poste_id ;  
            $infoemployes->datenaissance=$data->datenaissance;  
            $infoemployes->lieu=$data->lieu;  
            $infoemployes->nationnalite=$data->nationnalite;  
            $infoemployes->cin=$data->cin;  
            $infoemployes->delivreea=$data->delivreea;  
            $infoemployes->datedelivrance=$data->datedelivrance ;  
            $infoemployes->permis=$data->permis; 
            $infoemployes->datepermis=$data->datepermis ;  
            $infoemployes->logement=$data->logement;  
            $infoemployes->moytransport=$data->moytransport ;  
            $infoemployes->estimatransport=$data->estimatransport;  
            $infoemployes->etatsociale=$data->etatsociale; 
            $infoemployes->dateetatsociale=$data->dateetatsociale;  
 
            $this->Infoemployes->save($infoemployes);

           // debug($infoemployes);die;

        }

       
         /*send result */
         $this->set([
            'success' => true,
            'message' =>  " Added with success",
            '_serialize' => ['success', 'message']
        ]);
    
    }



    /**
     * editInfoemploye
     *
     * @Input:
     *         data:
     *         
     * @Output: data : success message
     */
    public function editInfoemploye(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            // debug($data);die;

        }
        $id=$this->request->getQuery('id');
        $infoemployes=$this->Infoemployes->get($id);
         /* create infoemployes entity */
        
        if (1==1){
            $infoemployes->nomprenom=$data->nomprenom;  
            $infoemployes->adresse=$data->adresse;  
            $infoemployes->telprof=$data->telprof;  
            $infoemployes->telpersonnel=$data->telpersonnel;  
            $infoemployes->contact=$data->contact ;  
            $infoemployes->mailprof=$data->mailprof ;  
            $infoemployes->mailpersonnel=$data->mailpersonnel ;  
            $infoemployes->servicetravail=$data->servicetravail;  
            $infoemployes->poste_id=$data->poste_id ;  
            $infoemployes->datenaissance=$data->datenaissance;  
            $infoemployes->lieu=$data->lieu;  
            $infoemployes->nationnalite=$data->nationnalite;  
            $infoemployes->cin=$data->cin;  
            $infoemployes->delivreea=$data->delivreea;  
            $infoemployes->datedelivrance=$data->datedelivrance ;  
            $infoemployes->permis=$data->permis; 
            $infoemployes->datepermis=$data->datepermis ;  
            $infoemployes->logement=$data->logement;  
            $infoemployes->moytransport=$data->moytransport ;  
            $infoemployes->estimatransport=$data->estimatransport;  
            $infoemployes->etatsociale=$data->etatsociale; 
            $infoemployes->dateetatsociale=$data->dateetatsociale;    
            $this->Infoemployes->save($infoemployes);
                    
            }

         /*send result */
        $this->set([
            'success' => true,
            'message' =>  $infoemployes,
            '_serialize' => ['success', 'message']
        ]);
    
    }



    /**
      * getInfoemploye
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getInfoemployeById(){
 
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
        $infoemployes = $this->Infoemployes->find('all', [
            'conditions'=>[
                'Infoemployes.id IS'=>$id,
            ],
            'contain'=>[
                'Postes',
            ],
           
        ])->first();
          // debug($infoemployes);die;

        if(empty($infoemployes)){
            throw new UnauthorizedException('Infoemployes not found');
        }

        /*send result */
        $this->set([
            'success' => true,
            'data' => $infoemployes,
            '_serialize' => ['success', 'data']
        ]);
    }

   

    /**
      * deleteInfoemploye
      *
      * @Input: id
      *
      * @Output: data
      */

      public function deleteInfoemploye(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $infoemployes = $this->Infoemployes->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete infoemployes  */

        if (1==1){
            $this->Infoemployes->delete($infoemployes);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }



    /**
    * getAllInfoemploye
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllInfoemploye()
    {

        /* search */
        $infoemployes = $this->Infoemployes->find('all',[
            'fields' => [
                'id',
                'nomprenom',
            ]
        ])->distinct()->toArray();
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $infoemployes,
            '_serialize' => ['success', 'data']
        ]);
    }
}
