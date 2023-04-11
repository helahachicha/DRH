<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Matrices Controller
 *
 * @property \App\Model\Table\MatricesTable $Matrices
 * @method \App\Model\Entity\Matrix[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MatricesController extends AppController
{


    /**
    * getAllMatrice
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllMatrice()
    {

        /* search */
        $matrices = $this->Matrices->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $matrices,
            '_serialize' => ['success', 'data']
        ]);
    }


    /**
     * addNoteMatrice
     *
     * @Input:
     *         data:
     *          note (String) *Required
     *         
     * @Output: data : success message
     */
    public function addNoteMatrice(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry = $this->request->getData();
            $data = json_decode($querry['data']); 
        }
        
        $this->loadModel('Matricecompetences');
        $this->loadModel('employes');
        $matricecomp = $this->Matricecompetences->find('list', ['valueField' => 'label']);
        $employe = $this->employes->find('list', ['valueField' => 'nomprenom']);
        if (1 == 1) {
            foreach ($matricecomp as $label) {
                foreach ($employe as $nomprenom) {
                    $matrices = $this->Matrices->newEmptyEntity();
                    $matrices->note[$label][$nomprenom] = $data->note->$label->$nomprenom;
                    $savedMatrices = $this->Matrices->save($matrices);
                }
            }
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    }



    /**
     * editMatrice
     *
     * @Input:
     *         data:
     *          
     *         
     * @Output: data : success message
     */
    public function editMatrice(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $matrices=$this->Matrices->get($id);
         /* create matrices entity */
        if (1==1){
            $matrices->note=$data->note;  
            $this->Matrices->save($matrices); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }









    /**
      * calculPolyValBymatcompId
      *
      * @Input: id
      *
      * @Output: data
      */
      public function calculPolyValBymatcompId(){
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
        $matrices = $this->Matrices->find('all', [
            'conditions'=>[
                'matricecompetence_id IS'=>$id
            ],
        ])->toArray();

        // Count the number of elements in $matrices
        $resultMatricesCount = count($matrices);


        // Filter the elements in $matrices to keep only those with value 'A+'
        $resultAplus = array_filter($matrices, function($matrix) {
            return $matrix['note'] == 'A+';
        });
        // Count the number of elements 'A+' in $matrices
        $resultAplusCount = count($resultAplus);


        // Filter the elements in $matrices to keep only those with value 'A'
        $resultA = array_filter($matrices, function($matrix) {
            return $matrix['note'] == 'A';
        });
        // Count the number of elements 'A' in $matrices
        $resultACount = count($resultA);


        // Filter the elements in $matrices to keep only those with value 'B'
        $resultB = array_filter($matrices, function($matrix) {
            return $matrix['note'] == 'B';
        });
        // Count the number of elements 'B' in $matrices
        $resultBCount = count($resultB);


        // Filter the elements in $matrices to keep only those with value 'C'
        $resultC = array_filter($matrices, function($matrix) {
            return $matrix['note'] == 'C';
        });
        // Count the number of elements 'C' in $matrices
        $resultCCount = count($resultC);


        // Filter the elements in $matrices to keep only those with value 'D'
        $resultD = array_filter($matrices, function($matrix) {
            return $matrix['note'] == 'D';
        });
        // Count the number of elements 'D' in $matrices
        $resultDCount = count($resultD);


        // Filter the elements in $matrices to keep only those with value 'Ne'
        $resultNe = array_filter($matrices, function($matrix) {
            return $matrix['note'] == 'Ne';
        });
        // Count the number of elements 'Ne' in $matrices
        $resultNeCount = count($resultNe);


        // Calcul total polyvalence 
        $som = [($resultAplusCount*100)+($resultACount*75)+($resultBCount*50)
        +($resultCCount*25)+($resultDCount*10)+($resultNeCount*0)];

        $moy=array_sum($som)/$resultMatricesCount;


        //Find the existing polyvalences entity
        $polyvalenceEntity = TableRegistry::getTableLocator()->get('Polyvalences')->find()
        ->where(['matricecompetence_id' => $id])
        ->first();

        // Retrieve the entity to update
        if ($polyvalenceEntity){

            // Update the entity's properties
            $polyvalenceEntity->matricecompetence_id = $id;
            $polyvalenceEntity->valeur = $moy;

            // Save the changes to the database
            if (TableRegistry::getTableLocator()->get('Polyvalences')->save($polyvalenceEntity)) {
                $message = " polyvalence updated successfully";
            } else {
                $errors = $polyvalenceEntity->getErrors();
                $message = "Error updating polyvalence: " . json_encode($errors);
            }
        } 

        // Create a new entity and add $moy into the polyvalences table 
        else { 
            $polyvalenceEntity = TableRegistry::getTableLocator()->get('polyvalences')->newEntity([
                'matricecompetence_id' => $id,
                'valeur' => $moy
            ]);

            // Save the entity to the database
            if (TableRegistry::getTableLocator()->get('polyvalences')->save($polyvalenceEntity)) {
                $message = "polyvalence Added successfully";
            } else {
                $errors = $polyvalenceEntity->getErrors();
                $message = "Error Adding polyvalence: " . json_encode($errors);
            }
        }


        /*send result */
        $this->set([
            'success' => true,
            'POLYVALENCE' => $moy,
            'data' => $message,
            '_serialize' => ['success', 'POLYVALENCE', 'data']
        ]);
    }










    /**
      * calculPolyCompByEmpId
      *
      * @Input: id
      *
      * @Output: data
      */
      public function calculPolyCompByEmpId(){
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
        $matrices = $this->Matrices->find('all', [
            'conditions'=>[
                'employe_id IS'=>$id
            ],
        ])->toArray();

        // Count the number of elements in $matrices
        $resultMatricesCount = count($matrices);


        // Filter the elements in $matrices to keep only those with value 'A+'
        $resultAplus = array_filter($matrices, function($matrix) {
            return $matrix['note'] == 'A+';
        });
        // Count the number of elements 'A+' in $matrices
        $resultAplusCount = count($resultAplus);


        // Filter the elements in $matrices to keep only those with value 'A'
        $resultA = array_filter($matrices, function($matrix) {
            return $matrix['note'] == 'A';
        });
        // Count the number of elements 'A' in $matrices
        $resultACount = count($resultA);


        // Filter the elements in $matrices to keep only those with value 'B'
        $resultB = array_filter($matrices, function($matrix) {
            return $matrix['note'] == 'B';
        });
        // Count the number of elements 'B' in $matrices
        $resultBCount = count($resultB);


        // Filter the elements in $matrices to keep only those with value 'C'
        $resultC = array_filter($matrices, function($matrix) {
            return $matrix['note'] == 'C';
        });
        // Count the number of elements 'C' in $matrices
        $resultCCount = count($resultC);


        // Filter the elements in $matrices to keep only those with value 'D'
        $resultD = array_filter($matrices, function($matrix) {
            return $matrix['note'] == 'D';
        });
        // Count the number of elements 'D' in $matrices
        $resultDCount = count($resultD);


        // Filter the elements in $matrices to keep only those with value 'Ne'
        $resultNe = array_filter($matrices, function($matrix) {
            return $matrix['note'] == 'Ne';
        });
        // Count the number of elements 'Ne' in $matrices
        $resultNeCount = count($resultNe);


        // Calcul polycompetences
        $som = [($resultAplusCount*100)+($resultACount*75)+($resultBCount*50)
        +($resultCCount*25)+($resultDCount*10)+($resultNeCount*0)];

        $moy=array_sum($som)/$resultMatricesCount;


        //Find the existing polycompetences entity
        $polycompEntity = TableRegistry::getTableLocator()->get('Polycompetences')->find()
        ->where(['employe_id' => $id])
        ->first();

        // Retrieve the entity to update
        if ($polycompEntity){

            // Update the entity's properties
            $polycompEntity->employe_id = $id;
            $polycompEntity->valeur = $moy;

            // Save the changes to the database
            if (TableRegistry::getTableLocator()->get('Polycompetences')->save($polycompEntity)) {
                $message = "Polycompetences updated successfully";
            } else {
                $errors = $polycompEntity->getErrors();
                $message = "Error updating polycompetences: " . json_encode($errors);
            }
        } 

        // Create a new entity and add $moy into the polycompetences table 
        else { 
            $polycompEntity = TableRegistry::getTableLocator()->get('Polycompetences')->newEntity([
                'employe_id' => $id,
                'valeur' => $moy
            ]);

            // Save the entity to the database
            if (TableRegistry::getTableLocator()->get('Polycompetences')->save($polycompEntity)) {
                $message = "Polycompetences Added successfully";
            } else {
                $errors = $polycompEntity->getErrors();
                $message = "Error Adding polycompetences: " . json_encode($errors);
            }
        }


        /*send result */
        $this->set([
            'success' => true,
            'POLYCOMPETENCE' => $moy,
            'data' => $message,
            '_serialize' => ['success', 'POLYCOMPETENCE', 'data']
        ]);
    }
}
