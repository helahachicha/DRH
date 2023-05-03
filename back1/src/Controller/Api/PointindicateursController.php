<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Pointindicateurs Controller
 *
 * @property \App\Model\Table\PointindicateursTable $Pointindicateurs
 * @method \App\Model\Entity\Pointindicateur[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PointindicateursController extends AppController
{
    /**
      * getPointindicateurBycomp
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getPointindicateurBycomp(){
 
        $id = $this->request->getQuery('id');

        /* search */
         if(1==1){
             if (!isset($id) or empty($id) or $id == null ){
             throw new UnauthorizedException('Id is Required');
             }

            if(!is_numeric($id)){
           throw new UnauthorizedException('Id is not Valid');
            }
         }

         

        $pointindicateurs = $this->Pointindicateurs->find('all', [

            'conditions'=>[
                'employe_id IS'=>$id
            ],

        ])->toArray();


        if(empty($pointindicateurs)){
           throw new UnauthorizedException('Pointindicateurs not found');
       }

        /*send result */

        $this->set([
            'success' => true,
            'data' => $pointindicateurs,
            '_serialize' => ['success', 'data']
        ]);
    }
}
