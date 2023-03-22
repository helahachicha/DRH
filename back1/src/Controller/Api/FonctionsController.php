<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Fonctions Controller
 *
 * @method \App\Model\Entity\Fonction[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FonctionsController extends AppController
{
   /**
      * getFonction
      *
      * @Input: id
      *
      * @Output: data
    */
    public function getFonction(){

        $id = $this->request->getQuery('id');
        
        if(1==1){
            if (!isset($id) or empty($id) or $id == null ){
                throw new UnauthorizedException('Id is Required');
            }
           
        }
        $fonctions = $this->Fonctions->find('all', [
            'conditions'=>[
                'id IS'=>$id
            ],
           
            
        ])->first();
        if(empty($fonctions)){
            throw new UnauthorizedException('Place not found');
        }

        $this->set([
            'success' => true,
            'data' => $fonctions,
            '_serialize' => ['success', 'data']
        ]);
    }


    /**
    * getAllFonction
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllFonction()
    {

        /* search */
        $fonctions = $this->Fonctions->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $fonctions,
            '_serialize' => ['success', 'data']
        ]);
    }


}
