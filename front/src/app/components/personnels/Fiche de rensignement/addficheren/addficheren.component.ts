import { Component, OnInit } from '@angular/core';
import { FormArray, FormControl, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-addficheren',
  templateUrl: './addficheren.component.html',
  styleUrls: ['./addficheren.component.scss']
})
export class AddficherenComponent implements OnInit {
public Infoprofessionnelles
  public moyenForm = new FormGroup({
    label: new FormArray([]),
    sport: new FormArray([]), 
    Creative: new FormArray([]), 
    Dinventivite: new FormArray([]),
    corporelle: new FormArray([]),

    nomprenom: new FormControl('', [Validators.required]),
    adresse: new FormControl('', [Validators.required]),
    telprofessionnel: new FormControl('', [Validators.required]),
    telpersonnel: new FormControl('', [Validators.required]),
    contact: new FormControl('', [Validators.required]),
    mailprofessionnel: new FormControl('', [Validators.required]),
    mailpersonnel: new FormControl('', [Validators.required]),
    service: new FormControl('', [Validators.required]),
    poste: new FormControl('', [Validators.required]),
    datenaissance: new FormControl('', [Validators.required]),
    lieunaissance: new FormControl('', [Validators.required]),
    nationalite: new FormControl('', [Validators.required]),
    ncin: new FormControl('', [Validators.required]),
    lieucin: new FormControl('', [Validators.required]),
    datecin: new FormControl('', [Validators.required]),
    permis: new FormControl('', [Validators.required]),
    datepermis: new FormControl('', [Validators.required]),
    logement: new FormControl('', [Validators.required]),
    moyentransport: new FormControl('', [Validators.required]),
    heuretrajet: new FormControl('', [Validators.required]),
    minutetrajet: new FormControl('', [Validators.required]),
    situationfamiliale: new FormControl('', [Validators.required]),
    datesituation: new FormControl('', [Validators.required]),
    activitesportive: new FormControl('', [Validators.required]),
    lequelactsportive: new FormControl('', [Validators.required]),
    activitecreative: new FormControl('', [Validators.required]),
    activiteinventivite: new FormControl('', [Validators.required]),
    activitecorporelle: new FormControl('', [Validators.required]),
    jeureflexion: new FormControl('', [Validators.required]),
    exerceractivite: new FormControl('', [Validators.required]),
    pourquoiexercer: new FormControl('', [Validators.required]),
    sallesport: new FormControl('', [Validators.required]),
    disposallesport: new FormControl('', [Validators.required]),
    critereenfance: new FormControl('', [Validators.required]),
    beaumoment: new FormControl('', [Validators.required]),
    mauvaismoment: new FormControl('', [Validators.required]),
    activitebenevolat: new FormControl('', [Validators.required]),
    lequelactbenevolat: new FormControl('', [Validators.required]),
    lieuactbenevolat: new FormControl('', [Validators.required]),
    exerceractbenevolat: new FormControl('', [Validators.required]),
    pointsforce: new FormControl('', [Validators.required]),
    pointsameliore: new FormControl('', [Validators.required]),
    nomprenomep: new FormControl('', [Validators.required]),
    datenaissanceep: new FormControl('', [Validators.required]),
    niveauetudeep: new FormControl('', [Validators.required]),
    fonctionep: new FormControl('', [Validators.required]),
    salaireep: new FormControl('', [Validators.required]),
    etatep: new FormControl('', [Validators.required]),
    ordre: new FormControl('', [Validators.required]),
    prenom: new FormControl('', [Validators.required]),
    datenaissancee: new FormControl('', [Validators.required]),
    niveauetude: new FormControl('', [Validators.required]),
    centreinteret: new FormControl('', [Validators.required]),
    etatsante: new FormControl('', [Validators.required]),
    niveau: new FormControl('', [Validators.required]),
    specialite: new FormControl('', [Validators.required]),
    annee: new FormControl('', [Validators.required]),
    etablissement: new FormControl('', [Validators.required]),
    formation: new FormControl('', [Validators.required]),
    attestation: new FormControl('', [Validators.required]),
    anne: new FormControl('', [Validators.required]),
    etablissements: new FormControl('', [Validators.required]),
    societe: new FormControl('', [Validators.required]),
    periode: new FormControl('', [Validators.required]),
    fonction: new FormControl('', [Validators.required]),
    initiative: new FormControl('', [Validators.required]),
    salaire: new FormControl('', [Validators.required]),
    arabe: new FormControl('', [Validators.required]),
    francais: new FormControl('', [Validators.required]),
    anglais: new FormControl('', [Validators.required]),
    autre: new FormControl('', [Validators.required]),

  });

