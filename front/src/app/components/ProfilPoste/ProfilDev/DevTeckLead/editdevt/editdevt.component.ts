import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-editdevt',
  templateUrl: './editdevt.component.html',
  styleUrls: ['./editdevt.component.scss']
})
export class EditdevtComponent implements OnInit {

  id:any;
  Idpropostedt:any={}
  Profilpostedt:any={};


  public DevTForm = new FormGroup({
    refdt: new FormControl('', [Validators.required]),
    majndt: new FormControl('', [Validators.required]),
    dudt: new FormControl('', [Validators.required]),
    Fonctiondt: new FormControl('', [Validators.required]),
    Categoriedt: new FormControl('', [Validators.required]),
    Suphierdt: new FormControl('', [Validators.required]),
    Superdt: new FormControl('', [Validators.required]),
    Interimdt: new FormControl('', [Validators.required]),

  });

  public ProfilPForm = new FormGroup({
    comptechdt: new FormControl('', [Validators.required]),
    contenucomptechdt: new FormControl('', [Validators.required]),
    comporgandt: new FormControl('', [Validators.required]),
    gestempsdt: new FormControl('', [Validators.required]),
    nvisegestempdt: new FormControl('', [Validators.required]),
    isuivigestempdt: new FormControl('', [Validators.required]),
    compcompordt: new FormControl('', [Validators.required]),
    comminteradt: new FormControl('', [Validators.required]),
    nvisecomminteradt: new FormControl('', [Validators.required]),
    isuivicomminteradt: new FormControl('', [Validators.required]),
    tracolldt: new FormControl('', [Validators.required]),
    nvisetracolldt: new FormControl('', [Validators.required]),
    isuivitracolldt: new FormControl('', [Validators.required]),
    resprobdt: new FormControl('', [Validators.required]),
    nviseresprobdt: new FormControl('', [Validators.required]),
    isuiviresprobdt: new FormControl('', [Validators.required]),
    raisanaldt: new FormControl('', [Validators.required]),
    nviseraisanaldt: new FormControl('', [Validators.required]),
    isuiviraisanaldt: new FormControl('', [Validators.required]),
    leadershipdt: new FormControl('', [Validators.required]),
    nviseleadershipdt: new FormControl('', [Validators.required]),
    isuivileadershipdt: new FormControl('', [Validators.required]),
    soudevdt: new FormControl('', [Validators.required]),
    nvisesoudevdt: new FormControl('', [Validators.required]),
    isuivisoudevdt: new FormControl('', [Validators.required]),
    droitdt: new FormControl('', [Validators.required]),
    contenudroitdt: new FormControl('', [Validators.required]),
    devoirdt: new FormControl('', [Validators.required]),
    contenudevoirdt: new FormControl('', [Validators.required]),
    validationdt: new FormControl('', [Validators.required]),
    contenuvaliddt: new FormControl('', [Validators.required]),
    fonctiondt: new FormControl('', [Validators.required]),
    nompredt: new FormControl('', [Validators.required]),
    fonctiondt1: new FormControl('', [Validators.required]),
    nompredt1: new FormControl('', [Validators.required]),
    fonctiondt2: new FormControl('', [Validators.required]),
    nompredt2: new FormControl('', [Validators.required]),


  });


  constructor(
    private dataService:DataService,
    private router :Router,
    private route:ActivatedRoute
  ) { }

  ngOnInit(): void {
    this.getdetailFormulairById();

    this.getprofilById(); 
  }

//getById + Edit pour le table  
getdetailFormulairById() {
  this.id=this.route.snapshot.params['id'];
  this.dataService.get('Idpropostedt/getIdpropostedt.json?id='+this.id).subscribe(
    res => {
    this.Idpropostedt=res.data;
    console.log("hello",this.Idpropostedt)
    


  })
}

editdetailFormulair(){
    
  this.dataService.post('Idpropostedt/editIdpropostedt.json?id='+this.id,this.DevTForm.value).subscribe(res=> {
    console.log("hello",this.DevTForm.value)
  this.router.navigate(['/listingdt'])
  })
}

//getById + Edit pour le table profil poste   

getprofilById() {
this.id=this.route.snapshot.params['id'];
this.dataService.get('Profilpostedt/getProfilpostedt.json?id='+this.id).subscribe(
  res => {
  this.Profilpostedt=res.data;
  console.log("hello",this.Profilpostedt)

})
}

editprofil(){
  
this.dataService.post('Profilpostedt/editProfilpostedt.json?id='+this.id,this.ProfilPForm.value).subscribe(res=> {
  console.log("hello",this.ProfilPForm.value)
this.router.navigate(['/listingdt'])
})

}


}
