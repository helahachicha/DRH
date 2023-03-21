<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Fecomporganisations Controller
 *
 * @method \App\Model\Entity\Fecomporganisation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FecomporganisationsController extends AppController
{
     /**
     * addFecomporganisation
     *
     * @Input:
     *         data:
     *          numeroco (int) *Required
     *          indimesureco (String) *Required
     *          pointsco (int) *Required
     * 
     * @Output: data : success message
     */
    public function addFecomporganisation(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create fecomporganisations entity */
        if (1==1){
            $fecomporganisations = $this->Fecomporganisations->newEmptyEntity();
            $fecomporganisations->numeroco=$data->numeroco;  
            $fecomporganisations->indimesureco=$data->indimesureco;  
            $fecomporganisations->pointsco=$data->pointsco;  

            $this->Fecomporganisations->save($fecomporganisations); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

 /**
     * editFecomporganisation
     *
     * @Input:
     *         data:
     *          numeroco (int) *Required
     *          indimesureco (String) *Required
     *          pointsco (int) *Required
     * @Output: data : success message
     */
    public function editFecomporganisation(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $fecomporganisations=$this->Fecomporganisations->get($id);
         /* create fecomporganisations entity */
        if (1==1){
            $fecomporganisations->numeroco=$data->numeroco;  
            $fecomporganisations->indimesureco=$data->indimesureco;  
            $fecomporganisations->pointsco=$data->pointsco;  

            $this->Fecomporganisations->save($fecomporganisations); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updatesd with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

    /**
    * getAllFecomporganisation
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllFecomporganisation()
    {

        /* search */
        $fecomporganisations = $this->Fecomporganisations->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $fecomporganisations,
            '_serialize' => ['success', 'data']
        ]);
    }

    /**
      * getFecomporganisation
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getFecomporganisation(){
 
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

        $fecomporganisations = $this->Fecomporganisations->find('all', [
            'conditions'=>[
                'id IS'=>$id,
            ],
           
        ])->first();
        // debug($fecomporganisations);die;
        
        if(empty($fecomporganisations)){
           throw new UnauthorizedException('Fecomporganisations not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $fecomporganisations,
           '_serialize' => ['success', 'data']
       ]);
    }
}
