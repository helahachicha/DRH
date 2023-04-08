<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Matrices Controller
 *
 * @property \App\Model\Table\MatricesTable $Matrices
 * @method \App\Model\Entity\Matrix[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MatricesController extends AppController
{
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
        $this->loadModel('Matrices');
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
}
