<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Points Controller
 *
 * @property \App\Model\Table\PointsTable $Points
 * @method \App\Model\Entity\Point[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PointsController extends AppController
{
    /**
    * getAllPoint
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllPoint()
    {

        /* search */
        $points = $this->Points->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $points,
            '_serialize' => ['success', 'data']
        ]);
    }
}
