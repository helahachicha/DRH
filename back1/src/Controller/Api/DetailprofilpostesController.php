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
            'fields' => [
                'id','categorie'
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

  
}
