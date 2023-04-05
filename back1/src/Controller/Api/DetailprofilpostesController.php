<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Detailprofilpostes Controller
 *
 * @method \App\Model\Entity\Detailprofilposte[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DetailprofilpostesController extends AppController
{
    /**
     * addDetailprofilpostes
     *
     * @Input:
     *         data:
     *          
     *         
     * @Output: data : success message
     */
    public function addDetailprofilpostes(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create detailprofilpostes entity */
        if (1==1){
            $detailprofilpostes = $this->Detailprofilpostes->newEmptyEntity();
            $detailprofilpostes->fonction=$data->fonction;  
            $detailprofilpostes->categorie_id=$data->categorie_id;  
            $detailprofilpostes->superhierar=$data->superhierar;  
            $detailprofilpostes->supervision=$data->supervision;  
            $detailprofilpostes->interim=$data->interim;   
            $detailprofilpostes->fonctionelaboration=$data->fonctionelaboration;  
            $detailprofilpostes->fonctionverification=$data->fonctionverification;  
            $detailprofilpostes->fonctionabrobation=$data->fonctionabrobation;  
            $detailprofilpostes->nomprenomelab=$data->nomprenomelab;  
            $detailprofilpostes->nomprenomverif=$data->nomprenomverif;  
            $detailprofilpostes->nomprenomabrob=$data->nomprenomabrob; 
     

            $this->Detailprofilpostes->save($detailprofilpostes); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }



    /**
     * editDetailprofilposte
     *
     * @Input:
     *         data:
     *          
     * 
     * @Output: data : success message
     */
    public function editDetailprofilposte(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
         //$data=$this->request->getData();
            //debug($data);die;
        }

        $id=$this->request->getQuery('id');
        $detailprofilpostes=$this->Detailprofilpostes->get($id);
         /* create detailprofilpostes entity */
        if (1==1){
            $detailprofilpostes->fonction=$data->fonction;  
            $detailprofilpostes->categorie_id=$data->categorie_id;  
            $detailprofilpostes->superhierar=$data->superhierar;  
            $detailprofilpostes->supervision=$data->supervision;  
            $detailprofilpostes->interim=$data->interim;   
            $detailprofilpostes->fonctionelaboration=$data->fonctionelaboration;  
            $detailprofilpostes->fonctionverification=$data->fonctionverification;  
            $detailprofilpostes->fonctionabrobation=$data->fonctionabrobation;  
            $detailprofilpostes->nomprenomelab=$data->nomprenomelab;  
            $detailprofilpostes->nomprenomverif=$data->nomprenomverif;  
            $detailprofilpostes->nomprenomabrob=$data->nomprenomabrob; 

            $this->Detailprofilpostes->save($detailprofilpostes); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


   
    /**
    * getAllNomDetailprofilposte
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllNomDetailprofilposte()
    {

        /* search */
        $detailprofilpostes = $this->Detailprofilpostes->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $detailprofilpostes,
            '_serialize' => ['success', 'data']
        ]);
    }


    /**
    * getAllDetailprofilposte
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllDetailprofilposte()
    {

        /* search */
        $detailprofilpostes = $this->Detailprofilpostes->find('all',[
            'contain' => [
                'Categories'
            ]
        ]);
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $detailprofilpostes,
            '_serialize' => ['success', 'data']
        ]);
    }
    
    /**
      * getDetailprofilposte
      *
      * @Input: id
      *
      * @Output: data
      */
     public function getDetailprofilposte(){
 
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
 
         $detailprofilpostes = $this->Detailprofilpostes->find('all', [
             'conditions'=>[
                 'id IS'=>$id,
             ],
            
         ])->first();
         // debug($detailprofilpostes);die;
         
         if(empty($detailprofilpostes)){
            throw new UnauthorizedException('Detailprofilpostes not found');
        }

        /*send result */

        $this->set([
            'success' => true,
            'data' => $detailprofilpostes,
            '_serialize' => ['success', 'data']
        ]);
     }

    /**
      * getDetailppByCat
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getDetailppByCat(){
 
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


        $detailprofilpostes = $this->Detailprofilpostes->find('all', [
             'contain' => [
               'Categories','Niveauvises','Competences.Indicateursuivis'
             ],
            'conditions'=>[
                'detailprofilpostes.categorie_id IS'=>$id,
            ],
            'contain' => [
                'Niveauvises', 'Categories','Competences.Indicateursuivis'
              ],
           
        ])->first();
        
        if(empty($detailprofilpostes)){
           throw new UnauthorizedException('Detailprofilpostes not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $detailprofilpostes,
           '_serialize' => ['success', 'data']
       ]);
    }

    
  
}
