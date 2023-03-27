<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Themeformations Controller
 *
 * @method \App\Model\Entity\Themeformation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ThemeformationsController extends AppController
{
   /**
     * addThemeformation
     *
     * @Input:
     *         data:
     *          nom (String) *Required
     *         
     * @Output: data : success message
     */
    public function addThemeformation(){
        
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create themeformations entity */
        if (1==1){
            $themeformations = $this->Themeformations->newEmptyEntity();
            $themeformations->nom=$data->nom;  

            $this->Themeformations->save($themeformations); 
        }
       
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }


    /**
    * getAllThemeformation
    *
    * @Input: nothing
    *
    * @Output: data
    */
    public function getAllThemeformation()
    {

        /* search */
        $themeformations = $this->Themeformations->find('all');
 
        /*send result */
        $this->set([
            'success' => true,
            'data' => $themeformations,
            '_serialize' => ['success', 'data']
        ]);
    }


    /**
      * deleteThemeformation
      *
      * @Input: id
      *
      * @Output: data
      */

      public function deleteThemeformation(){

        $id = $this->request->getQuery('id');

        $this->request->allowMethod(['post','delete']);

        /* search */

        $themeformations = $this->Themeformations->find('all', [
            'conditions'=>[
                'id'=>$id,
            ],
           
        ])->first();

        /* delete themeformations  */

        if (1==1){
            $this->Themeformations->delete($themeformations);
        }

        /*send result */

            $this->set([
                'success' => true,
                'data' => "Deleted with success",
                '_serialize' => ['success','data']
            ]);
        }


}
