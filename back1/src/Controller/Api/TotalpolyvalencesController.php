<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Totalpolyvalences Controller
 *
 * @property \App\Model\Table\TotalpolyvalencesTable $Totalpolyvalences
 * @method \App\Model\Entity\Totalpolyvalence[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TotalpolyvalencesController extends AppController
{
    /**
    * getAllTotalpolyvalence
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllTotalpolyvalence()
    {

        $totalpolyvalences = $this->Totalpolyvalences->find('all', [
            'fields'=>[
                'valeur',
            ],
        ]);
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $totalpolyvalences,
            '_serialize' => ['success', 'data']
        ]);
    }

}
