<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Superhieras Controller
 *
 * @method \App\Model\Entity\Superhiera[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SuperhierasController extends AppController
{
   /**
      * getSuperhiera
      *
      * @Input: id
      *
      * @Output: data
    */
    public function getSuperhiera(){

        $id = $this->request->getQuery('id');
        
        if(1==1){
            if (!isset($id) or empty($id) or $id == null ){
                throw new UnauthorizedException('Id is Required');
            }
           
        }
        $superhieras = $this->Superhieras->find('all', [
            'conditions'=>[
                'id IS'=>$id
            ],
           
            
        ])->first();
        if(empty($superhieras)){
            throw new UnauthorizedException('Place not found');
        }

        $this->set([
            'success' => true,
            'data' => $superhieras,
            '_serialize' => ['success', 'data']
        ]);
    }

/**
    * getAllSuperhiera
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllSuperhiera()
    {

        /* search */
        $superhieras = $this->Superhieras->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $superhieras,
            '_serialize' => ['success', 'data']
        ]);
    }


}
