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
  public Niveauvises

  public detailficheForm = new FormGroup({
    nomprenom: new FormControl('', [Validators.required]),
    objetevaluation: new FormControl('', [Validators.required]),
    dateevaluation: new FormControl('', [Validators.required]),
    decisiondirection: new FormControl('', [Validators.required]),
    label: new FormControl('', [Validators.required]),
    chargeto: new FormControl('', [Validators.required]),
    niveauvise_id: new FormControl('', [Validators.required]),
    
  });
  
  constructor(
    private dataService:DataService,
    private router :Router
  ) { }

  ngOnInit(): void {
    this.getAllniveau();
  }
  
   adddetailfichedevalu() {
    this.dataService.post('Coutformaexternes/addCoutformaexterne.json',this.detailficheForm.value).subscribe(res=> {
      this.router.navigate(['/coutlisting']) 
      })
   }

   getAllniveau() {
    this.dataService.get('Niveauvises/getAllNiveauvise.json').subscribe(res => {
      this.Niveauvises = res.data;
      
    }
    )
  }
}
