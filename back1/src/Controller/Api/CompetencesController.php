<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Competences Controller
 *
 * @property \App\Model\Table\CompetencesTable $Competences
 * @method \App\Model\Entity\Competence[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CompetencesController extends AppController
{
    /**
    * getAllCompetence
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllCompetence()
    {

        /* search */
        $competences = $this->Competences->find('all',[
            'contain' => [
                'Categories'
            ]
        ]);
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $competences,
            '_serialize' => ['success', 'data']
        ]);
    }
}
