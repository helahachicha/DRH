import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';

import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-addforma',
  templateUrl: './addforma.component.html',
  styleUrls: ['./addforma.component.scss']
})
export class AddformaComponent implements OnInit {
  
  public externeForm = new FormGroup({
    typecomp: new FormControl('', [Validators.required]),
    themforma: new FormControl('', [Validators.required]),
    participant: new FormControl('', [Validators.required]),
    nbparticipant: new FormControl('', [Validators.required]),
    raisonforma: new FormControl('', [Validators.required]),
    organismeforma: new FormControl('', [Validators.required]),
    formalite: new FormControl('', [Validators.required]),
    formateur: new FormControl('', [Validators.required]),
    raisonchoix: new FormControl('', [Validators.required]),
    dureeforma: new FormControl('', [Validators.required]),
    nbjour: new FormControl('', [Validators.required]),
    nbhjour: new FormControl('', [Validators.required]),
    date: new FormControl('', [Validators.required]),
    horaireforma: new FormControl('', [Validators.required]),
    pause: new FormControl('', [Validators.required]),
    lieuforma: new FormControl('', [Validators.required]),
  });
  
  constructor(
    
    private dataService:DataService,
    private router :Router

    
  
  )
  {}

  ngOnInit(): void {
  }

  submit() {
    //console.log("hello",this.externeForm.value)

    this.dataService.post('formaexternes/addFormaexterne.json',this.externeForm.value).subscribe(res=> {
      this.router.navigate(['/addforma'])
      })
   }
  

}
