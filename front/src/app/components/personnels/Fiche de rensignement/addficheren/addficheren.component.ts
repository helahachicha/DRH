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

  public moyenForm = new FormGroup({
    nomprenom: new FormControl('', [Validators.required]),
    adresse: new FormControl('', [Validators.required]),
    telprof: new FormControl('', [Validators.required]),
    telpersonnel: new FormControl('', [Validators.required]),
    contact: new FormControl('', [Validators.required]),
    mailprof: new FormControl('', [Validators.required]),
    mailpersonnel: new FormControl('', [Validators.required]),
    servicetravail: new FormControl('', [Validators.required]),
    poste: new FormControl('', [Validators.required]),
    datenaissance: new FormControl('', [Validators.required]),
    lieu: new FormControl('', [Validators.required]),
    nationnalite: new FormControl('', [Validators.required]),
    cin: new FormControl('', [Validators.required]),
    delivreea: new FormControl('', [Validators.required]),
    datedelivrance: new FormControl('', [Validators.required]),
    permis: new FormControl('', [Validators.required]),
    datepermis: new FormControl('', [Validators.required]),
    logement: new FormControl('', [Validators.required]),
    moytransport: new FormControl('', [Validators.required]),
    estimatransport: new FormControl('', [Validators.required]),
    etatsociale: new FormControl('', [Validators.required]),
    dateetatsociale: new FormControl('', [Validators.required]),
    
  });

  constructor(
    private dataService:DataService,
    ) { }

  ngOnInit(): void {
    
  }
  
 /*arraysport:any=['Basketball','Football','Handball','Cyclisme','Volleyball','Gymnastique','Natation','Tennis','Autre']
 arraycreative:any=['Lecture/Écrire','Peinture','Musique','Autre']
 arraydinventivite:any=['Photographie','Architecture','Web design','Autre']
 arraycorporelle:any=['Dance','Théâtre','Autre']*/
 

  
   submit() {
    console.log('test',this.moyenForm.value) 
    this.dataService.post('Infoemployes/addInfoemploye.json',this.moyenForm.value).subscribe(res=> {
      
     /// this.router.navigate(['/coutlisting'])
     
      })
   }

   /*onCheckChangeMoyen(event) {
    var formArray: FormArray = this.moyenForm.get('label') as FormArray;
  
    /* Selected */
   /* if(event.target.checked){
      // Add a new control in the arrayForm
      formArray.push(new FormControl(event.target.value));
    }
    /* unselected */
    /*else{
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
  /*if(event.target.checked){
    // Add a new control in the arrayForm  
    formArray.push(new FormControl(event.target.value));
  }
  /* unselected */
  /*else{
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
 /* if(event.target.checked){
    // Add a new control in the arrayForm
    formArray.push(new FormControl(event.target.value));
  }
  /* unselected */
  /*else{
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
 /* if(event.target.checked){
    // Add a new control in the arrayForm
    formArray.push(new FormControl(event.target.value));
  }
  /* unselected */
 /* else{
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
 /* if(event.target.checked){
    // Add a new control in the arrayForm
    formArray.push(new FormControl(event.target.value));
  }
  /* unselected */
  /*else{
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
}*/
}
