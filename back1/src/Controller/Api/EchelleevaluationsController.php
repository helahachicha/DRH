<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Echelleevaluations Controller
 *
 * @property \App\Model\Table\EchelleevaluationsTable $Echelleevaluations
 * @method \App\Model\Entity\Echelleevaluation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EchelleevaluationsController extends AppController
{
     /**
    * getAllEchelleevaluation
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllEchelleevaluation()
    {

        /* search */
        $echelleevaluations = $this->Echelleevaluations->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $echelleevaluations,
            '_serialize' => ['success', 'data']
        ]);
    }

     /**
    * getAllAbreviationEV
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllAbreviationEV()
    {

        /* search */
        $echelleevaluations = $this->Echelleevaluations->find('all' ,[
            'fields'=>[
                'abreviation'

            ]
    ]);
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $echelleevaluations,
            '_serialize' => ['success', 'data']
        ]);
    }
}
