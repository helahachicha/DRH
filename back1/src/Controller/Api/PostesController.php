<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Postes Controller
 *
 * @method \App\Model\Entity\Poste[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PostesController extends AppController
{

    
    /**
    * getAllPoste
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllPoste()
    {

        /* search */
        $postes = $this->Postes->find('all',[
            'contain' => [
                'Departements'
            ]
        ]);
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $postes,
            '_serialize' => ['success', 'data']
        ]);
    }

}
