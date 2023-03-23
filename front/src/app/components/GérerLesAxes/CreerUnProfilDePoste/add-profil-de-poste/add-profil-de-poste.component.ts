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

  

  public profilposteForm= new FormGroup({
    nom: new FormControl('', [Validators.required]),
    categorie: new FormControl('', [Validators.required]),
  
  });

  public Detailprofilposte= new FormGroup({
    fonction: new FormControl('', [Validators.required]),
    categorie: new FormControl('', [Validators.required]),
    superhierar: new FormControl('', [Validators.required]),
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


addall()

{

  console.log("hello",this.profilposteForm.value)
  console.log("hello",this.Detailprofilposte.value)
  console.log("hello",this.competenceForm.value)
  console.log("hello",this.souscompetencesForm.value)
  console.log("hello",this.niveauvisesForm.value)
  console.log("hello",this.indicateursuivisForm.value)

  this.dataService.post('Profilpostes/addProfilposte.json',this.profilposteForm.value).subscribe(res=> {
    this.router.navigate(['/lidtingprofildeposte'])
     })

     this.dataService.post('Detailprofilpostes/addDetailprofilposte.json',this.Detailprofilposte.value).subscribe(res=> {
      this.router.navigate(['/lidtingprofildeposte'])
       })

       this.dataService.post('Competences/addCompetence.json',this.competenceForm.value).subscribe(res=> {
        this.router.navigate(['/lidtingprofildeposte'])
         })

         this.dataService.post('Souscompetences/addSouscompetence.json',this.souscompetencesForm.value).subscribe(res=> {
          this.router.navigate(['/lidtingprofildeposte'])
           })

           this.dataService.post('Niveauvises/addNiveauvise.json',this.niveauvisesForm.value).subscribe(res=> {
            this.router.navigate(['/lidtingprofildeposte'])
             })
             
             this.dataService.post('Indicateursuivis/addIndicateursuivi.json',this.indicateursuivisForm.value).subscribe(res=> {
              this.router.navigate(['/lidtingprofildeposte'])
               })


}




 addprofilposte() {
    //console.log("hello",this.externeForm.value)

    this.dataService.post('Profilpostes/addProfilposte.json',this.profilposteForm.value).subscribe(res=> {
      this.router.navigate(['/lidtingprofildeposte'])
       })
  }


  



  adddetailprofiloste() {
    //console.log("hello",this.externeForm.value)

    this.dataService.post('Detailprofilpostes/addDetailprofilposte.json',this.Detailprofilposte.value).subscribe(res=> {
      this.router.navigate(['/lidtingprofildeposte'])
       })
  }

  


  addcompetences() {
    //console.log("hello",this.externeForm.value)

    this.dataService.post('Competences/addCompetence.json',this.competenceForm.value).subscribe(res=> {
      this.router.navigate(['/lidtingprofildeposte'])
       })
  }

  addsouscompetences() {
    //console.log("hello",this.externeForm.value)

    this.dataService.post('Souscompetences/addSouscompetence.json',this.souscompetencesForm.value).subscribe(res=> {
      this.router.navigate(['/lidtingprofildeposte'])
       })
  }




  addniveau() {
    //console.log("hello",this.externeForm.value)

    this.dataService.post('Niveauvises/addNiveauvise.json',this.niveauvisesForm.value).subscribe(res=> {
      this.router.navigate(['/lidtingprofildeposte'])
       })
  }



  getallindi() {
    //console.log("hello",this.externeForm.value)

    this.dataService.post('Indicateursuivis/addIndicateursuivi.json',this.indicateursuivisForm.value).subscribe(res=> {
      this.router.navigate(['/lidtingprofildeposte'])
       })
  }
}
