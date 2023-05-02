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
      public function getEmployeByCatId(){
 
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
                'Employes.id '=>$id
            ],
            'contain' => [
                'Categories',
                'Categories.Detailprofilpostes.Formcompetences.Competences.Indicateursuivis' => 
                ['conditions'=>[
                    'Formcompetences.detailprofilposte_id IS'=>intval('categorie_id'),
                ]],
                'Categories.Detailprofilpostes.Formcompetences.Competences.Souscompetences' => 
                ['conditions'=>[
                    'Souscompetences.detailprofilposte_id IS'=>intval('categorie_id'),
                ]],
                'Categories.Detailprofilpostes.Formcompetences.Competences.Souscompetences.Indicasoucompas' => 
                ['conditions'=>[
                    'Indicasoucompas.detailprofilposte_id IS'=>intval('categorie_id'),
                ]],
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
    * getAllEmployeByCatAndPc
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllEmployeByCatAndPc()
    {

        /* search */
        $employes = $this->Employes->find('all', [
            'contain'=>[
                'Categories.Profilpostes.Postes.Departements','Polycompetences',
                'Matrices.Matricecompetences'

            ]
        ]);
 
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
    


    /**
      * deleteEmploye
      *
      * @Input: id
      *
      * @Output: data
      */

      public function deleteEmploye(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $employes = $this->Employes->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete employes  */

        if (1==1){
            $this->Employes->delete($employes);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }


}
