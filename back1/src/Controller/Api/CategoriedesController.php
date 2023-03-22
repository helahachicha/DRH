<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Categoriedes Controller
 *
 * @method \App\Model\Entity\Categoriede[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriedesController extends AppController
{
     /**
      * getCategoriede
      *
      * @Input: id
      *
      * @Output: data
    */
    public function getCategoriede(){

        $id = $this->request->getQuery('id');
        
        if(1==1){
            if (!isset($id) or empty($id) or $id == null ){
                throw new UnauthorizedException('Id is Required');
            }
           
        }
        $categoriedes = $this->Categoriedes->find('all', [
            'conditions'=>[
                'id IS'=>$id
            ],
           
            
        ])->first();
        if(empty($categoriedes)){
            throw new UnauthorizedException('Place not found');
        }

        $this->set([
            'success' => true,
            'data' => $categoriedes,
            '_serialize' => ['success', 'data']
        ]);
    }


    /**
    * getAllCategoriede
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllCategoriede()
    {

        /* search */
        $categoriedes = $this->Categoriedes->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $categoriedes,
            '_serialize' => ['success', 'data']
        ]);
    }
}
