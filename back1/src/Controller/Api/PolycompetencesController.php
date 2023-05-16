<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Polycompetences Controller
 *
 * @property \App\Model\Table\PolycompetencesTable $Polycompetences
 * @method \App\Model\Entity\Polycompetence[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PolycompetencesController extends AppController
{


    public function calculPolycompetence(){
        $this->loadModel('Employes');
        $id = $this->request->getQuery('id');
        $employes = $this->Employes->find('all', [
            'conditions'=>[
                'id IS'=>$id,
            ],
            'contain'=>[
                'Matrices',
            ],
        ])->first(); 
        $MatricecompCounts = count($employes->matrices);

        $resultAplusCount = 0;
        $resultACount = 0;
        $resultBCount = 0;
        $resultCCount = 0;
        $resultDCount = 0;
        $resultNeCount = 0;
        foreach ($employes->matrices as $count ) {
            switch ($count->note) {
                case 'A+':
                    $resultAplusCount++;
                    break;
                case 'A':
                    $resultACount++;
                    break;
                case 'B':
                    $resultBCount++;
                    break;
                case 'C':
                    $resultCCount++;
                    break;
                case 'D':
                    $resultDCount++;
                    break;
                case 'Ne':
                    $resultNeCount++;
                    break;
            }
        }

        $score = ($resultAplusCount * 100) + ($resultACount * 75) + ($resultBCount * 50) +
                ($resultCCount * 25) + ($resultDCount * 10) ;
        $Polycompetence =$score/ $MatricecompCounts;       

        
        $employes = $this->Employes->get($id);
        // Vérifier si une polycompetence existe déjà pour cette matrice de compétences
        $polycompetence = $this->Polycompetences->find()
            ->where(['employe_id' => $id])
            ->first();
        if ($polycompetence) {
            // Mettre à jour la valeur de la polycompetence existante
            $polycompetence->valeur = $Polycompetence;
        } else {
            // Créer une nouvelle entité de polycompetence et l'enregistrer pour cette matrice de compétences
            $polycompetence = $this->Polycompetences->newEntity([
                'valeur' => $Polycompetence,
                'employe_id' => $id
            ]);
        }
        // Enregistrer la polycompetence
        $this->Polycompetences->save($polycompetence);


        $get = $this->Polycompetences->find('all', [
            'conditions'=>[
                'Polycompetences.id IS'=>$id,
            ],
        ])->first(); 
        

        /*send result */
        $this->set([
            'success' => true,
            'data' => $employes,
            'count' => $MatricecompCounts,
            'Aplus' => $resultAplusCount,
            'A' => $resultACount,
            'B' => $resultBCount,
            'C' => $resultCCount,
            'D' => $resultDCount,
            'Ne' => $resultNeCount,
            'score' => $score,
            'Polycompetence' => $Polycompetence,
            'Get' => $get,
            '_serialize' => ['success', 'data', 'count', 'Aplus', 'A', 'B', 'C', 'D', 'Ne', 'score',
            'Polycompetence', 'Get']
        ]);
    }












    public function calculTotalcomp()
    {
        /* search */
        $polycompetences = $this->Polycompetences->find('all', [
            'fields'=>[
                'valeur',
            ],
        ])->toArray();
        $total=0;
        /* calcul total polyvalence */
        $total=array_sum(array_column($polycompetences, 'valeur'))/count($polycompetences);

        $this->loadModel('Totalpolycompetences');
        /* check if Totalpolyvalences record exists */
        $totalpolycompetences = $this->Totalpolycompetences->find('all')->first();

        if ($totalpolycompetences) {
            /* if record exists, update its valeur attribute with the new total */
            $totalpolycompetences->valeur = $total;
            $success = $this->Totalpolycompetences->save($totalpolycompetences);
        } else {
            /* if record does not exist, create a new record with the new total */
            $totalpolycompetences = $this->Totalpolycompetences->newEntity(['valeur' => $total]);
            $success = $this->Totalpolycompetences->save($totalpolycompetences);
        }


        /*send result */
        $this->set([
            'success' => true,
            'data' => $polycompetences,
            'total' => $totalpolycompetences,
            '_serialize' => ['success', 'data', 'total']
        ]);
    }


    /*For chart*/
    public function getAllPolycompetence()
     {
         /* search */
         $polycompetences = $this->Polycompetences->find('all', [
             'fields' => [
                 'valeur',
             ],
             
         ])->toArray();
     
         $valeurs = \Cake\Utility\Hash::extract($polycompetences, '{n}.valeur');
     
         /* send result */
         $this->set([
             'success' => true,
             'data' => $valeurs,
             '_serialize' => ['success', 'data']
         ]);
     }
}
