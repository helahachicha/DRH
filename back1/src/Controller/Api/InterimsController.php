<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Interims Controller
 *
 * @method \App\Model\Entity\Interim[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InterimsController extends AppController
{
    /**
      * getInterimBycategId
      *
      * @Input: id
      *
      * @Output: data
    */
    public function getInterimBycategId(){

        $id = $this->request->getQuery('id');
        
        if(1==1){
            if (!isset($id) or empty($id) or $id == null ){
                throw new UnauthorizedException('Id is Required');
            }
           
        }
        $interims = $this->Interims->find('all', [
            'conditions'=>[
                'Interims.categoriede_id'=>$id
            ],
            'contain' => [
                'Categoriedes'
            ]
            
        ]);
        if(empty($interims)){
            throw new UnauthorizedException('Place not found');
        }

        $this->set([
            'success' => true,
            'data' => $interims,
            '_serialize' => ['success', 'data']
        ]);
    }
}
