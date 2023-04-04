<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Profilpostes Controller
 *
 * @method \App\Model\Entity\Profilposte[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfilpostesController extends AppController
{
    /**
     * addProfilposte
     *
     * @Input:
     *         data:
     *          nom (String) *Required
     *          poste_id (Int) *Required
     *         
     * @Output: data : success message
     */
    public function addProfilposte(){
        $this->loadModel('Detailprofilpostes');
        $this->loadModel('Indicateursuivis');

        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
       

        }
         /* create profilpostes entity */
        if (1==1){
            $profilpostes = $this->Profilpostes->newEmptyEntity();
            $profilpostes->nom=$data->nom;
           // $profilpostes->poste_id=$data->poste_id;
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
            $detailprofilpostes->competence_id=$data->competence_id;  
            $detailprofilpostes->soucompetence=$data->soucompetence;  
            $detailprofilpostes->niveauvise_id=$data->niveauvise_id;  
            $detailprofilpostes->fonctionelaboration=$data->fonctionelaboration;  
            $detailprofilpostes->fonctionverification=$data->fonctionverification;  
            $detailprofilpostes->fonctionabrobation=$data->fonctionabrobation;  
            $detailprofilpostes->nomprenomelab=$data->nomprenomelab;  
            $detailprofilpostes->nomprenomverif=$data->nomprenomverif;  
            $detailprofilpostes->nomprenomabrob=$data->nomprenomabrob; 
            
           $this->Detailprofilpostes->save($detailprofilpostes); 
      
        }

        /* create Indicateursuivis entity */
            if (1==1){
                foreach ($data->IndicateurArray as $indicateur) {
      
                    $indicateurs = $this->Indicateursuivis->newEmptyEntity();
                    $indicateurs->label=$indicateur->label;
                    $indicateurs->competence_id=$data->competence_id;
                    $savedProfil=$this->Indicateursuivis->save($indicateurs);
                }
               
        }
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

     /**
     * editProfilposte
     *
     * @Input:
     *         data:
     *          nom (String) *Required
     *          poste_id (Int) *Required
     * 
     * @Output: data : success message
     */
    public function editProfilposte(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $profilpostes=$this->Profilpostes->get($id);
         /* create profilpostes entity */
        if (1==1){
            $profilpostes->nom=$data->nom;
            $profilpostes->poste_id=$data->poste_id;    
            $profilpostes->categorie=$data->categorie; 

            $this->Profilpostes->save($profilpostes); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

    

    /**
    * getAllProfilposte
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllProfilposte()
    {

        /* search */
        $profilpostes = $this->Profilpostes->find('all',[
            'contain' => [
                'Postes'
                ]
        ]);
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $profilpostes,
            '_serialize' => ['success', 'data']
        ]);
    }


    /**
      * getProfilposte
      *
      * @Input: id
      *
      * @Output: data
      */
     public function getProfilposte(){
 
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
 
         $Profilpostes = $this->Profilpostes->find('all', [
             'conditions'=>[
                 'id IS'=>$id,
             ],
            
         ])->first();
         // debug($Profilpostes);die;
         
         if(empty($Profilpostes)){
            throw new UnauthorizedException('Profilpostes not found');
        }

        /*send result */

        $this->set([
            'success' => true,
            'data' => $Profilpostes,
            '_serialize' => ['success', 'data']
        ]);
     }

     /**
      * deleteProfilposte
      *
      * @Input: id
      *
      * @Output: data
      */

     public function deleteProfilposte(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $profilpostes = $this->Profilpostes->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete profilpostes  */

        if (1==1){
            $this->Profilpostes->delete($profilpostes);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }
}
