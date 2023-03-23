import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-listingprofilposte',
  templateUrl: './listingprofilposte.component.html',
  styleUrls: ['./listingprofilposte.component.scss']
})
export class ListingprofilposteComponent implements OnInit {

Profilpostes:any;

  public profilposteForm= new FormGroup({
    nom: new FormControl('', [Validators.required]),
    categorie: new FormControl('', [Validators.required]),
    fonction: new FormControl('', [Validators.required]),
    categories: new FormControl('', [Validators.required]),
    superhierar: new FormControl('', [Validators.required]),
    supervision: new FormControl('', [Validators.required]),
    interim: new FormControl('', [Validators.required]),
    competence: new FormControl('', [Validators.required]),
    souscompetence: new FormControl('', [Validators.required]),
    niveauvise: new FormControl('', [Validators.required]),
    indicateursuivi: new FormControl('', [Validators.required]),
    fonctionelaboration: new FormControl('', [Validators.required]),
    fonctionverification: new FormControl('', [Validators.required]),
    fonctionabrobation: new FormControl('', [Validators.required]),
    nomprenomelab: new FormControl('', [Validators.required]),
    nomprenomverif: new FormControl('', [Validators.required]),
    nomprenomabrob: new FormControl('', [Validators.required]),
    
  });

  constructor(    private dataService:DataService,
    ) { }

  ngOnInit(): void {
  }

  getallforma() {
    this.dataService.get('Profilpostes/getAllDetailprofilposte.json').subscribe(res => {
      this.Profilpostes = res.data;
      

    })
  }



}
