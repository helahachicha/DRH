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

  Categories:any={}
  
  id:any;

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
    private dataService: DataService,
    private router :Router,
    private route:ActivatedRoute
  ) { }

  ngOnInit(): void {
   this.getsupervibicetegoriedevId()
  }

  

 

  getsupervibicetegoriedevId() {
    this.id=this.route.snapshot.params['id'];
    this.dataService.get('Categories/getSupervisBycategId.json?id='+this.id).subscribe(
      res => {
      this.Categories=res.data;
      console.log("hello",this.Categories)

    })
  }

  getinterimsbycategID() {
    this.id=this.route.snapshot.params['id'];
    this.dataService.get('Categories/getSupervisBycategId.json?id='+this.id).subscribe(
      res => {
      this.Categories=res.data;
      console.log("hello",this.Categories)

    })
  }


  getallcategoriedev() {
    this.dataService.get('Profilposteconfirmes/getAllProfilposteconfirme.json').subscribe(res => {
      this.Profilposteconfirmes = res.data;
      console.log("hello", this.Profilposteconfirmes)


    })
  }

  getallsuperieure() {
    this.dataService.get('Profilposteconfirmes/getAllProfilposteconfirme.json').subscribe(res => {
      this.Profilposteconfirmes = res.data;
      console.log("hello", this.Profilposteconfirmes)


    })
  }

    getallfonctions() {
      this.dataService.get('Profilposteconfirmes/getAllProfilposteconfirme.json').subscribe(res => {
        this.Profilposteconfirmes = res.data;
        console.log("hello", this.Profilposteconfirmes)
  
  
      })
  
    }
}
