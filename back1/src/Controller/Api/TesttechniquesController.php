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
}