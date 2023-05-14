import { Component, OnInit } from '@angular/core';
import { FormArray, FormBuilder, FormControl, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-add-test',
  templateUrl: './add-test.component.html',
  styleUrls: ['./add-test.component.scss']
})
export class AddTestComponent implements OnInit {
  public FormGenerator: FormGroup;
  public categorie

  

  constructor(
    private dataService:DataService,
    private router :Router,
    public fb: FormBuilder,

  ) { }
  get FormtestData(): FormArray {
    return <FormArray>this.FormGenerator.get('Formtest');
  }

  ngOnInit(): void {
    this.getAllcategorie(),
    this.createForm();

  }
  removedCompetence(index) {
    const Competence = this.FormGenerator.get('Formtest') as FormArray
    Competence.removeAt(index);
  }

  createForm() {
    this.FormGenerator = this.fb.group({
      label: new FormControl('', [Validators.required]),
      categorie_id: new FormControl('', [Validators.required]),
      Formtest: this.fb.array([this.createCompetenceGroup()]),

    });
  }
  createCompetenceGroup(): FormGroup {
    return this.fb.group({
      label:[''],
      competence:  this.fb.array([this.createOption()]),

    })
  }

  createQuestion(): FormGroup {
    return this.fb.group({
      label: [''],
      reponse:  this.fb.array([this.createReponse()]),


    });
  }
  createReponse(): FormGroup {
    return this.fb.group({
      label: [''],
    });
  }
  createOption(): FormGroup {
    return this.fb.group({
      label: [''],
      question:  this.fb.array([this.createQuestion()]),

    });
  }
  addOptions(i) {
    const optionsArray = <FormArray>this.FormtestData.at(i).get('competence');
    optionsArray.push(this.createOption());
  }

  removeOptions(i, j) {

      (<FormArray>this.FormtestData.at(i).get('competence')).removeAt(j);


  }

  addInputReponse(i) {
    const optionsArray = <FormArray>this.FormtestData.at(i).get('Reponse');
    optionsArray.push(this.createReponse());
   }

 
   removeReponse(i, j) {

    (<FormArray>this.FormtestData.at(i).get('Reponse')).removeAt(j);

}
  addInput() {
    this.FormtestData.push(this.createCompetenceGroup());
  }
  submit() {
    const data = this.FormGenerator.value
    //console.log("res.data",data)
    this.dataService.post('Testtechniques/addTesttechnique.json',data).subscribe(res=> {
      this.router.navigate(['/listingtest'])
      })
   }
   getAllcategorie() {
    this.dataService.get('Categories/getAllCategorie.json').subscribe(res => {
      this.categorie = res.data;
    })
  }


}
