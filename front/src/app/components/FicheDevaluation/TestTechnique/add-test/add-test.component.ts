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
    
    
  });

  constructor(
    private dataService:DataService,
    private router :Router
  ) { }

  ngOnInit(): void {
  }
  submit() {
    //console.log("hello",this.coutForm.value)
    this.dataService.post('Testtechniques/addTesttechnique.json',this.testForm.value).subscribe(res=> {
      this.router.navigate(['/listingtest'])
     
      })
   }

   getAllCategorie() {
    this.dataService.get('Testtechniques/getAllTesttechnique.json').subscribe(res => {
      this.Testtechniques = res.data;
    }
    )
  }


}
