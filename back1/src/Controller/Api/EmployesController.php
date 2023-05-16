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
    * getAllEmployeByCat
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllEmployeByCat()
    {
        $employes = $this->Employes->find('all', [

            'contain' => [
                'Infoemployes','Categories','Matrices.Matricecompetences','Polycompetences'
            ],
        ])->distinct();

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




    public function calculpointIndic()
    {
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry = $this->request->getData();
            $data = json_decode($querry['data']);
        }

        /* create employes entity */
        if (1 == 1) {
            $existingEmployee = $this->Employes->find()
                ->where(['infoemploye_id' => $data->infoemploye_id])
                ->first();

            if ($existingEmployee) {
                $savedEmployes = $existingEmployee;
            } else {
                $employes = $this->Employes->newEmptyEntity();
                $employes->infoemploye_id = $data->infoemploye_id;
                $employes->categorie_id = $data->categorie_id;
                $employes->objetevaluation = $data->objetevaluation;
                $employes->dateevaluation = $data->dateevaluation;
                $employes->decisiondirection = $data->decisiondirection;
                $savedEmployes = $this->Employes->save($employes);
            }

            foreach ($data->point as $points) {
                /* create Pointindicateurs entity */
                $this->loadModel('Pointindicateurs');
                $pointindicateurs = $this->Pointindicateurs->newEmptyEntity();
                $pointindicateurs->label = $points->value;
                $pointindicateurs->indicateursuivi_id = $points->indicateurId;
                $pointindicateurs->employe_id = $savedEmployes->id;
                $this->Pointindicateurs->save($pointindicateurs);

            }

            /* create Scorecompetences entity */
            $this->loadModel('Scorecompetences');
            $scorecompetences = $this->Scorecompetences->newEmptyEntity();
            $scorecompetences->score = $data->moyen; // Assuming the 'moyen' property exists in $data
            $scorecompetences->competence_id = $points->compId;
            $scorecompetences->employe_id = $savedEmployes->id;
            $this->Scorecompetences->save($scorecompetences);

            $this->loadModel('Matricecompetences');
            foreach ($data->Matricecompetences as $matricecompetences) {
                /* create Matrices entity */
                $this->loadModel('Matrices');
                $matrices = $this->Matrices->newEmptyEntity();
                $matrices->note = "Ne";
                $matrices->employe_id = $savedEmployes->id;
                $matrices->matricecompetence_id = $matricecompetences->id; // Assuming the ID is present in $matricecompetences
                $this->Matrices->save($matrices);
            }



        }

        /* send result */
        $this->set([
            'success' => true,
            'data' => "added with success",
            '_serialize' => ['success', 'data']
        ]);
    }

        



     public function calculpointIndicSou(){

        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']);
        }

        /* create employes entity */
        if (1==1){
            $existingEmployee = $this->Employes->find()
            ->where(['infoemploye_id' => $data->infoemploye_id])
            ->first();

        if ($existingEmployee) {
            $savedEmployes = $existingEmployee;
        } else {
            $employes = $this->Employes->newEmptyEntity();
            $employes->infoemploye_id = $data->infoemploye_id;
            $employes->categorie_id = $data->categorie_id;
            $employes->objetevaluation = $data->objetevaluation;
            $employes->dateevaluation = $data->dateevaluation;
            $employes->decisiondirection = $data->decisiondirection;
            $savedEmployes = $this->Employes->save($employes);
        }

            foreach ($data->point as $pointsoucomp) {
              /* create  Pointindicasous entity */
              $this->loadModel('Pointindicasous');
              $pointindicsous = $this->Pointindicasous->newEmptyEntity();
              $pointindicsous->label=$pointsoucomp->value;
              $pointindicsous->indicasoucompa_id=$pointsoucomp->indicateurSouId ;
              $pointindicsous->employe_id=$savedEmployes->id;
              $this->Pointindicasous->save($pointindicsous);

            }

            /* create Scoresouscomps entity */
            $this->loadModel('Scoresouscomps');
            $Scoresouscomps = $this->Scoresouscomps->newEmptyEntity();
            $Scoresouscomps->score = $data->score; // Assuming the 'moyen' property exists in $data
            $Scoresouscomps->souscompetence_id = $pointsoucomp->SoucompetenceId;
            $Scoresouscomps->employe_id = $savedEmployes->id;
            $this->Scoresouscomps->save($Scoresouscomps);
        }


         /*send result */
         $this->set([
            'success' => true,
            'data' => "added with success",
            '_serialize' => ['success','data']
        ]);

    }


         /***Liste des employes qui ont des fiches d'évaluation */
         public function getAllEmploye()
        {
            /* search */
            $employes = $this->Employes->find('all', [
                'fiels' => [
                    'id',
                ],
                'contain' => [
                    'Infoemployes',
                ],
            ])->distinct()->toArray();

            // Extract the "nomprenom" property from each employee
            $data = array_map(function ($employe) {
                return [
                    'id' => $employe->id,
                    'nomprenom' => $employe->infoemploye->nomprenom
                ];
            }, $employes);

            /* send result */
            $this->set([
                'success' => true,
                'data' => $data,
                '_serialize' => ['success', 'data']
            ]);
        }


        /*For chart*/
        public function employeForChart()
        {
            /* search */
            $employes = $this->Employes->find('all', [
                'contain' => [
                    'Infoemployes',
                ],
            ])->distinct()->toArray();

            // Extract the "nomprenom" property from each employee
            $data = array_map(function ($employe) {
                return [
                    'nomprenom' => $employe->infoemploye->nomprenom
                ];
            }, $employes);

            $nomprenomList = [];
            foreach ($data as $nom) {
                $nomprenomList[] = $nom['nomprenom'];
            }

            /* send result */
            $this->set([
                'success' => true,
                'data' => $nomprenomList,
                '_serialize' => ['success', 'data']
            ]);
        }








        /*get la fiche d'évaluation de l'employe avec les points des indicateurs et les scores 
        des compétences et les souscompétences */

        public function getficheevalByEmp(){
            $id = $this->request->getQuery('id');
    
            /* search */
            if (1 == 1) {
                if (!isset($id) or empty($id) or $id == null) {
                    throw new UnauthorizedException('Id is Required');
                }
    
                if (!is_numeric($id)) {
                    throw new UnauthorizedException('Id is not Valid');
                }
            }
    
           $employes = $this->Employes->find('all', [
    
            'conditions'=> [
                'Employes.id' => $id
            ],
            'contain' => [
                'Infoemployes','Categories',
                'Categories.Detailprofilpostes.Formcompetences.Competences.Scorecompetences'
                =>['conditions'=> [
                    'employe_id' => $id
                ]],
                'Categories.Detailprofilpostes.Formcompetences.Indicateursuivis.Pointindicateurs'
                =>['conditions'=> [
                    'employe_id' => $id
                ]],
                'Categories.Detailprofilpostes.Formcompetences.Souscompetences.Scoresouscomps'
                =>['conditions'=> [
                    'employe_id' => $id
                ]],
                'Categories.Detailprofilpostes.Formcompetences.Souscompetences.Indicasoucompas.Pointindicasous'
                =>['conditions'=> ['employe_id' => $id]],
            ],
            ])->toArray();

            /* send result */
            $this->set([
                'success' => true,
                'data' => $employes,
                '_serialize' => ['success', 'data']
            ]);
        }














}
