import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-editdevc',
  templateUrl: './editdevc.component.html',
  styleUrls: ['./editdevc.component.scss']
})
export class EditdevcComponent implements OnInit {

   id: any;
   Idpropostedc:any={};
   Profilpostedc:any={};


  public DevCForm = new FormGroup({
    majndc: new FormControl('', [Validators.required]),
    dudc: new FormControl('', [Validators.required]),
    Fonctiondc: new FormControl('', [Validators.required]),
    categoriedc: new FormControl('', [Validators.required]),
    Suphierdc: new FormControl('', [Validators.required]),
    Superdc: new FormControl('', [Validators.required]),
    interidc: new FormControl('', [Validators.required]),

  });

  public ProfilPdcForm = new FormGroup({
    comptechdc: new FormControl('', [Validators.required]),
    contenucomptechdc: new FormControl('', [Validators.required]),
    comporgandc: new FormControl('', [Validators.required]),
    gestempsdc: new FormControl('', [Validators.required]),
    nvisegestempdc: new FormControl('', [Validators.required]),
    isuivigestempdc: new FormControl('', [Validators.required]),
    compcompordc: new FormControl('', [Validators.required]),
    autonomiedc: new FormControl('', [Validators.required]),
    comminteradc: new FormControl('', [Validators.required]),
    nvisecomminteradc: new FormControl('', [Validators.required]),
    isuivicomminteradc: new FormControl('', [Validators.required]),
    tracolldc: new FormControl('', [Validators.required]),
    nvisetracolldc: new FormControl('', [Validators.required]),
    isuivitracolldc: new FormControl('', [Validators.required]),
    resprobdc: new FormControl('', [Validators.required]),
    nviseresprobdc: new FormControl('', [Validators.required]),
    isuiviresprobdc: new FormControl('', [Validators.required]),
    servexcelldc: new FormControl('', [Validators.required]),
    nviseservexcelldc: new FormControl('', [Validators.required]),
    isuiviservexcelldc: new FormControl('', [Validators.required]),
    raisconcepdc: new FormControl('', [Validators.required]),
    nviseraisconcepdc: new FormControl('', [Validators.required]),
    isuiviraisconcepdc: new FormControl('', [Validators.required]),
    droitdc: new FormControl('', [Validators.required]),
    contenudroitdc: new FormControl('', [Validators.required]),
    devoirdc: new FormControl('', [Validators.required]),
    contenudevoirdc: new FormControl('', [Validators.required]),
    validationdc: new FormControl('', [Validators.required]),
    contenuvaliddc: new FormControl('', [Validators.required]),
    fonctiondc: new FormControl('', [Validators.required]),
    nompredc: new FormControl('', [Validators.required]),
    fonctiondc1: new FormControl('', [Validators.required]),
    nompredc1: new FormControl('', [Validators.required]),
    fonctiondc2: new FormControl('', [Validators.required]),
    nompredc2: new FormControl('', [Validators.required]),


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
    this.dataService.get('Idpropostedc/getIdpropostedc.json?id='+this.id).subscribe(
      res => {
      this.Idpropostedc=res.data;
      console.log("hello",this.Idpropostedc)
      


    })
  }

  editdetailFormulair(){
      
    this.dataService.post('Idpropostedc/editIdpropostedc.json?id='+this.id,this.DevCForm.value).subscribe(res=> {
      console.log("hello",this.DevCForm.value)
    this.router.navigate(['/listingdc'])
    })
  }

  //getById + Edit pour le table profil poste   

  getprofilById() {
    this.id=this.route.snapshot.params['id'];
    this.dataService.get('Profilpostedc/getProfilpostedc.json?id='+this.id).subscribe(
      res => {
      this.Profilpostedc=res.data;
      console.log("hello",this.Profilpostedc)

    })
  }

  editprofil(){
      
    this.dataService.post('Profilpostedc/editProfilpostedc.json?id='+this.id,this.ProfilPdcForm.value).subscribe(res=> {
      console.log("hello",this.ProfilPdcForm.value)
    this.router.navigate(['/listingdc'])
    })
  }

}
