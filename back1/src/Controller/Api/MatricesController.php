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
        
            // Find existing matrice, if any
            $existingMatrice = $this->Matrices->find()
                ->where([
                    'employe_id' => $employeeId,
                    'matricecompetence_id' => $evalu->MCId
                ])
                ->first();
        
            // If an existing matrice is found, discard it; otherwise, create a new one
            if ($existingMatrice) {
                $existingMatrice->note = $evalu->value;
            } else {
                $existingMatrice = $this->Matrices->newEmptyEntity();
                $existingMatrice->employe_id = $employeeId;
                $existingMatrice->matricecompetence_id = $evalu->MCId;
                $existingMatrice->note = $evalu->value;
            }
        
            // Save the matrice
            $this->Matrices->save($existingMatrice);
        
        }

        // send the result
        $this->set([
            'success' => true,
            'data' => $existingMatrice,
            '_serialize' => ['success', 'data', 'score employe']
        ]);
        
    }
    
    


}
