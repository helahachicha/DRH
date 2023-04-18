<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\Controller\AppController;

/**
 * Informationprofessionnelles Controller
 *
 * @method \App\Model\Entity\Informationprofessionnelle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InformationprofessionnellesController extends AppController
{
/**
     * addFicherenseignement
     *
     * @Input:
     *         data:
     *          
     *         
     * @Output: data : success message
     */
    public function addFicherenseignement(){

        $this->loadModel('activiteloisirs');
        $this->loadModel('conjoints');
        $this->loadModel('enfants');
        $this->loadModel('experienceprofessionnelles');
        $this->loadModel('formaacademiques');
        $this->loadModel('formacomplementaires');
        $this->loadModel('informationpersonnelles');
        $this->loadModel('langues');
        $this->loadModel('performances');
      
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            // debug($data);die;

        }
         /* create Informationprofessionnelles entity */
        if (1==1){
            $informationprofessionnelles = $this->Informationprofessionnelles->newEmptyEntity();
            $informationprofessionnelles->nomprenom=$data->nomprenom;
            $informationprofessionnelles->adresse=$data->adresse;
            $informationprofessionnelles->telprofessionnel=$data->telprofessionnel;
            $informationprofessionnelles->telpersonnel=$data->telpersonnel;
            $informationprofessionnelles->contact=$data->contact;
            $informationprofessionnelles->mailprofessionnel=$data->mailprofessionnel;
            $informationprofessionnelles->mailpersonnel	=$data->mailpersonnel	;
            $informationprofessionnelles->service=$data->service;
            $informationprofessionnelles->poste=$data->poste;
            $savedProfil=$this->Informationprofessionnelles->save($informationprofessionnelles);

        }
        /* create Informationpersonnelles entity */
        if (1==1){
            foreach ($infoprof->infopersonnel as $infopersonnel) {
 
               $informationpersonnelles = $this->Informationpersonnelles->newEmptyEntity();
               $informationpersonnelles->datenaissance=$infopersonnel->datenaissance;
               $informationpersonnelles->lieunaissance=$infopersonnel->lieunaissance;
               $informationpersonnelles->nationalite=$infopersonnel->nationalite;
               $informationpersonnelles->ncin=$infopersonnel->ncin;
               $informationpersonnelles->lieucin=$infopersonnel->lieucin;
               $informationpersonnelles->datecin=$infopersonnel->datecin;
               $informationpersonnelles->permis=$infopersonnel->permis;
               $informationpersonnelles->datepermis=$infopersonnel->datepermis;
               $informationpersonnelles->logement=$infopersonnel->logement;
               $informationpersonnelles->moyentransport=$infopersonnel->moyentransport;
               $informationpersonnelles->minutetrajet=$infopersonnel->minutetrajet;
               $informationpersonnelles->heuretrajet=$infopersonnel->heuretrajet;
               $informationpersonnelles->situationfamiliale=$infopersonnel->situationfamiliale;
               $informationpersonnelles->datesituation=$infopersonnel->datesituation;
               $informationpersonnelles->critereenfance=$infopersonnel->critereenfance;
               $informationpersonnelles->beaumoment=$infopersonnel->beaumoment;
               $informationpersonnelles->mauvaismoment=$infopersonnel->mauvaismoment;
               $informationpersonnelles->informationprofessionnelle_id= $savedInfoprof->id;
               $savedProfil=$this->Informationpersonnelles->save($informationpersonnelles);
           }
          
        }
        /* create Activiteloisirs entity */
        if (1==1){
            foreach ($infoprof->actloisir as $actloisir) {
 
               $activiteloisirs = $this->Activiteloisirs->newEmptyEntity();
               $activiteloisirs->activitesportive=$actloisir->activitesportive;
               $activiteloisirs->lequelactsportive=$actloisir->lequelactsportive;
               $activiteloisirs->activitecreative=$actloisir->activitecreative;
               $activiteloisirs->activiteinventivite=$actloisir->activiteinventivite;
               $activiteloisirs->activitecorporelle=$actloisir->activitecorporelle;
               $activiteloisirs->jeureflexion=$actloisir->jeureflexion;
               $activiteloisirs->exerceractivite=$actloisir->exerceractivite;
               $activiteloisirs->pourquoiexercer=$actloisir->pourquoiexercer;
               $activiteloisirs->sallesport=$actloisir->sallesport;
               $activiteloisirs->disposallesport=$actloisir->disposallesport;
               $activiteloisirs->activitebenevolat=$actloisir->activitebenevolat;
               $activiteloisirs->lequelactbenevolat=$actloisir->lequelactbenevolat;
               $activiteloisirs->lieuactbenevolat=$actloisir->lieuactbenevolat;
               $activiteloisirs->exerceractbenevolat=$actloisir->exerceractbenevolat;
               $activiteloisirs->informationprofessionnelle_id= $savedActloisir->id;
               $savedProfil=$this->Activiteloisirs->save($activiteloisirs);
           }
          
        }
        /* create Performances entity */
        if (1==1){
            foreach ($infoprof->performance as $performance) {
 
               $performances = $this->Performances->newEmptyEntity();
               $performances->pointsforce=$performance->pointsforce;
               $performances->pointsameliore=$performance->pointsameliore;
               $performances->informationprofessionnelle_id= $savedPerformance->id;
               $savedProfil=$this->Performances->save($performances);
           }
          
        }
        /* create Conjoints entity */
        if (1==1){
            foreach ($infoprof->conjoint as $conjoint) {
 
               $conjoints = $this->Conjoints->newEmptyEntity();
               $conjoints->nomprenomep=$conjoint->nomprenomep;
               $conjoints->datenaissanceep=$conjoint->datenaissanceep;
               $conjoints->niveauetudeep=$conjoint->niveauetudeep;
               $conjoints->fonctionep=$conjoint->fonctionep;
               $conjoints->etatep=$conjoint->etatep;
               $conjoints->salaireep=$conjoint->salaireep;
               $conjoints->informationprofessionnelle_id= $savedConjoint->id;
               $savedProfil=$this->Conjoints->save($conjoints);
           }
          
        }
        /* create Enfants entity */
        if (1==1){
            foreach ($infoprof->enfant as $enfant) {
 
               $enfants = $this->Enfants->newEmptyEntity();
               $enfants->ordre=$enfant->ordre;
               $enfants->prenom=$enfant->prenom;
               $enfants->datenaissancee=$enfant->datenaissancee;
               $enfants->niveauetude=$enfant->niveauetude;
               $enfants->centreinteret=$enfant->centreinteret;
               $enfants->etatsante=$enfant->etatsante;
               $enfants->informationprofessionnelle_id= $savedEnfant->id;
               $savedProfil=$this->Enfants->save($enfants);
           }
          
        }
        /* create Formaacademiques entity */
        if (1==1){
            foreach ($infoprof->formaacademique as $formaacademique) {
 
               $formaacademiques = $this->Formaacademiques->newEmptyEntity();
               $formaacademiques->niveau=$formaacademique->niveau;
               $formaacademiques->specialite=$formaacademique->specialite;
               $formaacademiques->annee=$formaacademique->annee;
               $formaacademiques->etablissement=$formaacademique->etablissement;
               $formaacademiques->informationprofessionnelle_id= $savedFormaacademique->id;
               $savedProfil=$this->Formaacademiques->save($formaacademiques);
           }
          
        }
        /* create Formacomplementaire entity */
        if (1==1){
            foreach ($infoprof->formacomplementaire as $formacomplementaire) {
 
               $formacomplementaires = $this->Formacomplementaire->newEmptyEntity();
               $formacomplementaires->formation=$formacomplementaire->formation;
               $formacomplementaires->attestation=$formacomplementaire->attestation;
               $formacomplementaires->anne=$formacomplementaire->anne;
               $formacomplementaires->etablissements=$formacomplementaire->etablissements;
               $formacomplementaires->informationprofessionnelle_id= $savedFormacomplementaire->id;
               $savedProfil=$this->Formacomplementaire->save($formacomplementaires);
           }
          
        }
        /* create Experienceprofessionnelles entity */
        if (1==1){
            foreach ($infoprof->experienceprofessionnelle as $experienceprofessionnelle) {
 
               $experienceprofessionnelles = $this->Experienceprofessionnelles->newEmptyEntity();
               $experienceprofessionnelles->societe=$experienceprofessionnelle->societe;
               $experienceprofessionnelles->periode=$experienceprofessionnelle->periode;
               $experienceprofessionnelles->fonction=$experienceprofessionnelle->fonction;
               $experienceprofessionnelles->initiative=$experienceprofessionnelle->initiative;
               $experienceprofessionnelles->salaire=$experienceprofessionnelle->salaire;
               $experienceprofessionnelles->informationprofessionnelle_id= $savedExpprof->id;
               $savedProfil=$this->Experienceprofessionnelles->save($experienceprofessionnelles);
           }
          
        }
        /* create Langues entity */
        if (1==1){
            foreach ($infoprof->langue as $langue) {
 
               $langues = $this->Langues->newEmptyEntity();
               $langues->arabe=$langue->arabe;
               $langues->francais=$langue->francais;
               $langues->anglais=$langue->anglais;
               $langues->autre=$langue->autre;
               $langues->informationprofessionnelle_id= $savedLangue->id;
               $savedProfil=$this->Langues->save($langues);
           }
          
        }
      



         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }
    
    
}
