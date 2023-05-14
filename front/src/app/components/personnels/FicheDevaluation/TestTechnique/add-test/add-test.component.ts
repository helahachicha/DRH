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
  public Testtechniques

  
  public testForm = new FormGroup({
    label_id: new FormControl('', [Validators.required]),
    label1: new FormControl('', [Validators.required]),
    label2: new FormControl('', [Validators.required]),
    label3: new FormControl('', [Validators.required]),  
  });

  constructor(
    private dataService:DataService,
    private router :Router,
    public fb: FormBuilder,

  ) { }
  get FormcompetenceData(): FormArray {
    return <FormArray>this.FormGenerator.get('Formcompetence');
  }

  ngOnInit(): void {
    this.getAlltest()
  }

  addprofilposte() {
    const data = this.FormGenerator.value
    console.log("res.data",data)
  
         this.dataService.post('Profilpostes/addProfilposte.json',data).subscribe(res=> {
           this.router.navigate(['/listingprofilposte'])
            })
  
  
    }
    removedCompetence(index) {
      const Indicateur = this.FormGenerator.get('Formcompetence') as FormArray
      Indicateur.removeAt(index);
    }
    createForm() {
      this.FormGenerator = this.fb.group({
        nom: new FormControl('', [Validators.required]),
  });
    }


  submit() {
    this.dataService.post('Testtechniques/addTesttechnique.json',this.testForm.value).subscribe(res=> {
      this.router.navigate(['/addprofil'])
      })
   }
   getAlltest() {
    this.dataService.get('Testtechniques/getAllTesttechnique.json').subscribe(res => {
      this.Testtechniques = res.data;
    })
  }


}
