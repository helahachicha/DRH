<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Souscompetences Controller
 *
 * @property \App\Model\Table\SouscompetencesTable $Souscompetences
 * @method \App\Model\Entity\Souscompetence[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SouscompetencesController extends AppController
{
    /**
    * getAllSouscompetence
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllSouscompetence()
    {

        /* search */
        $souscompetences = $this->Souscompetences->find('all',[
            'contain' => [
                'Competences'
            ]
        ]);
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $souscompetences,
            '_serialize' => ['success', 'data']
        ]);
    }
}
