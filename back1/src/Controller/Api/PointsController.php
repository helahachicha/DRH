<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Points Controller
 *
 * @method \App\Model\Entity\Point[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PointsController extends AppController
{
     /**
      * getPointBySouscompetence
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getPointBySouscompetence(){
 
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

        $points = $this->Points->find('all', [

            'conditions'=>[
                'souscompetence_id IS'=>$id
            ],
            'fields'=>[
                'point'
            ],
           
           
        ])->toArray();

        if(empty($points)){
           throw new UnauthorizedException('Points not found');
       }
       
       /*send result */

       $this->set([
           'Somme' => $S,
           'success' => true,
           'data' => $points,
           '_serialize' => ['success' , 'data' , 'Somme'], 
       ]);
    }


    
    /**
      * getIndicateursuiviBySouscomp
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getIndicateursuiviBySouscomp(){
 
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
                'souscompetence_id IS'=>$id

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

    public function Calcul(){

           /*Calcul Score  */

           $points = $this->getPointBySouscompetence();
           $indicateursuivis = $this->getIndicateursuiviBySouscomp();
           $S=0;
           foreach ($points as $point) {
            $S += $point->point;
        }
            $indicateursuivis = $this->Indicateursuivis->count();
    
            $moyenne=0;
            $moyenne=$S/$indicateursuivis;

        /*send result */

        $this->set([
            'success' => true,
            'Moyenne' => $moyenne,
            '_serialize' => ['success', 'Moyenne']
        ]);
    }
        
}

