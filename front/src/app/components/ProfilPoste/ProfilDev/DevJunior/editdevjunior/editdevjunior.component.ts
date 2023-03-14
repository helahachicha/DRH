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
    ct: new FormControl('', [Validators.required]),
    contenuct: new FormControl('', [Validators.required]),
    co: new FormControl('', [Validators.required]),
    gt: new FormControl('', [Validators.required]),
    nivvisegt: new FormControl('', [Validators.required]),
    isuivigt: new FormControl('', [Validators.required]),
    cc: new FormControl('', [Validators.required]),
    ge: new FormControl('', [Validators.required]),
    au: new FormControl('', [Validators.required]),
    po: new FormControl('', [Validators.required]),
    ci: new FormControl('', [Validators.required]),
    nivviseci: new FormControl('', [Validators.required]),
    isuivici: new FormControl('', [Validators.required]),
    tc: new FormControl('', [Validators.required]),
    nivvisetc: new FormControl('', [Validators.required]),
    isuivitc: new FormControl('', [Validators.required]),
    rp: new FormControl('', [Validators.required]),
    nivviserp: new FormControl('', [Validators.required]),
    isuivirp: new FormControl('', [Validators.required]),
    se: new FormControl('', [Validators.required]),
    nivvisese: new FormControl('', [Validators.required]),
    isuivise: new FormControl('', [Validators.required]),
    dr: new FormControl('', [Validators.required]),
    contenudroit: new FormControl('', [Validators.required]),
    dev: new FormControl('', [Validators.required]),
    contenudev: new FormControl('', [Validators.required]),
    validation: new FormControl('', [Validators.required]),
    fonc: new FormControl('', [Validators.required]),
    np: new FormControl('', [Validators.required]),
    fonc1: new FormControl('', [Validators.required]),
    np1: new FormControl('', [Validators.required]),
    fonc2: new FormControl('', [Validators.required]),
    np2: new FormControl('', [Validators.required]),

    
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
