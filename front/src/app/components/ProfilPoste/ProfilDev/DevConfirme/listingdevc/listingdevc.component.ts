import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-listingdevc',
  templateUrl: './listingdevc.component.html',
  styleUrls: ['./listingdevc.component.scss']
})
export class ListingdevcComponent implements OnInit {


  public Idpropostedc
  public Profilpostedc


  public DevCForm = new FormGroup({
    majndc: new FormControl('', [Validators.required]),
    dudc: new FormControl('', [Validators.required]),
    Fonctiondc: new FormControl('', [Validators.required]),
    categoriedc: new FormControl('', [Validators.required]),
    suphierdc: new FormControl('', [Validators.required]),
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
    private dataService: DataService,
  ) { }

  ngOnInit(): void {
    this.getallDevJ();
    this.getallProfilP();
  }

  getallDevJ() {
    this.dataService.get('Idpropostedc/getAllIdpropostedc.json').subscribe(res => {
      this.Idpropostedc = res.data;
      console.log("hello", this.Idpropostedc)


    })
  }

  getallProfilP() {
    this.dataService.get('Profilpostedc/getAllProfilpostedc.json').subscribe(res => {
      this.Profilpostedc = res.data;
      console.log("hello", this.Profilpostedc)


    })
  }


}
