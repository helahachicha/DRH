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
    /**
     * addInfoprofessionnelle
     *
     * @Input:
     *         data:
     *          nomprenom (String) *Required
     *          adresse (String) *Required
     *          telprofessionnel(Int) *Required
     *          telpersonnel (Int) *Required
     *          contact (String) *Required
     *          mailprofessionnel(String) *Required
     *          mailpersonnel (String) *Required
     *          service(String) *Required
     *          poste (String) *Required
     * 
     *         
     * @Output: data : success message
     */
    public function addInfoprofessionnelle(){
        $this->loadModel('Infopersonnelles');
        $this->loadModel('Activiteloisirfrs');
        $this->loadModel('Points');
        $this->loadModel('Casmariages');
        $this->loadModel('Enfants');
        $this->loadModel('Formacademiques');
        $this->loadModel('Formacomplementaires');
        $this->loadModel('Expprofessionnelles');
        $this->loadModel('Langues');
        $this->request->allowMethod(['post', 'put']);

        /* format data */
        if (1 == 1) {
            $querry=$this->request->getData();
            $data=json_decode($querry['data']); 
            //$data=$this->request->getData();
            //debug($data);die;

        }
         /* create infoprofessionnelles entity */
         if (1==1){
            $infoprofessionnelles = $this->Infoprofessionnelles->newEmptyEntity();
            $infoprofessionnelles->nomprenom=$data->nomprenom;
            $infoprofessionnelles->adresse=$data->adresse;
            $infoprofessionnelles->telprofessionnel=$data->telprofessionnel;
            $infoprofessionnelles->telpersonnel=$data->telpersonnel;
            $infoprofessionnelles->contact=$data->contact;
            $infoprofessionnelles->mailprofessionnel=$data->mailprofessionnel;
            $infoprofessionnelles->mailpersonnel=$data->mailpersonnel;
            $infoprofessionnelles->service=$data->service;
            $infoprofessionnelles->poste=$data->poste;
            
            $savedProfil=$this->Infoprofessionnelles->save($infoprofessionnelles);
        }
         /* create infopersonnelles entity */
         if (1==1){
            $infopersonnelles = $this->Infopersonnelles->newEmptyEntity();
            $infopersonnelles->daten=$data->daten;
            $infopersonnelles->lieu=$data->lieu;
            $infopersonnelles->nationalite=$data->nationalite;
            $infopersonnelles->ncin=$data->ncin;
            $infopersonnelles->delivreecin=$data->delivreecin;
            $infopersonnelles->datecin=$data->datecin;
            $infopersonnelles->permis=$data->permis;
            $infopersonnelles->datepermis=$data->datepermis;
            $infopersonnelles->logement=$data->logement;
            $infopersonnelles->moyentransport=$data->moyentransport;
            $infopersonnelles->heure=$data->heure;
            $infopersonnelles->minute=$data->minute;
            $infopersonnelles->situationfamiliale=$data->situationfamiliale;
            $infopersonnelles->datemariedivorce=$data->datemariedivorce;
            $infopersonnelles->infoprofessionnelle_id=$data->infoprofessionnelle_id;

            $savedProfil=$this->Infopersonnelles->save($infopersonnelles);
        }
         /* create activiteloisirfrs entity */
        if (1==1){
            $activiteloisirfrs = $this->Activiteloisirfrs->newEmptyEntity();
            $activiteloisirfrs->activitesportive=$data->activitesportive;
            $activiteloisirfrs->lequelsport=$data->lequelsport;
            $activiteloisirfrs->activitecreative=$data->activitecreative;
            $activiteloisirfrs->lequelcreative=$data->lequelcreative;
            $activiteloisirfrs->activiteinventivite=$data->activiteinventivite;
            $activiteloisirfrs->activitecorporelle=$data->activitecorporelle;
            $activiteloisirfrs->jeureflexion=$data->jeureflexion;
            $activiteloisirfrs->exerceractivite=$data->exerceractivite;
            $activiteloisirfrs->pourquoiexercer=$data->pourquoiexercer;
            $activiteloisirfrs->salledesport=$data->salledesport;
            $activiteloisirfrs->joursdispo=$data->joursdispo;
            $activiteloisirfrs->critereenfance=$data->critereenfance;
            $activiteloisirfrs->beaumoment=$data->beaumoment;
            $activiteloisirfrs->mauvaismoment=$data->mauvaismoment;
            $activiteloisirfrs->activitebenevolat=$data->activitebenevolat;
            $activiteloisirfrs->lequelbenevolat=$data->lequelbenevolat;
            $activiteloisirfrs->lieuact=$data->lieuact;
            $activiteloisirfrs->exercezactivite=$data->exercezactivite;
            $activiteloisirfrs->infoprofessionnelle_id=$data->infoprofessionnelle_id;
            $savedProfil=$this->Activiteloisirfrs->save($activiteloisirfrs);
        }
        /* create points entity */
        if (1==1){
            $points = $this->Points->newEmptyEntity();
            $points->pointforce=$data->pointforce;
            $points->pointameliore=$data->pointameliore;
            $points->infoprofessionnelle_id=$data->infoprofessionnelle_id;
            $savedProfil=$this->Points->save($points);
        }
           /* create casmariages entity */
           if(1==1){
            $casmariages = $this->Casmariages->newEmptyEntity();

            $casmariages->nomprenomep=$data->nomprenomep;  
            $casmariages->datenep=$data->datenep;  
            $casmariages->niveauetudeep=$data->niveauetudeep;  
            $casmariages->fonctionep=$data->fonctionep;  
            $casmariages->salaireep=$data->salaireep;   
            $casmariages->etatep=$data->etatep;  
            $casmariages->infoprofessionnelle_id=$data->infoprofessionnelle_id;  
            
            $this->Casmariages->save($casmariages); 
      
        }
        /* create enfants entity */
        if (1==1){
            $enfants = $this->Enfants->newEmptyEntity();
            $enfants->ordre=$data->ordre;
            $enfants->prenom=$data->prenom;
            $enfants->daten=$data->daten;
            $enfants->niveauetude=$data->niveauetude;
            $enfants->centreinteret=$data->centreinteret;
            $enfants->etatsante=$data->etatsante;
            $enfants->infoprofessionnelle_id=$data->infoprofessionnelle_id;

            $savedProfil=$this->Enfants->save($enfants);
        }
        /* create formacademiques entity */
        if (1==1){
            $formacademiques = $this->Formacademiques->newEmptyEntity();
            $formacademiques->niveau=$data->niveau;
            $formacademiques->specialite=$data->specialite;
            $formacademiques->annee=$data->annee;
            $formacademiques->etablissement=$data->etablissement;
            $formacademiques->infoprofessionnelle_id=$data->infoprofessionnelle_id;

            $savedProfil=$this->Formacademiques->save($formacademiques);
        }
        /* create formacomplementaires entity */
        if (1==1){
            $formacomplementaires = $this->Formacomplementaires->newEmptyEntity();
            $formacomplementaires->formation=$data->formation;
            $formacomplementaires->attestation=$data->attestation;
            $formacomplementaires->annee=$data->annee;
            $formacomplementaires->etablissement=$data->etablissement;
            $formacomplementaires->infoprofessionnelle_id=$data->infoprofessionnelle_id;

            $savedProfil=$this->Formacomplementaires->save($formacomplementaires);
        }
        /* create expprofessionnelles entity */
        if (1==1){
            $expprofessionnelles = $this->Expprofessionnelles->newEmptyEntity();
            $expprofessionnelles->societe=$data->societe;
            $expprofessionnelles->periode=$data->periode;
            $expprofessionnelles->fonction=$data->fonction;
            $expprofessionnelles->initiative=$data->initiative;
            $expprofessionnelles->salaire=$data->salaire;
            $expprofessionnelles->infoprofessionnelle_id=$data->infoprofessionnelle_id;
            $savedProfil=$this->Expprofessionnelles->save($expprofessionnelles);
        }

        /* create langues entity */
        if (1==1){
            $langues = $this->Langues->newEmptyEntity();
            $langues->arabe=$data->arabe;
            $langues->francais=$data->francais;
            $langues->anglais=$data->anglais;
            $langues->autre=$data->autre;
            $langues->infoprofessionnelle_id=$data->infoprofessionnelle_id;

            $savedProfil=$this->Langues->save($langues);
        }
         /*send result */
        $this->set([
            'success' => true,
            'data' =>  "Added with success",
            '_serialize' => ['success', 'data']
        ]);
    
    }
}
