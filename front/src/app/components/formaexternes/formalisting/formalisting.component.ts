import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-formalisting',
  templateUrl: './formalisting.component.html',
  styleUrls: ['./formalisting.component.scss']
})
export class FormalistingComponent implements OnInit {
  
  
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
  private _id: string;
  
  
  constructor(
    private dataService:DataService,
    private router :Router
  ) { }
  formaexternes
  ngOnInit(): void {
    this.getallforma();
  }


  getallforma() {
    this.dataService.get('formaexternes/getAllFormaexterne.json').subscribe(res => {
      this.formaexternes = res.data;
      

    })
  }

  editforma(){

    this.dataService.post('formaexternes/editFormaexterne.json?id='+this._id,this.externeForm.value).subscribe(res=> {
    this.router.navigate(['/listingforma'])
    })
  }
}
