<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Idproposte Controller
 *
 * @method \App\Model\Entity\Idproposte[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IdproposteController extends AppController
{
      /**
    * getAllIdproposte
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllIdproposte()
    {

        /* search */
        $idproposte = $this->Idproposte->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $idproposte,
            '_serialize' => ['success', 'data']
        ]);
    }

    /**
     * editCoutformaexterne
     *
     * @Input:
     *         data:
     *          majn (Int) 
     *          du(Date)
     *          Fonction (String)
     *          Categorie (String) 
     *          Suphier(String) 
     *          Super (String) 
     *          Interim(String) 
     *          
     *         
     * @Output: data : success message
     */
    public function editIdproposte(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $idproposte=$this->Idproposte->get($id);
         /* create coutformaexternes entity */
        if (1==1){
            $idproposte->majn=$data->majn;  
            $idproposte->du=$data->du;  
            $idproposte->Fonction=$data->Fonction;  
            $idproposte->Categorie=$data->Categorie;  
            $idproposte->Suphier=$data->Suphier;  
            $idproposte->Super=$data->Super; 
            $idproposte->Interim=$data->Interim; 

            $this->Idproposte->save($idproposte); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }
}
