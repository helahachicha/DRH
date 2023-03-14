import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-listingdevjunior',
  templateUrl: './listingdevjunior.component.html',
  styleUrls: ['./listingdevjunior.component.scss']
})
export class ListingdevjuniorComponent implements OnInit {


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
  ) { }

  ngOnInit(): void {
    this.getallDevJ();
    this.getallProfilP();
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


}
