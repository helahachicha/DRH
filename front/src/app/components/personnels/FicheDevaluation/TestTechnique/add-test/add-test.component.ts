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
    return <FormArray>this.FormGenerator.get('Competence');
  }

  ngOnInit(): void {
    this.getAllcategorie(),
    this.createForm();

  }


  createForm() {
    this.FormGenerator = this.fb.group({
      label: new FormControl('', [Validators.required]),
      categorie_id: new FormControl('', [Validators.required]),
      Competence: this.fb.array([this.createCompetenceGroup()]),

    });
  }
  createCompetenceGroup(): FormGroup {
    return this.fb.group({
      label: new FormControl('', [Validators.required]),
      QuestReponse:  this.fb.array([this.createQuestReponse()]),
    })
  }
  createQuestReponse(): FormGroup {
    return this.fb.group({
      question: ['', [Validators.required]],
      reponse:  this.fb.array([this.createReponse()]),
    })
  }
  createReponse(): FormGroup {
    return this.fb.group({
      label: [''],
    });
  }

  addCompetence() {
    this.FormtestData.push(this.createCompetenceGroup());
  }
  addQuestRep(i) {
    const optionsArray = <FormArray>this.FormtestData.at(i).get('QuestReponse');
    optionsArray.push(this.createQuestReponse());
   }

   addReponse(i: number, j: number) {
    const questionArray = this.FormGenerator.get(`Competence.${i}.QuestReponse`) as FormArray;
    const reponseArray = questionArray.at(j).get('reponse') as FormArray;
    reponseArray.push(this.createReponse());
  }

  removedCompetence(index) {
    const Competence = this.FormGenerator.get('Competence') as FormArray
    Competence.removeAt(index);
  }

  removeQuestRep(i, j) {

    (<FormArray>this.FormtestData.at(i).get('QuestReponse')).removeAt(j);
}
removeReponse(i, j) {

  (<FormArray>this.FormtestData.at(i).get('reponse')).removeAt(j);

}
  submit() {
    const data = this.FormGenerator.value
console.log("res.data",data)
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
