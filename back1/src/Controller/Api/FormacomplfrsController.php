<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Formacomplfrs Controller
 *
 * @method \App\Model\Entity\Formacomplfr[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FormacomplfrsController extends AppController
{
    /**
     * addFormacomplfr
     *
     * @Input:
     *         data:
     *          formationf   (String) *Required
     *          attestationf(String) *Required
     *          anneef (year) *Required
     *          etablissementf (String) *Required
     * @Output: data : success message
     */
    public function addFormacomplfr(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            //$querry=$this->request->getData();
            //$data=json_decode($querry['data']); 
            $data=$this->request->getData();
            debug($data);die;

        }
         /* create formacomplfrs entity */
        if (1==1){
            $formacomplfrs = $this->Formacomplfrs->newEmptyEntity();
            $formacomplfrs->formationf=$data->formationf;  
            $formacomplfrs->attestationf=$data->attestationf;  
            $formacomplfrs->anneef=$data->anneef;  
            $formacomplfrs->etablissementf=$data->etablissementf;    

            $this->Formacomplfrs->save($formacomplfrs); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

     /**
     * editFormacomplfr
     *
     * @Input:
     *         data:
     *          formationf   (String) *Required
     *          attestationf(String) *Required
     *          anneef (year) *Required
     *          etablissementf (String) *Required
     *         
     * @Output: data : success message
     */
    public function editFormacomplfr(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $formacomplfrs=$this->Formacomplfrs->get($id);
         /* create formacomplfrs entity */
        if (1==1){
            $formacomplfrs->formationf=$data->formationf;  
            $formacomplfrs->attestationf=$data->attestationf;  
            $formacomplfrs->anneef=$data->anneef;  
            $formacomplfrs->etablissementf=$data->etablissementf;  

            $this->Formacomplfrs->save($formacomplfrs); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
    * getAllFormacomplfr
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllFormacomplfr()
    {

        /* search */
        $formacomplfrs = $this->Formacomplfrs->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $formacomplfrs,
            '_serialize' => ['success', 'data']
        ]);
    }
    
    /**
      * getFormacomplfr
      *
      * @Input: id
      *
      * @Output: data
      */
     public function getFormacomplfr(){
 
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
 
         $formacomplfrs = $this->Formacomplfrs->find('all', [
             'conditions'=>[
                 'id IS'=>$id,
             ],
            
         ])->first();
         // debug($formacomplfr);die;
         
         if(empty($formacomplfrs)){
            throw new UnauthorizedException('Formacomplfrs not found');
        }

        /*send result */

        $this->set([
            'success' => true,
            'data' => $formacomplfrs,
            '_serialize' => ['success', 'data']
        ]);
     }
}
