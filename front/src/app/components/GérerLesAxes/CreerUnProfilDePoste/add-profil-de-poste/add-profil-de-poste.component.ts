import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-add-profil-de-poste',
  templateUrl: './add-profil-de-poste.component.html',
  styleUrls: ['./add-profil-de-poste.component.scss']
})
export class AddProfilDePosteComponent implements OnInit {

  public  Categories

  public profilposteForm= new FormGroup({
    nom: new FormControl('', [Validators.required]),
    fonction: new FormControl('', [Validators.required]),
    categorie: new FormControl('', [Validators.required]),
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
  constructor(
    private dataService:DataService,
    private router :Router
  ) { }

  ngOnInit(): void {
   this.getAllCategorie();
  }



 addprofilposte() {
    console.log("hello",this.profilposteForm.value)

    this.dataService.post('Profilpostes/addProfilposte.json',this.profilposteForm.value).subscribe(res=> {
      this.router.navigate(['/listingprofilposte'])
       })
  }
  getAllCategorie() {
    this.dataService.get('Categories/getAllCategorie.json').subscribe(res => {
      this.Categories = res.data;

      console.log("hello", this.Categories)


    }
    )
  }

}
