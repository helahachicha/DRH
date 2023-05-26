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
        $categories = $this->Categories->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $categories,
            '_serialize' => ['success', 'data']
        ]);
    }


    
    /**
      * deleteCategorie
      * @Input: id
      *
      * @Output: data
      */

      public function deleteCategorie(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $categories = $this->Categories->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],

        ])->first();

        /* delete categories  */

        if (1==1){
            $this->Categories->delete($categories);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }


}
