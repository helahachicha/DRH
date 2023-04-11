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
   /**
    * getAllMatricecompetence
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllMatricecompetence()
    {

        /* search */
        $matricecompetences = $this->Matricecompetences->find('all',[
            'contain' => [
                'Matrices','Polyvalences'
              ],
        ]);
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $matricecompetences,
            '_serialize' => ['success', 'data']
        ]);
    }
}
