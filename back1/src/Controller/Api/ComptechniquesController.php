<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Comptechniques Controller
 *
 * @method \App\Model\Entity\Comptechnique[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ComptechniquesController extends AppController
{

    /**
      * getComptechByTesttech
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getComptechByTesttech(){
 
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

        $comptechniques = $this->Comptechniques->find('all', [
            'contain' => [
               'Testtechniques.Categories',
               'Questions.Reponses'        
            ],
            
            'conditions'=>[
                'testtechnique_id IS'=>$id,

            ],
        ])->toArray();

        if(empty($comptechniques)){
           throw new UnauthorizedException('Comptechniques not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $comptechniques,
           '_serialize' => ['success', 'data']
       ]);
    }


}
