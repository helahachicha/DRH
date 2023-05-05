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
    public function getAllSouscompetence()
    {

        /* search */
        $souscompetences = $this->Souscompetences->find('all', [
            'fields'=>[
                'label'
            ],

        ])->distinct();
        $this->loadModel('Indicateursuivis');
        $indicateursuivis = $this->Indicateursuivis->find('all', [
            'fields'=>[
                'label'
            ],

        ])->distinct();
        $data=[$indicateursuivis,$souscompetences];

        /*send result */
        $this->set([
            'success' => true,
            'data' => $data,
            '_serialize' => ['success', 'data']
        ]);
    }
}
