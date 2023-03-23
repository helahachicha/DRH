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

  Categoriedevs:any={}
  Fonctions:any={}
  Superhieras:any={}
  Supervisions:any={}


  public profilposteForm= new FormGroup({
    nom: new FormControl('', [Validators.required]),
  
  });

  public categoriForm= new FormGroup({
    label: new FormControl('', [Validators.required]),
  
  });

  public fonctionForm= new FormGroup({
    label: new FormControl('', [Validators.required]),
  })

  public supherForm= new FormGroup({
    label: new FormControl('', [Validators.required]),
  })

  public interimForm= new FormGroup({
    label: new FormControl('', [Validators.required]),
  })

  public competenceForm= new FormGroup({
    label: new FormControl('', [Validators.required]),
  
  });

  public souscompetencesForm= new FormGroup({
    label: new FormControl('', [Validators.required]),
  
  });

 

  public niveauvisesForm= new FormGroup({
    label: new FormControl('', [Validators.required]),
  
  });


  public indicateursuivisForm= new FormGroup({
    label: new FormControl('', [Validators.required]),
  
  });




  constructor(
    private dataService:DataService,
    private router :Router
  ) { }

  ngOnInit(): void {
  }
  submit() {
    //console.log("hello",this.externeForm.value)

   this.dataService.post('Profilpostes/addProfilposte.json',this.profilposteForm.value).subscribe(res=> {
    this.router.navigate(['/listingforma'])
     })
  }


  



  getallcatt() {
    //console.log("hello",this.externeForm.value)

   this.dataService.post('Categoriedevs/addCategoriedev.json',this.categoriForm.value).subscribe(res=> {
    this.router.navigate(['/listingforma'])
     })
  }

  getallfonct() {
    //console.log("hello",this.externeForm.value)

   this.dataService.post('Fonctions/addFonction.json',this.fonctionForm.value).subscribe(res=> {
    this.router.navigate(['/listingforma'])
     })
  }

  getallsupher() {
    //console.log("hello",this.externeForm.value)

   this.dataService.post('Superhieras/addSuperhiera.json',this.supherForm.value).subscribe(res=> {
    this.router.navigate(['/listingforma'])
     })
  }

  getallinterim() {
    //console.log("hello",this.externeForm.value)

   this.dataService.post('Interims/addInterim.json',this.interimForm.value).subscribe(res=> {
    this.router.navigate(['/listingforma'])
     })
  }



  getallcom() {
    //console.log("hello",this.externeForm.value)

   this.dataService.post('Competences/addCompetence.json',this.competenceForm.value).subscribe(res=> {
    this.router.navigate(['/listingforma'])
     })
  }




  getallniveau() {
    //console.log("hello",this.externeForm.value)

   this.dataService.post('Niveauvises/addNiveauvise.json',this.niveauvisesForm.value).subscribe(res=> {
    this.router.navigate(['/listingforma'])
     })
  }



  getallindi() {
    //console.log("hello",this.externeForm.value)

   this.dataService.post('Indicateursuivis/addIndicateursuivi.json',this.indicateursuivisForm.value).subscribe(res=> {
    this.router.navigate(['/listingforma'])
     })
  }
}
