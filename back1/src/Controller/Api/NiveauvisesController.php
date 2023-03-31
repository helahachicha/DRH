<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Niveauvises Controller
 *
 * @property \App\Model\Table\NiveauvisesTable $Niveauvises
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
     *          categorie_id (Int) *Required
     *         
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
            $niveauvises->categorie_id=$data->categorie_id;       

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
    * getAllNiveauvise
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllNiveauvise()
    {

        /* search */
        $niveauvises = $this->Niveauvises->find('all',[
            'contain' => [
                'Categories'
            ]
        ]);
 
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
     * editNiveauvise
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *          categorie_id (Int) *Required
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
            $niveauvises->categorie_id=$data->categorie_id;    

            $this->Niveauvises->save($niveauvises); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


}
