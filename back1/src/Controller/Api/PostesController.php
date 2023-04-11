<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Postes Controller
 *
 * @method \App\Model\Entity\Poste[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PostesController extends AppController
{


    /**
     * addPoste
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *          departement_id (Int) *Required
     *         
     * @Output: data : success message
     */
    public function addPoste(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
        /* create postes entity */
        if (1==1){
            $postes = $this->Postes->newEmptyEntity();
            $postes->label=$data->label;
            $postes->departement_id=$data->departement_id;
            $savedProfil=$this->Postes->save($postes);
        }

       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    
    /**
    * getAllPoste
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllPoste()
    {

        /* search */
        $postes = $this->Postes->find('all',[
            'contain' => [
                'Departements'
            ]
        ]);
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $postes,
            '_serialize' => ['success', 'data']
        ]);
    }

}
