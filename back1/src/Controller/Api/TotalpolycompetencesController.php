<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Totalpolycompetences Controller
 *
 * @property \App\Model\Table\TotalpolycompetencesTable $Totalpolycompetences
 * @method \App\Model\Entity\Totalpolycompetence[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TotalpolycompetencesController extends AppController
{
    /**
    * getAllTotalpolycompetence
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllTotalpolycompetence()
    {

        $totalpolycompetences = $this->Totalpolycompetences->find('all', [
            'fields'=>[
                'valeur',
            ],
        ]);
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $totalpolycompetences,
            '_serialize' => ['success', 'data']
        ]);
    }
}
