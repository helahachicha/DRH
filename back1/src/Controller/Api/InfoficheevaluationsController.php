<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Infoficheevaluations Controller
 *
 * @method \App\Model\Entity\Infoficheevaluation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InfoficheevaluationsController extends AppController
{


    /***
     * addInfoficheevaluation
     *
     * @Input:
     *         data:
     *
     *          objetevaluation(String) *Required
     *          dateevaluation (Date) *Required
     *          decisiondirection (String) *Required
     *          employe_id(Int) *Required
     *
     * @Output: data : success message
     */
    public function addInfoficheevaluation(){

        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']);
            //$data=$this->request->getData();
           // debug($data);

        }
        $this->loadModel('Employes');

        /* create employes entity */
        if (1==1){
         $employes = $this->Employes->newEmptyEntity();
         $employes->nomprenom=$data->nomprenom;
         $employes->categorie_id=$data->categorie_id;
         $savedEmployes=$this->Employes->save($employes);
     }
        $this->loadModel('Moyennepoints');
        /* create moyennepoints entity */
        if (1==1){
            $moyennepoints = $this->Moyennepoints->newEmptyEntity();
            $moyennepoints->employe_id=$data->employe_id;
            $savedMoy=$this->Moyennepoints->save($moyennepoints);
        }

         /* create infoficheevaluations entity */
        if (1==1){
            $infoficheevaluations = $this->Infoficheevaluations->newEmptyEntity();
            $infoficheevaluations->objetevaluation=$data->objetevaluation;
            $infoficheevaluations->dateevaluation=$data->dateevaluation;
            $infoficheevaluations->decisiondirection=$data->decisiondirection;
            $infoficheevaluations->employe_id=$savedEmployes->id;
            $this->Infoficheevaluations->save($infoficheevaluations);
        }

        
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);

    }




    public function calculpoint(){

        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']);
            //$data=$this->request->getData();
            debug($data);

        }
       

        $this->loadModel('Pointindicateurs');
        /* create pointindicateurs entity */
           if (1==1)
           {
               foreach ($data as $pointindic)
               {
                // debug($pointindic);
                 

            $pointindicateurs = $this->Pointindicateurs->newEmptyEntity();
            $pointindicateurs->label=$pointindic->value ;

            $pointindicateurs->indicateursuivi_id=$pointindic->key;
        // debug($pointindicateurs);

        //$pointindicateurs->employe_id=$savedEmployes->id;

        $savedPointindic=$this->Pointindicateurs->save($pointindicateurs);
        //debug($savedPointindic);

                 
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
     * editInfoficheevaluation
     *
     * @Input:
     *         data:
     *          nomprenom (String) *Required
     *          objetevaluation(String) *Required
     *          dateevaluation (Date) *Required
     *          decisiondirection (String) *Required
     *          categorie_id(Int) *Required
     *
     * @Output: data : success message
     */
    public function editInfoficheevaluation(){

        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']);
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $infoficheevaluations=$this->Infoficheevaluations->get($id);
         /* create infoficheevaluations entity */
        if (1==1){
            $infoficheevaluations->nomprenom=$data->nomprenom;
            $infoficheevaluations->objetevaluation=$data->objetevaluation;
            $infoficheevaluations->dateevaluation=$data->dateevaluation;
            $infoficheevaluations->decisiondirection=$data->decisiondirection;
            $infoficheevaluations->categorie_id=$data->categorie_id;

            $this->Infoficheevaluations->save($infoficheevaluations);
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);

    }




   /**
      * getInfoficheevaluationByCat
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getInfoficheevaluationByEmployeId(){

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



        $infoficheevaluations = $this->Infoficheevaluations->find('all', [

            'contain' => [
                'Employes'
            ],
            'conditions'=>[
                'infoficheevaluations.employe_id IS'=>$id

            ],


        ])->toArray();

        if(empty($infoficheevaluations)){
           throw new UnauthorizedException('Infoficheevaluations not found');
       }

        /*send result */

        $this->set([
            'success' => true,
            'data' => $infoficheevaluations,
            '_serialize' => ['success', 'data']
        ]);
    }



    /**
      * getAllNom
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getAllNom(){

        $infoficheevaluations = $this->Infoficheevaluations->find('all', [
            'fields'=>[
                'id',
                'nomprenom'

            ],

        ])->toArray();

        /*send result */

        $this->set([
            'success' => true,
            'data' => $infoficheevaluations,
            '_serialize' => ['success', 'data']
        ]);
    }



}
