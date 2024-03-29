<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Testtechniques Controller
 *
 * @method \App\Model\Entity\Testtechnique[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TesttechniquesController extends AppController
{
    /**
     * addTesttechnique
     *
     * @Input:
     *         data:
     *          label(String) *Required
     *          categorie_id (Int) *Required
     *
     * @Output: data : success message
     */
    public function addTesttechnique(){
        $this->loadModel('Comptechniques');
        $this->loadModel('Questions');
        $this->loadModel('Reponses');
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']);
            //$data=$this->request->getData();
           // debug($data);
        }
         /* create testtechniques entity */
        if (1==1){
            $testtechniques = $this->Testtechniques->newEmptyEntity();
            $testtechniques->label=$data->label;
            $testtechniques->categorie_id=$data->categorie_id;
            $savedTest=$this->Testtechniques->save($testtechniques);

             /* create comptechniques entity */

            foreach ($data->Competence as $comptech)
                   {


                        $comptechniques = $this->Comptechniques->newEmptyEntity();
                        $comptechniques->label= $comptech->label;
                        $comptechniques->testtechnique_id=$savedTest->id;
                        $savedComptech=$this->Comptechniques->save($comptechniques);

                        /* create question entity */
                         foreach ($comptech->QuestReponse as $quest)
                         {
                           // debug($quest);
                             $questions = $this->Questions->newEmptyEntity();
                             $questions->label=$quest->question;
                             $questions->comptechnique_id=$savedComptech->id;
                             $savedQuest=$this->Questions->save($questions);

                             foreach ($quest->reponse  as $rep)
                            {
                                 $reponses = $this->Reponses->newEmptyEntity();
                                 $reponses->label=$rep->label;
                                 $reponses->question_id=$savedQuest->id;
                                 $this->Reponses->save($reponses);

                             }

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
    * getAllTesttechnique
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllTesttechnique()
    {

        /* search */
        $testtechniques = $this->Testtechniques->find('all',[
            'contain' => [
                'Categories'
            ]
        ]);

        /*send result */
        $this->set([
            'success' => true,
            'data' => $testtechniques,
            '_serialize' => ['success', 'data']
        ]);
    }

    
     /**
      * deleteTesttechnique
      *
      * @Input: id
      *
      * @Output: data
      */

     public function deleteTesttechnique(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $testtechniques = $this->Testtechniques->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],

        ])->first();

        /* delete testtechniques  */

        if (1==1){
            $this->Testtechniques->delete($testtechniques);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }




    //edit test 

    public function editTesttechnique()
    {
        $this->loadModel('Comptechniques');
        $this->loadModel('Questions');
        $this->loadModel('Reponses');
        $this->request->allowMethod(['post', 'put']);

        $querry = $this->request->getData('data');
        $data = json_decode($querry);

        $id = $this->request->getQuery('id');
        $testtechniques = $this->Testtechniques->get($id);

        /* update or create comptechniques entity */
        if (isset($data->Competence) && is_array($data->Competence)) {
            foreach ($data->Competence as $comptech) {
                if (isset($comptech->id)) {
                    $comptechniques = $this->Comptechniques->get($comptech->id);
                } else {
                    $comptechniques = $this->Comptechniques->newEmptyEntity();
                }
                $comptechniques->label = $comptech->label;
                $comptechniques->testtechnique_id = $comptech->testtechnique_id;
                $savedComptech = $this->Comptechniques->save($comptechniques);

                /* update or create question entity */
                if (isset($comptech->QuestReponse) && is_array($comptech->QuestReponse)) {
                    foreach ($comptech->QuestReponse as $quest) {
                        if (isset($quest->id)) {
                            $questions = $this->Questions->get($quest->id);
                        } else {
                            $questions = $this->Questions->newEmptyEntity();
                        }
                        $questions->label = $quest->question;
                        $questions->comptechnique_id = $quest->comptechnique_id;
                        $savedQuest = $this->Questions->save($questions);

                        if (isset($quest->reponse) && is_array($quest->reponse)) {
                            foreach ($quest->reponse as $rep) {
                                if (isset($rep->id)) {
                                    $reponses = $this->Reponses->get($rep->id);
                                } else {
                                    $reponses = $this->Reponses->newEmptyEntity();
                                }
                                $reponses->label = $rep->label;
                                $reponses->question_id = $rep->question_id;
                                $this->Reponses->save($reponses);
                            }
                        }
                    }
                }
            }
        }

        /* send result */
        $this->set([
            'success' => true,
            'data' => "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    }


    


}