<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Indicateursuivis Controller
 *
 * @property \App\Model\Table\IndicateursuivisTable $Indicateursuivis
 * @method \App\Model\Entity\Indicateursuivi[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IndicateursuivisController extends AppController
{
    /**
    * getAllIndicateursuivi
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllIndicateursuivi()
    {

        /* search */
        $indicateursuivis = $this->Indicateursuivis->find('all',[
            'contain' => [
                'Souscompetences'
            ]
        ]);
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $indicateursuivis,
            '_serialize' => ['success', 'data']
        ]);
    }
}
