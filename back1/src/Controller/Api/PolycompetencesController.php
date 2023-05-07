<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Polycompetences Controller
 *
 * @property \App\Model\Table\PolycompetencesTable $Polycompetences
 * @method \App\Model\Entity\Polycompetence[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PolycompetencesController extends AppController
{
    public function calculTotalcomp()
    {
        /* search */
        $polycompetences = $this->Polycompetences->find('all', [
            'fields'=>[
                'valeur',
            ],
        ])->toArray();
        $total=0;
        /* calcul total polyvalence */
        $total=array_sum(array_column($polycompetences, 'valeur'))/count($polycompetences);

        $this->loadModel('Totalpolycompetences');
        /* check if Totalpolyvalences record exists */
        $totalpolycompetences = $this->Totalpolycompetences->find('all')->first();

        if ($totalpolycompetences) {
            /* if record exists, update its valeur attribute with the new total */
            $totalpolycompetences->valeur = $total;
            $success = $this->Totalpolycompetences->save($totalpolycompetences);
        } else {
            /* if record does not exist, create a new record with the new total */
            $totalpolycompetences = $this->Totalpolycompetences->newEntity(['valeur' => $total]);
            $success = $this->Totalpolycompetences->save($totalpolycompetences);
        }

        $totalpolycompetences = $this->Totalpolycompetences->find('all', [
            'fields'=>[
                'valeur',
            ],
        ]);

        /*send result */
        $this->set([
            'success' => true,
            'total' => $totalpolycompetences,
            '_serialize' => ['success','total']
        ]);
    }

}
