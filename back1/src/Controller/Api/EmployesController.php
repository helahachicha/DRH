<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Employes Controller
 *
 * @property \App\Model\Table\EmployesTable $Employes
 * @method \App\Model\Entity\Employe[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployesController extends AppController
{
    /**
     * addEmploye
     *
     * @Input:
     *         data:
     *         
     * @Output: data : success message
     */
    public function addEmploye(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
             $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
          //  $data=$this->request->getData();

        }
         /* create employes entity */
        if (1==1){
            $employes = $this->Employes->newEmptyEntity();
            $employes->nomprenom=$data->nomprenom;  
            $employes->adresse=$data->adresse;  
            $employes->telprof=$data->telprof;  
            $employes->telpersonnel=$data->telpersonnel;  
            $employes->contact=$data->contact ;  
            $employes->mailprof=$data->mailprof ;  
            $employes->mailpersonnel=$data->mailpersonnel ;  
            $employes->servicetravail=$data->servicetravail;  
            $employes->poste_id=$data->poste_id ;  
            $employes->datenaissance=$data->datenaissance;  
            $employes->lieu=$data->lieu;  
            $employes->nationnalite=$data->nationnalite;  
            $employes->cin=$data->cin;  
            $employes->delivreea=$data->delivreea;  
            $employes->datedelivrance=$data->datedelivrance ;  
            $employes->permis=$data->permis; 
            $employes->datepermis=$data->datepermis ;  
            $employes->logement=$data->logement;  
            $employes->moytransport=$data->moytransport ;  
            $employes->estimatransport=$data->estimatransport;  
            $employes->etatsociale=$data->etatsociale; 
            $employes->dateetatsociale=$data->dateetatsociale;  
 
            $this->Employes->save($employes);

           // debug($employes);die;

        }

       
         /*send result */
         $this->set([
            'success' => true,
            'message' =>  " Added with success",
            '_serialize' => ['success', 'message']
        ]);
    
    }


     /***
    * getAllEmployeByCat
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllEmployeByCat()
    {
        $employes = $this->Employes->find('all', [
            'conditions'=>[
                'Employes.id IS'=>$id,
            ],
            'contain'=>[
                'Postes',
            ],
           
        ])->toArray();
          // debug($employes);die;

        if(empty($employes)){
            throw new UnauthorizedException('Employes not found');
        }

        /*send result */
        $this->set([
            'success' => true,
            'data' => $employes,
            '_serialize' => ['success', 'data']
        ]);
    }

   

    /**
      * deleteEmploye
      *
      * @Input: id
      *
      * @Output: data
      */

      public function deleteEmploye(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $employes = $this->Employes->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete employes  */

        if (1==1){
            $this->Employes->delete($employes);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }



    /**
    * getAllEmploye
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllEmploye()
    {

        /* search */
        $employes = $this->Employes->find('all',[
            'fields' => [
                'id',
                'nomprenom',
            ]
        ])->distinct()->toArray();
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $employes,
            '_serialize' => ['success', 'data']
        ]);
    }
}
