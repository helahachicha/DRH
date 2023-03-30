<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Points Controller
 *
 * @method \App\Model\Entity\Point[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PointsController extends AppController
{
     /**
      * getPointBySouscompetence
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getPointBySouscompetence(){
 
        $id = $this->request->getQuery('id');
        $S=0;

        /* search */
         if(1==1){
             if (!isset($id) or empty($id) or $id == null ){
             throw new UnauthorizedException('Id is Required');
             }

            if(!is_numeric($id)){
           throw new UnauthorizedException('Id is not Valid');
            }
         }

        $points = $this->Points->find('all', [

            'conditions'=>[
                'souscompetence_id IS'=>$id
            ],
           
           
        ])->toArray();

        if(empty($points)){
           throw new UnauthorizedException('Points not found');
       }
       
       foreach($points as $p){

        $S=$S+$p;


       }
       /*send result */

       $this->set([
           'somme' => $S,
           'success' => true,
           'data' => $points,
           '_serialize' => ['success', 'data']
       ]);
    }
}
