<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Matricecompetences Controller
 *
 * @property \App\Model\Table\MatricecompetencesTable $Matricecompetences
 * @method \App\Model\Entity\Matricecompetence[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MatricecompetencesController extends AppController
{
    /*function get Matricecompetences for Chart*/
    public function getMatricecomp()
    {
        $matricecompetences = $this->Matricecompetences->find('all', [
            'fields' => [
                'label',
            ],
            'limit' => 16,
        ]);
        
        $matricecompetencesList = [];
        foreach ($matricecompetences as $mc) {
            $matricecompetencesList[] = $mc->label;
        }
        
        $this->set([
            'success' => true,
            'data' => [
                'matricecompetencesList' => $matricecompetencesList,
            ],
            '_serialize' => ['success', 'data']
        ]);
    }        


}
