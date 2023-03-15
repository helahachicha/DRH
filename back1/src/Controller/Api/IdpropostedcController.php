<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Idpropostedc Controller
 *
 * @method \App\Model\Entity\Idpropostedc[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IdpropostedcController extends AppController
{
     /**
    * getAllIdpropostedc
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllIdpropostedc()
    {

        /* search */
        $idpropostedc = $this->Idpropostedc->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $idpropostedc,
            '_serialize' => ['success', 'data']
        ]);
    }

    /**
     * editIdpropostedc
     *
     * @Input:
     *         data:
     *          majndc (Int) 
     *          dudc(Date)
     *          Fonctiondc (String)
     *          Categoriedc (String) 
     *          suphierdc (String) 
     *          Superdc (String) 
     *          Interimdc (String) 
     *          
     *         
     * @Output: data : success message
     */
    public function editIdpropostedc(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug ($data);die;
        }

        $id=$this->request->getQuery('id');
        $idpropostedc=$this->Idpropostedc->get($id);
         /* create Idpropostedc entity */
        if (1==1){
            $idpropostedc->majndc=$data->majndc;  
            $idpropostedc->dudc=$data->dudc;  
            $idpropostedc->Fonctiondc=$data->Fonctiondc;  
            $idpropostedc->Categoriedc=$data->Categoriedc;  
            $idpropostedc->suphierdc=$data->suphierdc;  
            $idpropostedc->Superdc=$data->Superdc; 
            $idpropostedc->Interimdc=$data->Interimdc; 

            $this->Idpropostedc->save($idpropostedc); 
        }
        /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Updated with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }

    /**
      *  getIdpropostedc
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getIdpropostedc(){
 
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

        $idpropostedc = $this->Idpropostedc->find('all', [
            'conditions'=>[
                'id IS'=>$id,
            ],
           
        ])->first();
        // debug($idproposte);die;
        
        if(empty($idpropostedc)){
           throw new UnauthorizedException('Coutformaexterne not found');
       }

       /*send result */

       $this->set([
           'success' => true,
           'data' => $idpropostedc,
           '_serialize' => ['success', 'data']
       ]);
    }
}
