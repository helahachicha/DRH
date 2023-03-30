<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Noteindicateurs Controller
 *
 * @method \App\Model\Entity\Noteindicateur[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NoteindicateursController extends AppController
{
    /**
      * getNoteindicateurBySouscompetence
      *
      * @Input: id
      *
      * @Output: data
      */
      public function getNoteindicateurBySouscompetence(){
 
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

        $noteindicateurs = $this->Noteindicateurs->find('all', [

            'conditions'=>[
                'souscompetence_id IS'=>$id
            ],
            'fields'=>[
                'point'
            ],
           
           
        ])->toArray();

        if(empty($noteindicateurs)){
           throw new UnauthorizedException('Noteindicateurs not found');
       }
       
       /*send result */

       $this->set([
           'Somme' => $S,
           'success' => true,
           'data' => $noteindicateurs,
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

    /* function Calcul */

    public function Calcul(){

           /*Calcul Score  */

           $points = $this->getPointBySouscompetence();
           $noteindicateurs = $this->getNoteindicateurBySouscompetence();
           $S=0;
           foreach ($points as $point) {
            $S += $point->point;
        }
            $noteindicateurs = $this->Noteindicateurs->count();
    
            $moyenne=0;
            $moyenne=$S/$noteindicateurs;

        /*send result */

        $this->set([
            'success' => true,
            'Moyenne' => $moyenne,
            '_serialize' => ['success', 'Moyenne']
        ]);
    }
}
