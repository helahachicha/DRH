<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Departements Controller
 *
 * @method \App\Model\Entity\Departement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DepartementsController extends AppController
{

    /**
     * addDepartement
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *         
     * @Output: data : success message
     */
    public function addDepartement(){

        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create departements entity */
         if (1==1){
            $departements = $this->Departements->newEmptyEntity();
            $departements->label=$data->label;
            $savedProfil=$this->Departements->save($departements);
        }

         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }







    /**
    * getAllDepartement
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllDepartement()
    {

        /* search */
        $departements = $this->Departements->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $departements,
            '_serialize' => ['success', 'data']
        ]);
    }
}
