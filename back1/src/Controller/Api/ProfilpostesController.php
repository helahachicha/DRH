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



        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']);
            //$data=$this->request->getData();


        }

        /* create categories entity */
        if (isset($data->profilposte_id)) {
            $this->loadModel('Categories');
            $categories = $this->Categories->newEmptyEntity();
            $categories->label=$data->label;
            $categories->profilposte_id=$data->profilposte_id;
            $savedCat=$this->Categories->save($categories);

        }
        $this->loadModel('Detailprofilpostes');

           /* create detailprofilpostes entity */
           if (isset($data->profilposte_id)) {
            $detailprofilpostes = $this->Detailprofilpostes->newEmptyEntity();
            $detailprofilpostes->profilposte_id=$data->profilposte_id;
            $detailprofilpostes->fonction=$data->fonction;
            $detailprofilpostes->categorie_id=$savedCat->id;
            $detailprofilpostes->superhierar=$data->superhierar;
            $detailprofilpostes->supervision=$data->supervision;
            $detailprofilpostes->interim=$data->interim;
            $detailprofilpostes->fonctionelaboration=$data->fonctionelaboration;
            $detailprofilpostes->fonctionverification=$data->fonctionverification;
            $detailprofilpostes->fonctionabrobation=$data->fonctionabrobation;
            $detailprofilpostes->nomprenomelab=$data->nomprenomelab;
            $detailprofilpostes->nomprenomverif=$data->nomprenomverif;
            $detailprofilpostes->nomprenomabrob=$data->nomprenomabrob;

           $savedProfilPoste=$this->Detailprofilpostes->save($detailprofilpostes);

        }



        /* create formcompetences entity ***********/
           if(1==1){
            $this->loadModel('Formcompetences');

            foreach ($data->Formcompetence as $formcomp) {
                $idComp = $formcomp->competence_id;
                $idNiveau = $formcomp->niveauvise_id;
    
                $comp = $this->Formcompetences->newEmptyEntity();
                $comp->competence_id = $idComp;
    
                if (isset($savedProfilPoste->id)) {
                    $comp->detailprofilposte_id = $savedProfilPoste->id;
                    $savedFormcomp = $this->Formcompetences->save($comp);
                }
                $savedFormcomp = $this->Formcompetences->save($comp);


                    $this->loadModel('Indicateursuivis');
                    /* create Indicateursuivis entity */
                    foreach ($formcomp->indicateur  as $indic)
                    {
                      //debug($formcomp->niveauvise_id);die;
                       $indicateurs = $this->Indicateursuivis->newEmptyEntity();
                       
                       $indicateurs->niveauvise_id= $idNiveau;
                        $indicateurs->label=$indic->label;
                        if (isset($savedFormcomp->id)) {
                            $indicateurs->formcompetence_id= $savedFormcomp->id ;
                            $savedIndicateur=$this->Indicateursuivis->save($indicateurs);
                        }
                        $savedIndicateur=$this->Indicateursuivis->save($indicateurs);


                   }
                   $this->loadModel('Souscompetences');

                   /* create Souscompetences entity */

                            foreach ($formcomp->Souscompetence  as $soucomp) {
                             // debug($formcomp);
                                $idComp=$formcomp->competence_id;
                               $soucompetences = $this->Souscompetences->newEmptyEntity();
                               $soucompetences->label=$soucomp->label;
                               $soucompetences->formcompetence_id= $indicateurs->formcompetence_id;
                            //   $soucompetences->detailprofilposte_id= $savedProfilPoste->id;

                               $savedSouscompetence=$this->Souscompetences->save($soucompetences);

                               $this->loadModel('Indicasoucompas');

                               foreach ($soucomp->indicateurSoucomp as $indisou) {

                               $indicasoucompas = $this->Indicasoucompas->newEmptyEntity();
                               $indicasoucompas->label= $indisou->label;
                               if (isset($savedSouscompetence->id)) {
                                $indicasoucompas->souscompetence_id=$savedSouscompetence->id;
                                $savedIndicaSouccomp=$this->Indicasoucompas->save($indicasoucompas);
                            }
                            $savedIndicaSouccomp=$this->Indicasoucompas->save($indicasoucompas);

                              // debug($savedIndicaSouccomp);


                            }


                           }
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
