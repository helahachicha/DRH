<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Niveauvises Controller
 *
 * @method \App\Model\Entity\Niveauvise[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NiveauvisesController extends AppController
{
   /**
     * addNiveauvise
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *          souscompetence_id(Int) *Required
     * @Output: data : success message
     */
    public function addNiveauvise(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create niveauvises entity */
        if (1==1){
            $niveauvises = $this->Niveauvises->newEmptyEntity();
            $niveauvises->label=$data->label;  
            $niveauvises->souscompetence_id=$data->souscompetence_id;  

            $this->Niveauvises->save($niveauvises); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

     /**
     * editNiveauvise
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *          souscompetence_id(Int) *Required
     *         
     * @Output: data : success message
     */
    public function editNiveauvise(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $niveauvises=$this->Niveauvises->get($id);
         /* create niveauvises entity */
        if (1==1){
            $niveauvises->label=$data->label;  
            $niveauvises->souscompetence_id=$data->souscompetence_id;  


            $this->Niveauvises->save($niveauvises); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
    * getAllNiveauvise
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllNiveauvise()
    {

        /* search */
        $niveauvises = $this->Niveauvises->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $niveauvises,
            '_serialize' => ['success', 'data']
        ]);
    }
    
    /**
      * getNiveauvise
      *
      * @Input: id
      *
      * @Output: data
      */
     public function getNiveauvise(){
 
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
 
         $niveauvises = $this->Niveauvises->find('all', [
             'conditions'=>[
                 'id IS'=>$id,
             ],
             ['contain'=>'Souscompetences']
         ])->first();
         // debug($niveauvises);die;
       
         if(empty($niveauvises)){
            throw new UnauthorizedException('Niveauvises not found');
        }

        /*send result */

        $this->set([
            'success' => true,
            'data' => $niveauvises,
            '_serialize' => ['success', 'data']
        ]);
     }

     /**
      * deleteNiveauvise
      *
      * @Input: id
      *
      * @Output: data
      */

     public function deleteNiveauvise(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $niveauvises = $this->Niveauvises->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete niveauvises  */

        if (1==1){
            $this->Niveauvises->delete($niveauvises);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }
}
