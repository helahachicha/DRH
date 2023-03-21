<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Fecomminteras Controller
 *
 * @method \App\Model\Entity\Fecommintera[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FecomminterasController extends AppController
{
   /**
     * addFecommintera
     *
     * @Input:
     *         data:
     *          numeroci(int) *Required
     *          indimesureci (String) *Required
     *          pointsci (int) *Required
     * 
     * @Output: data : success message
     */
    public function addFecommintera(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create fecomminteras entity */
        if (1==1){
            $fecomminteras = $this->Fecomminteras->newEmptyEntity();
            $fecomminteras->numeroci=$data->numeroco;  
            $fecomminteras->indimesureci=$data->indimesureco;  
            $fecomminteras->pointsci=$data->pointsco;  

            $this->Fecomminteras->save($fecomminteras); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

 /**
     * editFecommintera
     *
     * @Input:
     *         data:
     *          numeroci(int) *Required
     *          indimesureci (String) *Required
     *          pointsci (int) *Required
     * @Output: data : success message
     */
    public function editFecommintera(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $fecomminteras=$this->Fecomminteras->get($id);
         /* create fecomporganisations entity */
        if (1==1){
            $fecomminteras->numeroci=$data->numeroco;  
            $fecomminteras->indimesureci=$data->indimesureco;  
            $fecomminteras->pointsci=$data->pointsco;  

            $this->Fecomminteras->save($fecomminteras); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updatesd with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

    /**
    * getAllFecommintera
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllFecommintera()
    {

        /* search */
        $fecomminteras = $this->Fecomminteras->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $fecomminteras,
            '_serialize' => ['success', 'data']
        ]);
    }

    /**
      * getFecommintera
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getFecommintera(){
 
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

        $fecomminteras = $this->Fecomminteras->find('all', [
            'conditions'=>[
                'id IS'=>$id,
            ],
           
        ])->first();
        // debug($fecomminteras);die;
        
        if(empty($fecomminteras)){
           throw new UnauthorizedException('Fecomminteras not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $fecomminteras,
           '_serialize' => ['success', 'data']
       ]);
    }
}