  constructor(
    private dataService:DataService,
    private router :Router
  ) { }

  ngOnInit(): void {
    
  }
  array:any=['Voiture','Moto','Chez Taxi','Bus','Autre']
 arraysport:any=['Basketball','Football','Handball','Cyclisme','Volleyball','Gymnastique','Natation','Tennis','Autre']
 arraycreative:any=['Lecture/Écrire','Peinture','Musique','Autre']
 arraydinventivite:any=['Photographie','Architecture','Web design','Autre']
 arraycorporelle:any=['Dance','Théâtre','Autre']
 

  submit() {
    console.log('test',this.moyenForm.value)
    this.dataService.post('informationprofessionnelles/addFicherenseignement.json',this.moyenForm.value).subscribe(res=> {
      
      this.router.navigate(['/coutlisting']) 
      
      })
   }

   onCheckChangeMoyen(event) {
    var formArray: FormArray = this.moyenForm.get('label') as FormArray;
  
    /* Selected */
    if(event.target.checked){
      // Add a new control in the arrayForm
      formArray.push(new FormControl(event.target.value));
    }
    /* unselected */
    else{
      // find the unselected element
      let i: number = 0;
  
      formArray.controls.forEach((ctrl: FormControl) => {
        if(ctrl.value == event.target.value) {
          // Remove the unselected element from the arrayForm
          formArray.removeAt(i);
          return;
        }
  
        i++;
      });
    }
    console.log(formArray)
}

onCheckChangeSport(event) {
  var formArray: FormArray = this.moyenForm.get('sport') as FormArray;

  /* Selected */
  if(event.target.checked){
    // Add a new control in the arrayForm
    formArray.push(new FormControl(event.target.value));
  }
  /* unselected */
  else{
    // find the unselected element
    let i: number = 0;

    formArray.controls.forEach((ctrl: FormControl) => {
      if(ctrl.value == event.target.value) {
        // Remove the unselected element from the arrayForm
        formArray.removeAt(i);
        return;
      }

      i++;
    });
  }
}

onCheckChangeCreative(event) {
  var formArray: FormArray = this.moyenForm.get('Creative') as FormArray;

  /* Selected */
  if(event.target.checked){
    // Add a new control in the arrayForm
    formArray.push(new FormControl(event.target.value));
  }
  /* unselected */
  else{
    // find the unselected element
    let i: number = 0;

    formArray.controls.forEach((ctrl: FormControl) => {
      if(ctrl.value == event.target.value) {
        // Remove the unselected element from the arrayForm
        formArray.removeAt(i);
        return;
      }

      i++;
    });
  }
}

onCheckChangeDinventivite(event) {
  var formArray: FormArray = this.moyenForm.get('Dinventivite') as FormArray;

  /* Selected */
  if(event.target.checked){
    // Add a new control in the arrayForm
    formArray.push(new FormControl(event.target.value));
  }
  /* unselected */
  else{
    // find the unselected element
    let i: number = 0;

    formArray.controls.forEach((ctrl: FormControl) => {
      if(ctrl.value == event.target.value) {
        // Remove the unselected element from the arrayForm
        formArray.removeAt(i);
        return;
      }

      i++;
    });
  }
}

onCheckChangeCorporelle(event) {
  var formArray: FormArray = this.moyenForm.get('corporelle') as FormArray;

  /* Selected */
  if(event.target.checked){
    // Add a new control in the arrayForm
    formArray.push(new FormControl(event.target.value));
  }
  /* unselected */
  else{
    // find the unselected element
    let i: number = 0;

    formArray.controls.forEach((ctrl: FormControl) => {
      if(ctrl.value == event.target.value) {
        // Remove the unselected element from the arrayForm
        formArray.removeAt(i);
        return;
      }

      i++;
    });
  }
}
}
