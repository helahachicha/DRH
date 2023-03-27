<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Niveauvises Controller
 *
 * @property \App\Model\Table\NiveauvisesTable $Niveauvises
 * @method \App\Model\Entity\Niveauvise[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NiveauvisesController extends AppController
{
    /**
    * getAllNiveauvise
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllNiveauvise()
    {

        /* search */
        $niveauvises = $this->Niveauvises->find('all',[
            'contain' => [
                'Categories'
            ]
        ]);
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $niveauvises,
            '_serialize' => ['success', 'data']
        ]);
    }
}
