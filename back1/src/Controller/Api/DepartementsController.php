<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Departements Controller
 *
 * @method \App\Model\Entity\Departement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DepartementsController extends AppController
{

    /**
     * addDepartement
     *
     * @Input:
     *         data:
     *          nom (String) *Required
     *          poste_id (Int) *Required
     *         
     * @Output: data : success message
     */
    public function addDepartement(){
        $this->loadModel('Detailprofilpostes');
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create profilpostes entity */
        if (1==1){
            $profilpostes = $this->Profilpostes->newEmptyEntity();
            $profilpostes->nom=$data->nom;
            $profilpostes->poste_id=$data->poste_id;
            $savedProfil=$this->Profilpostes->save($profilpostes);
        }
           /* create detailprofilpostes entity */
           if(1==1){
            $detailprofilpostes = $this->Detailprofilpostes->newEmptyEntity();

            $detailprofilpostes->fonction=$data->fonction;  
            $detailprofilpostes->categorie_id=$data->categorie_id;  
            $detailprofilpostes->superhierar=$data->superhierar;  
            $detailprofilpostes->supervision=$data->supervision;  
            $detailprofilpostes->interim=$data->interim;   
            $detailprofilpostes->fonctionelaboration=$data->fonctionelaboration;  
            $detailprofilpostes->fonctionverification=$data->fonctionverification;  
            $detailprofilpostes->fonctionabrobation=$data->fonctionabrobation;  
            $detailprofilpostes->nomprenomelab=$data->nomprenomelab;  
            $detailprofilpostes->nomprenomverif=$data->nomprenomverif;  
            $detailprofilpostes->nomprenomabrob=$data->nomprenomabrob; 
            
            $this->Detailprofilpostes->save($detailprofilpostes); 
      
        }
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }







    /**
    * getAllDepartement
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllDepartement()
    {

        /* search */
        $departements = $this->Departements->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $departements,
            '_serialize' => ['success', 'data']
        ]);
    }
}
