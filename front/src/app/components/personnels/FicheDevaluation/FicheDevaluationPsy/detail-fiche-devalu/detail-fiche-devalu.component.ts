import { Component, OnInit } from '@angular/core';
import { FormArray, FormBuilder, FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-detail-fiche-devalu',
  templateUrl: './detail-fiche-devalu.component.html',
  styleUrls: ['./detail-fiche-devalu.component.scss']
})
export class DetailFicheDevaluComponent implements OnInit {
id:any

 public Infoficheevaluations
public open:boolean=false
public Formcompetences
public FormGenerator: FormGroup;


get FormcompetenceData(): FormArray {
  return <FormArray>this.FormGenerator.get('Formcompetence');
}

  constructor(
    private dataService:DataService,
    private route:ActivatedRoute,
    public fb: FormBuilder,
  ) { }

  ngOnInit(): void {  
   this.getDetailByEmpID()
   this.getFormcompetencebyDetailppId(),
   this.createForm();
   }

getDetailByEmpID(){
  this.route.params.subscribe(params => {
    const id = params['id'];
    this.dataService.get('Infoficheevaluations/getInfoficheevaluationByEmployeId.json?id=' + id).subscribe(
      res => {
        this.Infoficheevaluations = res.data;
       
        this.open=true
        
       // console.log('test',this.Infoficheevaluations)

         
      })
  });
 }

 
 getFormcompetencebyDetailppId(){
  this.route.params.subscribe(params => {
    const id = params['id'];
    this.dataService.get('Formcompetences/getFormcompetencebyDetailppId.json?id=' + id).subscribe(
      res => {
        this.Formcompetences = res.data;
       
        this.open=true
        
        console.log('comp',this.Formcompetences)

         
      })
  });
 }
 


 addInput(element) {
  this.FormcompetenceData.push(this.createIndicateurGroup(element));
}
  
removedIndica(index) {
  const Indicateur = this.FormGenerator.get('Formcompetence') as FormArray

  Indicateur.removeAt(index);

}
createForm() {
  this.FormGenerator = this.fb.group({
    nomprenom: new FormControl('', [Validators.required]),
    objetevaluation: new FormControl('', [Validators.required]),
    dateevaluation: new FormControl('', [Validators.required]),
    decisiondirection: new FormControl('', [Validators.required]),
    competence_id: new FormControl('', [Validators.required]),
    soucompetence: new FormControl('', [Validators.required]),
    niveauvise_id: new FormControl('', [Validators.required]),
    Formcompetence: this.fb.array([]),

  });

}
createIndicateurGroup(element): FormGroup {
  return this.fb.group({
    indicateur: this.fb.array(element.indicateursuivis && Array.isArray(element.indicateursuivis) ?
    element.indicateursuivis.map(data => this.createOption(data.id, data.label)) : [])
  })
}
createOption(id:string,label:string): FormGroup {
  return this.fb.group({
    id: [id, [Validators.required]],
    label: [label, [Validators.required]],

  });
}
addOptions(i) {
  const optionsArray = <FormArray>this.FormcompetenceData.at(i).get('indicateur');
  optionsArray.push(this.createOption('',null));
}

removeOptions(i, j) {
 
    (<FormArray>this.FormcompetenceData.at(i).get('indicateur')).removeAt(j);
  
  
}

  }
