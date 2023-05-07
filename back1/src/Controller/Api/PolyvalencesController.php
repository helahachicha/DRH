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
   
    public function calculPolyvalence($id){
        $this->loadModel('Matricecompetences');
        
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

        // Create a new entity object for the Polyvalence
        $polyvalence = $this->Polyvalences->newEntity([
            'valeur' => $Polyvalence,
            'matricecompetence_id' => $id
        ]);
        // Save the new Polyvalence record
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
}
