import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-listingdevjunior',
  templateUrl: './listingdevjunior.component.html',
  styleUrls: ['./listingdevjunior.component.scss']
})
export class ListingdevjuniorComponent implements OnInit {

  
  Profilpostes:any=[]
  
  id:any;

   public profilposteForm= new FormGroup({
   nom: new FormControl('', [Validators.required]),
  
  });

  // public categoriForm= new FormGroup({
  //   label: new FormControl('', [Validators.required]),
  
  // });

  // public infogencatppForm= new FormGroup({
  //   fonction: new FormControl('', [Validators.required]),
  //   label: new FormControl('', [Validators.required]),
  //   suphierar: new FormControl('', [Validators.required]),
  //   supervision: new FormControl('', [Validators.required]),
  //   interim: new FormControl('', [Validators.required]),
  
  // });

  // public competenceForm= new FormGroup({
  //   label: new FormControl('', [Validators.required]),
  
  // });

  // public souscompetencesForm= new FormGroup({
  //   label: new FormControl('', [Validators.required]),
  
  // });

  public fonctionForm= new FormGroup({
    fonction: new FormControl('', [Validators.required]),
  
  });

 

  // public niveauvisesForm= new FormGroup({
  //   label: new FormControl('', [Validators.required]),
  
  // });


  // public indicateursuivisForm= new FormGroup({
  //   label: new FormControl('', [Validators.required]),
  
  // });
 

  constructor(
    private dataService: DataService,
    private router :Router,
    private route:ActivatedRoute
  ) { }

  ngOnInit(): void {
  //  this.getCategoriede();
  //  this.getinterimsbycategID();
  //  this.getallcategoriedev();
  //  this.getallsuperieure();
   //this.getallfonctions();
   this.getbyidprofile();

  }

  

 

  // getCategoriede() {
  //   this.id=this.route.snapshot.params['id'];
  //   this.dataService.get('Categoriedes/getCategoriede.json?id='+this.id).subscribe(
  //     res => {
  //     this.Categoriedes=res.data;
  //     console.log("hello",this.Categoriedes)

  //   })
  // }

  // getinterimsbycategID() {
  //   this.id=this.route.snapshot.params['id'];
  //   this.dataService.get('Supervisions/getSupervisionBycategId.json?id='+this.id).subscribe(
  //     res => {
  //     this.Supervisions=res.data;
  //     console.log("hello",this.Supervisions)

  //   })
  // }


  // getallcategoriedev() {
  //   this.dataService.get('Categoriedes/getAllCategoriede.json').subscribe(res => {
  //     this.Categoriedes = res.data;
  //     console.log("hello", this.Categoriedes)


  //   })
  // }

  // getallsuperieure() {
  //   this.dataService.get('Superhieras/getAllSuperhiera.json').subscribe(res => {
  //     this.Superhieras = res.data;
  //     console.log("hello", this.Superhieras)


  //   })
  // }

    //getallfonctions() {
   ////   this.dataService.get('Fonctions/getAllFonction.json').subscribe(res => {
    //    this.fonctions = res.data;
    //    console.log("fonctions", this.fonctions)
        
  
   //   })
  
   // }

    getbyidprofile() {
      this.dataService.get('Profilpostes/getProfilposte.json').subscribe(res => {
        this.Profilpostes = res.data;
        console.log("hello",this.Profilpostes)
  
  
      })
    }
}
