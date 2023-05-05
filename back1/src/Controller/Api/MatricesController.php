<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Matrices Controller
 *
 * @property \App\Model\Table\MatricesTable $Matrices
 * @method \App\Model\Entity\Matrix[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MatricesController extends AppController
{


    public function addEvaluation() {
        $this->request->allowMethod(['post', 'put']);
    
        // format data
        if (1 == 1) {
            $querry = $this->request->getData();
            $data = json_decode($querry['data']);
        }
        
        $employeeScores = [];
        
        foreach ($data as $evalu) {
            $employeeId = $evalu->empId;
        
            // create Matrices entity
            $matrice = $this->Matrices->newEmptyEntity();
            $matrice->note = $evalu->value;
            $matrice->employe_id = $employeeId;
            $matrice->matricecompetence_id = $evalu->MCId;
            $this->Matrices->save($matrice);

            if (!isset($matrixCounts[$employeeId])) {
                $matrixCounts[$employeeId] = 1;
            } else {
                $matrixCounts[$employeeId]++;
            }
        
            // add new matrices to the array
            $matrices[] = $matrice;
        
            // compute the score for the current employee
            $resultAplusCount = 0;
            $resultACount = 0;
            $resultBCount = 0;
            $resultCCount = 0;
            $resultDCount = 0;
            $resultNeCount = 0;
        
            foreach ($matrices as $matrix) {
                if ($matrix->employe_id == $employeeId) {
                    switch ($matrix->note) {
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
            }
        
            $score = ($resultAplusCount * 100) + ($resultACount * 75) + ($resultBCount * 50) +
                ($resultCCount * 25) + ($resultDCount * 10) + ($resultNeCount * 0);
        
            // store the employee's score
            $employeeScores[$employeeId] = $score;
            
        }

        foreach ($employeeScores as $employeeId => $score) {
            $matrixCount = $matrixCounts[$employeeId];
            if ($matrixCount > 0) {
                $employeeScores[$employeeId] = $score / $matrixCount;
                // create Polycompetences entity
                $this->loadModel('Polycompetences');
                $polycompetence = $this->Polycompetences->newEmptyEntity();
                $polycompetence->valeur = $employeeScores[$employeeId];
                $polycompetence->employe_id = $employeeId;
                $this->Polycompetences->save($polycompetence);
            }
        }

        foreach ($employeeScores as $employeeId => $score) {
            $this->loadModel('Polycompetences');
            $polycompetence = $this->Polycompetences->find('all');
        }
        //debug($polycompetence);  
        
        // send the result
        $this->set([
            'success' => true,
            'score employe' => $polycompetence,
            'data' => $employeeScores,
            '_serialize' => ['success', 'data', 'score employe']
        ]);
        
    }
    
    


}
