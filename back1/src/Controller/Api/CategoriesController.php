<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Categories Controller
 *
 * @property \App\Model\Table\CategoriesTable $Categories
 * @method \App\Model\Entity\Category[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriesController extends AppController
{
    /**
    * getAllCategorie
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllCategorie()
    {

        /* search */
        $categories = $this->Categories->find('all',[
            'contain' => [
                'Profilpostes'
            ]
        ]);
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $categories,
            '_serialize' => ['success', 'data']
        ]);
    }
}
