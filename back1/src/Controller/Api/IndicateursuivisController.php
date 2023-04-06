<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Indicateursuivis Controller
 *
 * @property \App\Model\Table\IndicateursuivisTable $Indicateursuivis
 * @method \App\Model\Entity\Indicateursuivi[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IndicateursuivisController extends AppController
{



    /**
    * getAllIndicateursuivi
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllIndicateursuivi()
    {

        /* search */
        $indicateursuivis = $this->Indicateursuivis->find('all',[
            'contain' => [
                'Souscompetences'
            ]
        ]);
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $indicateursuivis,
            '_serialize' => ['success', 'data']
        ]);
    }

    /**
      * getIndicateursuivi
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getIndicateursuivi(){
 
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

        $indicateursuivis = $this->Indicateursuivis->find('all', [
            'conditions'=>[
                'id IS'=>$id,
            ],
           
        ])->first();
        // debug($indicateursuivis);die;
        
        if(empty($indicateursuivis)){
           throw new UnauthorizedException('Indicateursuivis not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $indicateursuivis,
           '_serialize' => ['success', 'data']
       ]);
    }


    /**
     * editIndicateursuivi
     *
     * @Input:
     *         data:
     *          label (String) *Required
     *          souscompetence_id (Int) *Required
     * 
     * @Output: data : success message
     */
    public function editIndicateursuivi(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $indicateursuivis=$this->Indicateursuivis->get($id);
         /* create indicateursuivis entity */
        if (1==1){
            $indicateursuivis->label=$data->label;
            $indicateursuivis->souscompetence_id=$data->souscompetence_id;    

            $this->Indicateursuivis->save($indicateursuivis); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }



    /**
      * getIndicateursuiviBySouscomp
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getIndicateursuiviByFormcomp(){
 
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

        $indicateursuivis = $this->Indicateursuivis->find('all', [

            'conditions'=>[
                'formcompetence_id IS'=>$id

            ],
           
           
        ])->toArray();

        if(empty($indicateursuivis)){
           throw new UnauthorizedException('Indicateursuivis not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $indicateursuivis,
           '_serialize' => ['success', 'data']
       ]);
    }



}
