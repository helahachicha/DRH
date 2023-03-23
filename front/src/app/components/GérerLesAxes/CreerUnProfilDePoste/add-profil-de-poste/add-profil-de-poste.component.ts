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

  public infogencatppForm= new FormGroup({
    fonction: new FormControl('', [Validators.required]),
    label: new FormControl('', [Validators.required]),
    suphierar: new FormControl('', [Validators.required]),
    supervision: new FormControl('', [Validators.required]),
    interim: new FormControl('', [Validators.required]),
  
  });

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


  getallinfo() {
    //console.log("hello",this.externeForm.value)

   this.dataService.post('Categoriedevs/getAllCategoriedev.json',this.externeForm.value).subscribe(res=> {
    this.router.navigate(['/listingforma'])
     })
  }



  getallcatt() {
    //console.log("hello",this.externeForm.value)

   this.dataService.post('Categoriedevs/getAllCategoriedev.json',this.externeForm.value).subscribe(res=> {
    this.router.navigate(['/listingforma'])
     })
  }



  getallcom() {
    //console.log("hello",this.externeForm.value)

   this.dataService.post('Categoriedevs/getAllCategoriedev.json',this.externeForm.value).subscribe(res=> {
    this.router.navigate(['/listingforma'])
     })
  }




  getallniveau() {
    //console.log("hello",this.externeForm.value)

   this.dataService.post('Categoriedevs/getAllCategoriedev.json',this.externeForm.value).subscribe(res=> {
    this.router.navigate(['/listingforma'])
     })
  }



  getallindi() {
    //console.log("hello",this.externeForm.value)

   this.dataService.post('Categoriedevs/getAllCategoriedev.json',this.externeForm.value).subscribe(res=> {
    this.router.navigate(['/listingforma'])
     })
  }
}
