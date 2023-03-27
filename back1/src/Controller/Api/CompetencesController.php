<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Competences Controller
 *
 * @property \App\Model\Table\CompetencesTable $Competences
 * @method \App\Model\Entity\Competence[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CompetencesController extends AppController
{
    /**
    * getAllCompetence
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllCompetence()
    {

        /* search */
        $competences = $this->Competences->find('all',[
            'contain' => [
                'Categories'
            ]
        ]);
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $competences,
            '_serialize' => ['success', 'data']
        ]);
    }



    /**
      * getCompetence
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getCompetence(){
 
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

        $competences = $this->Competences->find('all', [
            'conditions'=>[
                'id IS'=>$id,
            ],
           
        ])->first();
        // debug($competences);die;
        
        if(empty($competences)){
           throw new UnauthorizedException('Competences not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $competences,
           '_serialize' => ['success', 'data']
       ]);
    }


    /**
     * editCompetence
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *          categorie_id (Int) *Required
     * 
     * @Output: data : success message
     */
    public function editCompetence(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $competences=$this->Competences->get($id);
         /* create competences entity */
        if (1==1){
            $competences->label=$data->label;
            $competences->categorie_id=$data->categorie_id;    

            $this->Competences->save($competences); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }
}
