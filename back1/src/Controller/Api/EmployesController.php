<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Employes Controller
 *
 * @property \App\Model\Table\EmployesTable $Employes
 * @method \App\Model\Entity\Employe[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployesController extends AppController
{
    /**
      * getEmployeBydetailppId
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getEmployeByFormcompId(){
 
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

         

        $employes = $this->Employes->find('all', [
            'conditions'=>[
                'formcompetence_id IS'=>$id

            ],
            'contain' => [
                'Formcompetences.Detailprofilpostes.Categories','Formcompetences.Competences',
                'Formcompetences.Indicateursuivis','Formcompetences.Niveauvises'
              ],
    
        ])->toArray();

        if(empty($employes)){
           throw new UnauthorizedException('Employes not found');
       }

        /*send result */

        $this->set([
            'success' => true,
            'data' => $employes,
            '_serialize' => ['success', 'data']
        ]);
    }


     /**
    * getAllEmploye****
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllEmploye()
    {

        /* search */
        $employes = $this->Employes->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $employes,
            '_serialize' => ['success', 'data']
        ]);
    }
    

}
