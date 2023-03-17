<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Expproffrs Controller
 *
 * @method \App\Model\Entity\Expproffr[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExpproffrsController extends AppController
{
     /**
     * addExpproffr
     *
     * @Input:
     *         data:
     *          societeex (String) *Required
     *          duauex(String) *Required
     *          fonctionex (String) *Required
     *          inidiffex (String) *Required
     *          salaireex(String) *Required
     *         
     * @Output: data : success message
     */
    public function addExpproffr(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create expproffrs entity */
        if (1==1){
            $expproffrs = $this->Expproffrs->newEmptyEntity();
            $expproffrs->societeex=$data->societeex;  
            $expproffrs->duauex=$data->duauex;  
            $expproffrs->fonctionex=$data->fonctionex;  
            $expproffrs->inidiffex=$data->inidiffex;  
            $expproffrs->salaireex=$data->salaireex;  

            $this->Expproffrs->save($expproffrs); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

     /**
     * editExpproffr
     *
     * @Input:
     *         data:
     *          societeex (String) *Required
     *          duauex(String) *Required
     *          fonctionex (String) *Required
     *          inidiffex (String) *Required
     *          salaireex(String) *Required
     *         
     * @Output: data : success message
     */
    public function editExpproffr(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $expproffrs=$this->Expproffrs->get($id);
         /* create expproffrs entity */
        if (1==1){
            $expproffrs->societeex=$data->societeex;  
            $expproffrs->duauex=$data->duauex;  
            $expproffrs->fonctionex=$data->fonctionex;  
            $expproffrs->inidiffex=$data->inidiffex;  
            $expproffrs->salaireex=$data->salaireex;  

            $this->Expproffrs->save($expproffrs); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
    * getAllExpproffr
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllExpproffr()
    {

        /* search */
        $expproffrs = $this->Expproffrs->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $expproffrs,
            '_serialize' => ['success', 'data']
        ]);
    }
    
    /**
      * getExpproffr
      *
      * @Input: id
      *
      * @Output: data
      */
     public function getExpproffr(){
 
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
 
         $expproffrs = $this->Expproffrs->find('all', [
             'conditions'=>[
                 'id IS'=>$id,
             ],
            
         ])->first();
         // debug($expproffrs);die;
         
         if(empty($expproffrs)){
            throw new UnauthorizedException('Expproffrs not found');
        }

        /*send result */

        $this->set([
            'success' => true,
            'data' => $expproffrs,
            '_serialize' => ['success', 'data']
        ]);
     }
}
