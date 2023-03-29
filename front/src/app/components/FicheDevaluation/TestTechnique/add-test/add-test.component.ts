import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-add-test',
  templateUrl: './add-test.component.html',
  styleUrls: ['./add-test.component.scss']
})
export class AddTestComponent implements OnInit {
  public Testtechniques
  public testForm = new FormGroup({
    label_id: new FormControl('', [Validators.required]),
    categorie_id: new FormControl('', [Validators.required]),
    labelcomp: new FormControl('', [Validators.required]),
    testtechnique_id: new FormControl('', [Validators.required]),
    labelques: new FormControl('', [Validators.required]),
    comptechnique_id: new FormControl('', [Validators.required]),
    labelsouq: new FormControl('', [Validators.required]),
    question_id: new FormControl('', [Validators.required]),
    
    
  });

  constructor(
    private dataService:DataService,
    private router :Router
  ) { }

  ngOnInit(): void {
    this.getAlltest()
  }
  submit() {
    //console.log("hello",this.coutForm.value)
    this.dataService.post('Testtechniques/addTesttechnique.json',this.testForm.value).subscribe(res=> {
      this.router.navigate(['/listingtest'])
     
      })
   }

   getAlltest() {
    this.dataService.get('Testtechniques/getAllTesttechnique.json').subscribe(res => {
      this.Testtechniques = res.data;
    }
    )
  }


}
