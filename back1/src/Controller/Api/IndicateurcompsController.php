<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Indicateurcomps Controller
 *
 * @property \App\Model\Table\IndicateurcompsTable $Indicateurcomps
 * @method \App\Model\Entity\Indicateurcomp[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IndicateurcompsController extends AppController
{
    /**
     * addIndicateurcomp
     *
     * @Input:
     *         data:
     *          label (Float) *Required
     *          souscompetence_id(Float) *Required
     *         
     * @Output: data : success message
     */
    public function addIndicateurcomp(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create indicateurcomps entity */
        if (1==1){
            $indicateurcomps = $this->Indicateurcomps->newEmptyEntity();
            $indicateurcomps->label=$data->label;  
            $indicateurcomps->souscompetence_id=$data->souscompetence_id;  

            $this->Indicateurcomps->save($indicateurcomps); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

     /**
     * editIndicateurcomp
     *
     * @Input:
     *         data:
     *          label (Float) *Required
     *          souscompetence_id(Float) *Required
     *         
     * @Output: data : success message
     */
    public function editIndicateurcomp(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $indicateurcomps=$this->Indicateurcomps->get($id);
         /* create indicateurcomps entity */
        if (1==1){
            $indicateurcomps->label=$data->label;  
            $indicateurcomps->souscompetence_id=$data->souscompetence_id;  

            $this->Indicateurcomps->save($indicateurcomps); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
    * getAllIndicateurcomp
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllIndicateurcomp()
    {

        /* search */
        $indicateurcomps = $this->Indicateurcomps->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $indicateurcomps,
            '_serialize' => ['success', 'data']
        ]);
    }
    
    /**
      * getIndicateurcomp
      *
      * @Input: id
      *
      * @Output: data
      */
     public function getIndicateurcomp(){
 
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
 
         $indicateurcomps = $this->Indicateurcomps->find('all', [
             'conditions'=>[
                 'id IS'=>$id,
             ],
            
         ])->first();
         // debug($indicateurcomps);die;
         
         if(empty($indicateurcomps)){
            throw new UnauthorizedException('Indicateurcomps not found');
        }

        /*send result */

        $this->set([
            'success' => true,
            'data' => $indicateurcomps,
            '_serialize' => ['success', 'data']
        ]);
     }

     /**
      * deleteIndicateurcomp
      *
      * @Input: id
      *
      * @Output: data
      */

     public function deleteIndicateurcomp(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $indicateurcomps = $this->Indicateurcomps->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete indicateurcomps  */

        if (1==1){
            $this->Indicateurcomps->delete($indicateurcomps);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }
}
