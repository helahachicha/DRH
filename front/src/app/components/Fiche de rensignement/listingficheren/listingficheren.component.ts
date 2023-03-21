import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-listingficheren',
  templateUrl: './listingficheren.component.html',
  styleUrls: ['./listingficheren.component.scss']
})
export class ListingficherenComponent implements OnInit {

  public Ficherenseignements;
 
  public Enfantsfrs;
  public Expproffrs;
 
  public Formacomplfrs


  public ficheForm = new FormGroup({
    datefr: new FormControl('', [Validators.required]),
    npagefr: new FormControl('', [Validators.required]),
    nomprenomfr: new FormControl('', [Validators.required]),
    adressefr: new FormControl('', [Validators.required]),
    telprofefr: new FormControl('', [Validators.required]),
    telpersofr: new FormControl('', [Validators.required]),
    cantactcasurgfr: new FormControl('', [Validators.required]),
    mailprofefr: new FormControl('', [Validators.required]),
    mailpersfr: new FormControl('', [Validators.required]),
    servicetrafr: new FormControl('', [Validators.required]),
    postefr: new FormControl('', [Validators.required]),
    datenaifr: new FormControl('', [Validators.required]),
    lieufr: new FormControl('', [Validators.required]),
    nationalitefr: new FormControl('', [Validators.required]),
    ncinfr: new FormControl('', [Validators.required]),
    ncindelivreefr: new FormControl('', [Validators.required]),
    ncinlefr: new FormControl('', [Validators.required]),
    ouipermisfr: new FormControl('', [Validators.required]),
    tempsdotramfr: new FormControl('', [Validators.required]),
    tempsdotrahfr: new FormControl('', [Validators.required]),
    ouimdquandfr: new FormControl('', [Validators.required]),
    ouisallesportfr: new FormControl('', [Validators.required]),
    critereenfancefr: new FormControl('', [Validators.required]),
    beaumomentfr: new FormControl('', [Validators.required]),
    mauvaismometfr: new FormControl('', [Validators.required]),
    pointforcefr: new FormControl('', [Validators.required]),
    pointameliorefr: new FormControl('', [Validators.required]),
    npepouxfr: new FormControl('', [Validators.required]),
    datnaiepfr: new FormControl('', [Validators.required]),
    niveauetudepfr: new FormControl('', [Validators.required]),
    fonctionepfr: new FormControl('', [Validators.required]),
    salaireepfr: new FormControl('', [Validators.required]),
    etatepouxfr: new FormControl('', [Validators.required]),
    specialitefr1: new FormControl('', [Validators.required]),
    specialitefr2: new FormControl('', [Validators.required]),
    specialitefr3: new FormControl('', [Validators.required]),
    specialitefr4: new FormControl('', [Validators.required]),
    anneefr1: new FormControl('', [Validators.required]),
    anneefr2: new FormControl('', [Validators.required]),
    anneefr3: new FormControl('', [Validators.required]),
    anneefr4: new FormControl('', [Validators.required]),
    etablissfr1: new FormControl('', [Validators.required]),
    etablissfr2: new FormControl('', [Validators.required]),
    etablissfr3: new FormControl('', [Validators.required]),
    etablissfr4: new FormControl('', [Validators.required]),
    ouiactbenefr: new FormControl('', [Validators.required]),
    lieuactbenefr: new FormControl('', [Validators.required]),
    
  });

  public ficheenfantsForm = new FormGroup({
    ordreen: new FormControl('', [Validators.required]),
    prenomen: new FormControl('', [Validators.required]),
    datenaien: new FormControl('', [Validators.required]),
    niveauetudeen: new FormControl('', [Validators.required]),
    centreintereten: new FormControl('', [Validators.required]),
    etatsanteen: new FormControl('', [Validators.required]),
  });

  public offreForm = new FormGroup({
    societeex: new FormControl('', [Validators.required]),
    duauex: new FormControl('', [Validators.required]),
    fonctionex: new FormControl('', [Validators.required]),
    inidiffex: new FormControl('', [Validators.required]),
    salaireex: new FormControl('', [Validators.required]),
   
  });


  public complfrsForm = new FormGroup({
    formationf: new FormControl('', [Validators.required]),
    attestationf: new FormControl('', [Validators.required]),
    anneef: new FormControl('', [Validators.required]),
    etablissementf: new FormControl('', [Validators.required]),
  });

  
  constructor(
    private dataService:DataService,
    private router :Router
  ) { }

  ngOnInit(): void {
   this. getallcompfrs();
    this.getallfiche();
    this.getallenfa();
    this.getalloffre() ;

  }


  getallfiche() {
    this.dataService.get('Ficherenseignements/getAllFicherenseignement.json').subscribe(res => {
      this.Ficherenseignements = res.data;
      

    })
  }


  getallenfa() {
    this.dataService.get('Enfantsfrs/getAllEnfantsfr.json').subscribe(res => {
      this.Enfantsfrs = res.data;
      

    })
  }



  getalloffre() {
    this.dataService.get('Expproffrs/getAllExpproffr.json').subscribe(res => {
      this.Expproffrs = res.data;
      

    })
  }

  

  getallcompfrs() {
    this.dataService.get('Formacomplfrs/getAllFormacomplfr.json').subscribe(res => {
      this.Formacomplfrs = res.data;
      

    })
  }


}
