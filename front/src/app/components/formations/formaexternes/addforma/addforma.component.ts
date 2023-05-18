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
  
data: any;
message: any;
public Themeformations
public externeForm: FormGroup;


  constructor( 
    private dataService:DataService,
    private router :Router
  ) {}

  ngOnInit(): void {
    this.getallthemeforma();

    this.externeForm = new FormGroup({
      typecomp: new FormControl('', [Validators.required, Validators.pattern('^[a-zA-Z ]*$')]),
      themeformation_id: new FormControl('', [Validators.required]),
      participant: new FormControl('', [Validators.required, Validators.pattern('^[a-zA-Z ]*$')]),
      nbparticipant: new FormControl('', [Validators.required]),
      raisonforma: new FormControl('', [Validators.required, Validators.pattern('^[a-zA-Z ]*$')]),
      organismeforma: new FormControl('', [Validators.required, Validators.pattern('^[a-zA-Z ]*$')]),
      formalite: new FormControl('', [Validators.required, Validators.pattern('^[a-zA-Z ]*$')]),
      formateur: new FormControl('', [Validators.required, Validators.pattern('^[a-zA-Z ]*$')]),
      raisonchoix: new FormControl('', [Validators.required, Validators.pattern('^[a-zA-Z ]*$')]),
      dureeforma: new FormControl('', [Validators.required]),
      nbjour: new FormControl('', [Validators.required]),
      nbhjour: new FormControl('', [Validators.required]),
      date: new FormControl('', [Validators.required]),
      horaireforma: new FormControl('', [Validators.required]),
      pause: new FormControl('', [Validators.required, Validators.pattern('^[a-zA-Z ]*$')]),
      lieuforma: new FormControl('', [Validators.required, Validators.pattern('^[a-zA-Z ]*$')]),
    });
      
    
  }

  submit() {
      this.dataService.post('formaexternes/addFormaexterne.json',this.externeForm.value).subscribe(res=> {
        this.data = res;
        this.message=this.data.message;
        if (this.message=="Formation ajouter avec succés !"){
          this.externeForm.reset();
        }
        
        console.log(this.message);
      })
   }
  
   getallthemeforma() {
    this.dataService.get('Themeformations/getAllThemeformation.json').subscribe(res => {
      this.Themeformations = res.data;
    })
  }
}
