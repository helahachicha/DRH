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
     *          label (String) *Required
     *         
     * @Output: data : success message
     */
    public function addDepartement(){
        $this->loadModel('Postes');
        $this->loadModel('Profilpostes');
        $this->loadModel('Categories');
        $this->loadModel('Detailprofilpostes');
        $this->loadModel('Competences');
        $this->loadModel('Souscompetences');
        $this->loadModel('Niveauvises');
        $this->loadModel('Indicateursuivis');
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create departements entity */
         if (1==1){
            $departements = $this->Departements->newEmptyEntity();
            $departements->label=$data->label;
            $savedProfil=$this->Departements->save($departements);
        }
         /* create postes entity */
         if (1==1){
            $postes = $this->Postes->newEmptyEntity();
            $postes->label=$data->label;
            $postes->departement_id=$data->departement_id;
            $savedProfil=$this->Postes->save($postes);
        }
         /* create profilpostes entity */
        if (1==1){
            $profilpostes = $this->Profilpostes->newEmptyEntity();
            $profilpostes->nom=$data->nom;
            $profilpostes->poste_id=$data->poste_id;
            $savedProfil=$this->Profilpostes->save($profilpostes);
        }
        /* create categories entity */
        if (1==1){
            $categories = $this->Categories->newEmptyEntity();
            $categories->label=$data->label;
            $categories->profilposte_id=$data->profilposte_id;
            $savedProfil=$this->Categories->save($categories);
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
        /* create competences entity */
        if (1==1){
            $competences = $this->Competences->newEmptyEntity();
            $competences->label=$data->label;
            $competences->categorie_id=$data->categorie_id;
            $savedProfil=$this->Competences->save($competences);
        }
        /* create souscompetences entity */
        if (1==1){
            $souscompetences = $this->Souscompetences->newEmptyEntity();
            $souscompetences->label=$data->label;
            $souscompetences->competence_id=$data->competence_id;
            $savedProfil=$this->Souscompetences->save($souscompetences);
        }
        /* create niveauvises entity */
        if (1==1){
            $niveauvises = $this->Niveauvises->newEmptyEntity();
            $niveauvises->label=$data->label;
            $niveauvises->categorie_id=$data->categorie_id;
            $savedProfil=$this->Niveauvises->save($niveauvises);
        }
        /* create indicateursuivis entity */
        if (1==1){
            $indicateursuivis = $this->Indicateursuivis->newEmptyEntity();
            $indicateursuivis->label=$data->label;
            $indicateursuivis->souscompetence_id=$data->souscompetence_id;
            $savedProfil=$this->Indicateursuivis->save($indicateursuivis);
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
