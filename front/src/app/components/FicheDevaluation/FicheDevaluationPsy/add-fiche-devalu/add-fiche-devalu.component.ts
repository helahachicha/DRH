import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-add-fiche-devalu',
  templateUrl: './add-fiche-devalu.component.html',
  styleUrls: ['./add-fiche-devalu.component.scss']
})
export class AddFicheDevaluComponent implements OnInit {

  public infoficheForm = new FormGroup({
    coutformahd: new FormControl('', [Validators.required]),
    tocoformadt: new FormControl('', [Validators.required]),
    locaespace: new FormControl('', [Validators.required]),
    comax: new FormControl('', [Validators.required]),
    tocout: new FormControl('', [Validators.required]),
    chargeto: new FormControl('', [Validators.required]),
    
  });
  public detailficheForm = new FormGroup({
    coutformahd: new FormControl('', [Validators.required]),
    tocoformadt: new FormControl('', [Validators.required]),
    locaespace: new FormControl('', [Validators.required]),
    comax: new FormControl('', [Validators.required]),
    tocout: new FormControl('', [Validators.required]),
    chargeto: new FormControl('', [Validators.required]),
    
  });
  constructor(
    private dataService:DataService,
    private router :Router
  ) { }

  ngOnInit(): void {
  }
  
   adddetailfichedevalu() {
    //console.log("hello",this.coutForm.value)
    this.dataService.post('Coutformaexternes/addCoutformaexterne.json',this.coutForm.value).subscribe(res=> {
      this.router.navigate(['/coutlisting'])
     
      })
   }
}
