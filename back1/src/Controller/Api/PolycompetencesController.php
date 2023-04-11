<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Polycompetences Controller
 *
 * @property \App\Model\Table\PolycompetencesTable $Polycompetences
 * @method \App\Model\Entity\Polycompetence[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PolycompetencesController extends AppController
{

    /**
      * getPolycompetenceByEmpId
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getPolycompetenceByEmpId(){
 
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

        $polycompetences = $this->Polycompetences->find('all', [
            'conditions'=>[
                'employe_id IS'=>$id,
            ],
           
        ])->toArray();
        // debug($polycompetences);die;
        
        if(empty($polycompetences)){
           throw new UnauthorizedException('Polycompetences not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $polycompetences,
           '_serialize' => ['success', 'data']
       ]);
    }


    /**
    * calculTotalPolycompetence
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function calculTotalPolycompetence()
    {
        $id = $this->request->getQuery('id');
        /* search */
        $polycompetences = $this->Polycompetences->find('all', [
            'fields' => ['valeur']
        ])->toArray();
        
        $resultPvCount = count($polycompetences);
        $resultPvSum = array_sum(array_column($polycompetences, 'valeur'));
        $moy = $resultPvSum / $resultPvCount;


        //Find the existing totalpolycompetences entity
        $totalpolycompetences = TableRegistry::getTableLocator()->get('Totalpolycompetences')->find()
        ->where(['totalpolycompetences.id IS' => $id])
        ->first();

        // Retrieve the entity to update
        if ($totalpolycompetences){

            // Update the entity's properties
            $totalpolycompetences->valeur = $moy;

            // Save the changes to the database
            if (TableRegistry::getTableLocator()->get('Totalpolycompetences')->save($totalpolycompetences)) {
                $message = " totalpolycompetences updated successfully";
            } else {
                $errors = $totalpolycompetences->getErrors();
                $message = "Error updating totalpolycompetences: " . json_encode($errors);
            }
        } 

        // Create a new entity and add $moy into the totalpolycompetences table 
        else { 
            $totalpolycompetences = TableRegistry::getTableLocator()->get('Totalpolycompetences')->newEntity([
                'valeur' =>  $moy
            ]);

            // Save the entity to the database
            if (TableRegistry::getTableLocator()->get('Totalpolycompetences')->save($totalpolycompetences)) {
                $message = "totalpolycompetences Added successfully";
            } else {
                $errors = $totalpolycompetences->getErrors();
                $message = "Error Adding totalpolycompetences: " . json_encode($errors);
            }
        }
        
        /*send result */
        $this->set([
            'success' => true,
            'data' => [
                'count' => $resultPvCount,
                'sum' => $resultPvSum,
                'Total Polyvalence' => $moy,
                'Message' => $message
            ],
            '_serialize' => ['success', 'data']
        ]);
    }
}
