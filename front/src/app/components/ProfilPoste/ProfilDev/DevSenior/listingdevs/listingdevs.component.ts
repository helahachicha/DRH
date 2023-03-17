import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-listingdevs',
  templateUrl: './listingdevs.component.html',
  styleUrls: ['./listingdevs.component.scss']
})
export class ListingdevsComponent implements OnInit {


  public Infogenseniors
  public Profilposteseniors


  public DevSForm = new FormGroup({
    majnds: new FormControl('', [Validators.required]),
    duds: new FormControl('', [Validators.required]),
    Fonctionds: new FormControl('', [Validators.required]),
    Categorieds: new FormControl('', [Validators.required]),
    Suphierds: new FormControl('', [Validators.required]),
    Superds: new FormControl('', [Validators.required]),
    Interimds: new FormControl('', [Validators.required]),

  });

  public ProfilPForm = new FormGroup({
    comptechds: new FormControl('', [Validators.required]),
    contenucomptechds: new FormControl('', [Validators.required]),
    comporgands: new FormControl('', [Validators.required]),
    gestempsds: new FormControl('', [Validators.required]),
    nvisegestempds: new FormControl('', [Validators.required]),
    isuivigestempds: new FormControl('', [Validators.required]),
    compcompords: new FormControl('', [Validators.required]),
    comminterads: new FormControl('', [Validators.required]),
    nvisecomminterads: new FormControl('', [Validators.required]),
    isuivicomminterads: new FormControl('', [Validators.required]),
    tracollds: new FormControl('', [Validators.required]),
    nvisetracollds: new FormControl('', [Validators.required]),
    isuivitracollds: new FormControl('', [Validators.required]),
    resprobds: new FormControl('', [Validators.required]),
    nviseresprobds: new FormControl('', [Validators.required]),
    isuiviresprobds: new FormControl('', [Validators.required]),
    servexcellds: new FormControl('', [Validators.required]),
    nviseservexcellds: new FormControl('', [Validators.required]),
    isuiviservexcellds: new FormControl('', [Validators.required]),
    raisconcepds: new FormControl('', [Validators.required]),
    nviseraisconcepds: new FormControl('', [Validators.required]),
    isuiviraisconcepds: new FormControl('', [Validators.required]),
    leadershipds: new FormControl('', [Validators.required]),
    nviseleadershipds: new FormControl('', [Validators.required]),
    isuivileadershipds: new FormControl('', [Validators.required]),
    droitds: new FormControl('', [Validators.required]),
    contenudroitds: new FormControl('', [Validators.required]),
    devoirds: new FormControl('', [Validators.required]),
    contenudevoirds: new FormControl('', [Validators.required]),
    validationds: new FormControl('', [Validators.required]),
    contenuvalidds: new FormControl('', [Validators.required]),
    fonctionds: new FormControl('', [Validators.required]),
    nompreds: new FormControl('', [Validators.required]),
    fonctionds1: new FormControl('', [Validators.required]),
    nompreds1: new FormControl('', [Validators.required]),
    fonctionds2: new FormControl('', [Validators.required]),
    nompreds2: new FormControl('', [Validators.required]),


  });

  constructor(
    private dataService: DataService,
  ) { }

  ngOnInit(): void {
    this.getallDevS();
    this.getallProfilP();
  }


  getallDevS() {
    this.dataService.get('Infogenseniors/getAllInfogensenior.json').subscribe(res => {
      this.Infogenseniors = res.data;
      console.log("hello", this.Infogenseniors)


    })
  }

  getallProfilP() {
    this.dataService.get('Profilposteseniors/getAllProfilpostesenior.json').subscribe(res => {
      this.Profilposteseniors = res.data;
      console.log("hello", this.Profilposteseniors)


    })
  }


}
