<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Supervisions Controller
 *
 * @method \App\Model\Entity\Supervision[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SupervisionsController extends AppController
{
    /**
      * getSupervisionBycategId
      *
      * @Input: id
      *
      * @Output: data
    */
    public function getSupervisionBycategId(){

        $id = $this->request->getQuery('id');
        
        if(1==1){
            if (!isset($id) or empty($id) or $id == null ){
                throw new UnauthorizedException('Id is Required');
            }
           
        }
        $supervisions = $this->Supervisions->find('all', [
            'conditions'=>[
                'Supervisions.categoriede_id'=>$id
            ],
            'contain' => [
                'Categoriedes'
            ]
            
        ]);
        if(empty($supervisions)){
            throw new UnauthorizedException('Place not found');
        }

        $this->set([
            'success' => true,
            'data' => $supervisions,
            '_serialize' => ['success', 'data']
        ]);
    }
}
