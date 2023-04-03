import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-addformainterne',
  templateUrl: './addformainterne.component.html',
  styleUrls: ['./addformainterne.component.scss']
})
export class AddformainterneComponent implements OnInit {

  public  Themeformations

  public interneForm= new FormGroup({
    tycomp: new FormControl('', [Validators.required]),
    themeformation_id: new FormControl('', [Validators.required]),
    animateur: new FormControl('', [Validators.required]),
    poste: new FormControl('', [Validators.required]),
    date: new FormControl('', [Validators.required]),
    hentrer: new FormControl('', [Validators.required]),
    hsortie: new FormControl('', [Validators.required]),
    
  });
  constructor(
    private dataService:DataService,
    private router :Router
  ) { }

  ngOnInit(): void {
    this.getallthemeforma()
  }


  submit() {
    console.log("hello",this.interneForm.value)
    this.dataService.post('Formainternes/addFormainterne.json',this.interneForm.value).subscribe(res=> {
      this.router.navigate(['/formainternelisting'])    
      })
   }
   getallthemeforma() {
    this.dataService.get('Themeformations/getAllThemeformation.json').subscribe(res => {
      this.Themeformations = res.data;
    })
  }
}
