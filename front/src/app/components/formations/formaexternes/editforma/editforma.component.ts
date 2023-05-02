import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-editforma',
  templateUrl: './editforma.component.html',
  styleUrls: ['./editforma.component.scss']
})
export class EditformaComponent implements OnInit {
  public formaexternes;
  id: any;
  data:any;
  message:any;
  public  Themeformations;

  public externeForm = new FormGroup({
    typecomp: new FormControl('', [Validators.required]),
    themeformation_id: new FormControl('', [Validators.required]),
    participant: new FormControl('', [Validators.required]),
    nbparticipant: new FormControl('', [Validators.required]),
    raisonforma: new FormControl('', [Validators.required]),
    organismeforma: new FormControl('', [Validators.required]),
    formalite: new FormControl('', [Validators.required]),
    formateur: new FormControl('', [Validators.required]),
    raisonchoix: new FormControl('', [Validators.required]),
    dureeforma: new FormControl('', [Validators.required]),
    nbjour: new FormControl('', [Validators.required]),
    nbhjour: new FormControl('', [Validators.required]),
    date: new FormControl('', [Validators.required]),
    horaireforma: new FormControl('', [Validators.required]),
    pause: new FormControl('', [Validators.required]),
    lieuforma: new FormControl('', [Validators.required]),
  });

  constructor(
    private dataService: DataService,
    private router: Router,
    private route: ActivatedRoute
  ) { }

  ngOnInit(): void {
    this.getformaById();
    this.getallthemeforma();
  }

  getformaById() {
    this.id = this.route.snapshot.params['id'];
    this.dataService.get('formaexternes/getFormaexterne.json?id=' + this.id).subscribe(
      res => {
        this.formaexternes = res.data;
      })
  }
  editforma() {
    this.dataService.post('formaexternes/editFormaexterne.json?id=' + this.id, this.externeForm.value).subscribe(res => {
      this.data = res;
      this.message=this.data.message;
      if (this.message=="Formation modifier avec succés !"){
        this.router.navigate(['/listingforma'])
      }
      console.log(this.message);
      
    })
      
  }
  getallthemeforma() {
    this.dataService.get('Themeformations/getAllThemeformation.json').subscribe(res => {
      this.Themeformations = res.data;
    })
  }
}
