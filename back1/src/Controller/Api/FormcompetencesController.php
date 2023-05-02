<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Formcompetences Controller
 *
 * @property \App\Model\Table\FormcompetencesTable $Formcompetences
 * @method \App\Model\Entity\Formcompetence[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FormcompetencesController extends AppController
{
    $newArray = [];

        foreach($detailprofilpostes->formcompetences as $value) {
          foreach ($value->competence as $comp) {
            foreach ($comp->indicateursuivis as $ind) {
              if($ind->detailprofilposte_id == $id) {
                array_push($newArray, $detailprofilpostes);
              }
            } 
          }
        }
        //debug($newArray);die;
    
}
