<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Polyvalences Controller
 *
 * @property \App\Model\Table\PolyvalencesTable $Polyvalences
 * @method \App\Model\Entity\Polyvalence[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PolyvalencesController extends AppController
{


    /**
    * getAllPolyvalence
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllPolyvalence()
    {

        /* search */
        $polyvalences = $this->Polyvalences->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $polyvalences,
            '_serialize' => ['success', 'data']
        ]);
    }


    /**
      * getPolyvalenceByMatCompId
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getPolyvalenceByMatCompId(){
 
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

        $polyvalences = $this->Polyvalences->find('all', [
            'conditions'=>[
                'matricecompetence_id IS'=>$id,
            ],
           
        ])->toArray();
        // debug($polyvalences);die;
        
        if(empty($polyvalences)){
           throw new UnauthorizedException('Polyvalences not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $polyvalences,
           '_serialize' => ['success', 'data']
       ]);
    }


    /**
    * calculTotalpolyvalence
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function calculTotalpolyvalence()
    {
        $id = $this->request->getQuery('id');
        /* search */
        $polyvalences = $this->Polyvalences->find('all', [
            'fields' => ['valeur']
        ])->toArray();
        
        $resultPvCount = count($polyvalences);
        $resultPvSum = array_sum(array_column($polyvalences, 'valeur'));
        $moy = $resultPvSum / $resultPvCount;


        //Find the existing totalpolyvalences entity
        $totalpolyvalences = TableRegistry::getTableLocator()->get('Totalpolyvalences')->find()
        ->where(['totalpolyvalences.id IS' => $id])
        ->first();

        // Retrieve the entity to update
        if ($totalpolyvalences){

            // Update the entity's properties
            $totalpolyvalences->valeur = $moy;

            // Save the changes to the database
            if (TableRegistry::getTableLocator()->get('Totalpolyvalences')->save($totalpolyvalences)) {
                $message = " totalpolyvalences updated successfully";
            } else {
                $errors = $totalpolyvalences->getErrors();
                $message = "Error updating totalpolyvalences: " . json_encode($errors);
            }
        } 

        // Create a new entity and add $moy into the totalpolyvalences table 
        else { 
            $totalpolyvalences = TableRegistry::getTableLocator()->get('Totalpolyvalences')->newEntity([
                'valeur' =>  $moy
            ]);

            // Save the entity to the database
            if (TableRegistry::getTableLocator()->get('Totalpolyvalences')->save($totalpolyvalences)) {
                $message = "totalpolyvalences Added successfully";
            } else {
                $errors = $totalpolyvalences->getErrors();
                $message = "Error Adding totalpolyvalences: " . json_encode($errors);
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
