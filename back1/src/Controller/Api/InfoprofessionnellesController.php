<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Infoprofessionnelles Controller
 *
 * @method \App\Model\Entity\Infoprofessionnelle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InfoprofessionnellesController extends AppController
{
    public function insertInfoprofessionnelle(Request $request)
    {
        $request -> validate([
        ' daten ' =>'required ',
        ' lieu' => 'required ',
        ' nationalite ' =>'required ',
        ' ncin' => 'required ',
        ' delivreecin ' =>'required ',
        ' datecin' => 'required ',
        ' permis ' =>'required ',
        ' datepermis ' =>'required ',
        ' logement' => 'required ',
        ' moyentransport ' =>'required ',
        ' heure' => 'required ',
        ' minute ' =>'required ',
        ' situationfamiliale' => 'required ',
        ' datemariedivorce ' =>'required ',
        ]);
        
        $user = new Infoprofessionnelles ;
        
        $user->daten = $request->daten;
        $user->lieu = $request->lieu;
        $user->nationalite = $request->nationalite;
        $user->ncin = $request->ncin;
        $user->delivreecin = $request->delivreecin;
        $user->datecin = $request->datecin;
        $user->permis = json_encode($request->permis);
        $user->datepermis = $request->datepermis;
        $user->logement= json_encode($request->logement);
        $user->moyentransport = json_encode($request->moyentransport);
        $user->heure = $request->heure;
        $user->minute = $request->minute;
        $user->situationfamiliale= json_encode($request->situationfamiliale);
        $user->datemariedivorce = $request->datemariedivorce;
        

        
        $user->save();
        return redirect()->back();
    }

}
