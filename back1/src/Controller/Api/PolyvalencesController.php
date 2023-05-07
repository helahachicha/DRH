<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Polyvalences Controller
 *
 * @property \App\Model\Table\PolyvalencesTable $Polyvalences
 * @method \App\Model\Entity\Polyvalence[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PolyvalencesController extends AppController
{
   
    public function calculPolyvalence(){
        $this->loadModel('Matricecompetences');
        $id = $this->request->getQuery('id');
        $matricecompetences = $this->Matricecompetences->find('all', [
            'conditions'=>[
                'id IS'=>$id,
            ],
            'contain'=>[
                'Matrices',
            ],
        ])->first(); 
        $MatricecompCounts = count($matricecompetences->matrices);

        $resultAplusCount = 0;
        $resultACount = 0;
        $resultBCount = 0;
        $resultCCount = 0;
        $resultDCount = 0;
        $resultNeCount = 0;
        foreach ($matricecompetences->matrices as $count ) {
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
        $Polyvalence =$score/ $MatricecompCounts;       

        
        $matricecompetences = $this->Matricecompetences->get($id);
        // Vérifier si une polyvalence existe déjà pour cette matrice de compétences
        $polyvalence = $this->Polyvalences->find()
            ->where(['matricecompetence_id' => $id])
            ->first();
        if ($polyvalence) {
            // Mettre à jour la valeur de la polyvalence existante
            $polyvalence->valeur = $Polyvalence;
        } else {
            // Créer une nouvelle entité de polyvalence et l'enregistrer pour cette matrice de compétences
            $polyvalence = $this->Polyvalences->newEntity([
                'valeur' => $Polyvalence,
                'matricecompetence_id' => $id
            ]);
        }
        // Enregistrer la polyvalence
        $this->Polyvalences->save($polyvalence);


        $get = $this->Polyvalences->find('all', [
            'conditions'=>[
                'Polyvalences.id IS'=>$id,
            ],
        ])->first(); 
        

        /*send result */
        $this->set([
            'success' => true,
            'data' => $matricecompetences,
            'count' => $MatricecompCounts,
            'Aplus' => $resultAplusCount,
            'A' => $resultACount,
            'B' => $resultBCount,
            'C' => $resultCCount,
            'D' => $resultDCount,
            'Ne' => $resultNeCount,
            'score' => $score,
            'Polyvalence' => $Polyvalence,
            'Get' => $get,
            '_serialize' => ['success', 'data', 'count', 'Aplus', 'A', 'B', 'C', 'D', 'Ne', 'score',
            'Polyvalence', 'Get']
        ]);
    }
    
    public function getallPolyvalence()
    {

        /* search */
        $Polyvalences = $this->Polyvalences->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $Polyvalences,
            '_serialize' => ['success', 'data']
        ]);
    }

    public function calculTotalval()
    {
        /* search */
        $polyvalence = $this->Polyvalences->find('all', [
            'fields'=>[
                'valeur',
            ],
        ])->toArray();
        $total=0;
        /* calcul total polyvalence */
        $total=array_sum(array_column($polyvalence, 'valeur'))/count($polyvalence);

        $this->loadModel('Totalpolyvalences');
        /* check if Totalpolyvalences record exists */
        $totalpolyvalence = $this->Totalpolyvalences->find('all')->first();

        if ($totalpolyvalence) {
            /* if record exists, update its valeur attribute with the new total */
            $totalpolyvalence->valeur = $total;
            $success = $this->Totalpolyvalences->save($totalpolyvalence);
        } else {
            /* if record does not exist, create a new record with the new total */
            $totalpolyvalence = $this->Totalpolyvalences->newEntity(['valeur' => $total]);
            $success = $this->Totalpolyvalences->save($totalpolyvalence);
        }

        /*send result */
        $this->set([
            'success' => true,
            'data' => $polyvalence,
            'total' => $total,
            'get' => $totalpolyvalence,
            '_serialize' => ['success', 'data', 'total', 'get']
        ]);
    }

}
