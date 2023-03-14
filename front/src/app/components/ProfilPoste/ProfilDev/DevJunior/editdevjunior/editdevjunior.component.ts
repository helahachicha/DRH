import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-editdevjunior',
  templateUrl: './editdevjunior.component.html',
  styleUrls: ['./editdevjunior.component.scss']
})
export class EditdevjuniorComponent implements OnInit {

id :any;
  public Idproposte
  public Profilposte


  public DevJForm= new FormGroup({
    majn: new FormControl('', [Validators.required]),
    du: new FormControl('', [Validators.required]),
    Fonction: new FormControl('', [Validators.required]),
    Categorie: new FormControl('', [Validators.required]),
    Suphier: new FormControl('', [Validators.required]),
    Super: new FormControl('', [Validators.required]),
    Interim: new FormControl('', [Validators.required]),
    
  });

  public ProfilPForm= new FormGroup({
    comptech: new FormControl('', [Validators.required]),
    contenucomptech: new FormControl('', [Validators.required]),
    comporgan: new FormControl('', [Validators.required]),
    gestemps: new FormControl('', [Validators.required]),
    nvisegestemp: new FormControl('', [Validators.required]),
    isuivigestemp: new FormControl('', [Validators.required]),
    compcompor: new FormControl('', [Validators.required]),
    geek: new FormControl('', [Validators.required]),
    autod: new FormControl('', [Validators.required]),
    positivite: new FormControl('', [Validators.required]),
    commintera: new FormControl('', [Validators.required]),
    nvisecommintera: new FormControl('', [Validators.required]),
    isuivicommintera: new FormControl('', [Validators.required]),
    tracoll: new FormControl('', [Validators.required]),
    nvisetracoll: new FormControl('', [Validators.required]),
    isuivitracoll: new FormControl('', [Validators.required]),
    resprob: new FormControl('', [Validators.required]),
    nviseresprob: new FormControl('', [Validators.required]),
    isuiviresprob: new FormControl('', [Validators.required]),
    servexcell: new FormControl('', [Validators.required]),
    nviseservexcell: new FormControl('', [Validators.required]),
    isuiviservexcell: new FormControl('', [Validators.required]),
    droit: new FormControl('', [Validators.required]),
    contenudroit: new FormControl('', [Validators.required]),
    devoir: new FormControl('', [Validators.required]),
    contenudevoir: new FormControl('', [Validators.required]),
    validation: new FormControl('', [Validators.required]),
    contenuvalid: new FormControl('', [Validators.required]),
    fonction: new FormControl('', [Validators.required]),
    nompre: new FormControl('', [Validators.required]),
    fonction1: new FormControl('', [Validators.required]),
    nompre1: new FormControl('', [Validators.required]),
    fonction2: new FormControl('', [Validators.required]),
    nompre2: new FormControl('', [Validators.required]),
  
  });
  
  constructor(
    private dataService:DataService,
    private router :Router,
    private route:ActivatedRoute
  ) { }

  ngOnInit(): void {
    /*this.getdetailFormulairById();
  this.getprofilById(); */ 
  this.getallDevJ();
  this.getallProfilP()
}




  getallDevJ() {
    this.dataService.get('Idproposte/getAllIdproposte.json').subscribe(res => {
      this.Idproposte = res.data;
      console.log("hello",this.Idproposte)
      

    })
  }

  getallProfilP() {
    this.dataService.get('Profilposte/getAllProfilposte.json').subscribe(res => {
      this.Profilposte = res.data;
      console.log("hello",this.Profilposte)
      

    })
  }

//getById + Edit pour le table  
 /* getdetailFormulairById() {
    this.id=this.route.snapshot.params['id'];
    this.dataService.get('Idproposte/.json?id='+this.id).subscribe(
      res => {
      this.Idproposte=res.data;
      console.log("hello",this.Idproposte)

      
    })
  }*/

  editdetailFormulair(){
      
    this.dataService.post('Idproposte/editIdproposte.json?id='+this.id,this.DevJForm.value).subscribe(res=> {
      console.log("hello",this.DevJForm.value)
    this.router.navigate(['/listingdj'])
    })
  }

//getById + Edit pour le table profil poste   

 /* getprofilById() {
    this.id=this.route.snapshot.params['id'];
    this.dataService.get('Profilposte/.json?id='+this.id).subscribe(
      res => {
      this.Profilposte=res.data;
      console.log("hello",this.Profilposte)

      
    })
  }*/

  editprofil(){
      
    this.dataService.post('Profilposte/editProfilposte.json?id='+this.id,this.ProfilPForm.value).subscribe(res=> {
      console.log("hello",this.ProfilPForm.value)
    this.router.navigate(['/listingdj'])
    })
  }

}
