<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Departements Controller
 *
 * @method \App\Model\Entity\Departement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DepartementsController extends AppController
{
    /**
    * getAllDepartement
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllDepartement()
    {

        /* search */
        $departements = $this->Departements->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $departements,
            '_serialize' => ['success', 'data']
        ]);
    }
}
