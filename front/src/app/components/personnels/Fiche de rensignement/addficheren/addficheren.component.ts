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
public Postes
  public moyenForm = new FormGroup({
    nomprenom: new FormControl('', [Validators.required, Validators.pattern('^[a-zA-Z ]*$')]),
    adresse: new FormControl('', [Validators.required, Validators.pattern('^[a-zA-Z ]*$')]),
    telprof: new FormControl('', [Validators.required,Validators.pattern(/^\d{1,8}$/),
      this.maxLengthValidator(8)
    ]),
    telpersonnel: new FormControl('', [Validators.required,Validators.pattern(/^\d{1,8}$/),
      this.maxLengthValidator(8)]),
    contact: new FormControl('', [Validators.required,Validators.pattern(/^\d{1,8}$/),
      this.maxLengthValidator(8)]),
    mailprof: new FormControl('', [Validators.required, Validators.email]),
    mailpersonnel: new FormControl('', [Validators.required, Validators.email]),
    servicetravail: new FormControl('', [Validators.required, Validators.pattern('^[a-zA-Z ]*$')]),
    poste_id: new FormControl('', [Validators.required]),
    datenaissance: new FormControl('', [Validators.required]),
    lieu: new FormControl('', [Validators.required, Validators.pattern('^[a-zA-Z ]*$')]),
    nationnalite: new FormControl('', [Validators.required, Validators.pattern('^[a-zA-Z ]*$')]),
    cin: new FormControl('', [Validators.required,Validators.pattern(/^\d{1,8}$/),
    this.maxLengthValidator(8)]),
    delivreea: new FormControl('', [Validators.required, Validators.pattern('^[a-zA-Z ]*$')]),
    datedelivrance: new FormControl('', [Validators.required]),
    permis: new FormControl('', [Validators.required]),
    datepermis: new FormControl('', [Validators.required]),
    logement: new FormControl('', [Validators.required]),
    moytransport: new FormControl('', [Validators.required]),
    estimatransport: new FormControl('', [Validators.required]),
    etatsociale: new FormControl('', [Validators.required]),
    dateetatsociale: new FormControl('', [Validators.pattern('^[a-zA-Z ]*$')]),
    
  });

  constructor(
    private dataService:DataService,
    private router:Router
    ) { }

  ngOnInit(): void {
    this.getallposte()
    
  }
  
 /*arraysport:any=['Basketball','Football','Handball','Cyclisme','Volleyball','Gymnastique','Natation','Tennis','Autre']
 arraycreative:any=['Lecture/Écrire','Peinture','Musique','Autre']
 arraydinventivite:any=['Photographie','Architecture','Web design','Autre']
 arraycorporelle:any=['Dance','Théâtre','Autre']*/
 

  
   submit() {
    console.log('test',this.moyenForm.value) 
    this.dataService.post('Infoemployes/addInfoemploye.json',this.moyenForm.value).subscribe(res=> {
      
     this.router.navigate(['/liste-fiche-rensignement'])
     
      })
   }
   getallposte() {
    this.dataService.get('Postes/getAllPoste.json').subscribe(res => {
      this.Postes = res.data;
    })
  }



  maxLengthValidator(maxLength: number) {
    return (control: FormControl) => {
      const value = control.value;
      if (value && value.toString().length > maxLength) {
        return { maxLengthExceeded: true };
      }
      return null;
    };
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
