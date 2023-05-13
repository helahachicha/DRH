import { Component, OnInit } from '@angular/core';
import { FormGroup, FormControl, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-editficheren',
  templateUrl: './editficheren.component.html',
  styleUrls: ['./editficheren.component.scss']
})
export class EditficherenComponent implements OnInit {
  id:any
  data:any;
  message:any;
  public Infoemployes
  public moyenForm = new FormGroup({
    nomprenom: new FormControl('', [Validators.required]),
    adresse: new FormControl('', [Validators.required]),
    telprof: new FormControl('', [Validators.required]),
    telpersonnel: new FormControl('', [Validators.required]),
    contact: new FormControl('', [Validators.required]),
    mailprof: new FormControl('', [Validators.required]),
    mailpersonnel: new FormControl('', [Validators.required]),
    servicetravail: new FormControl('', [Validators.required]),
    poste_id: new FormControl('', [Validators.required]),
    datenaissance: new FormControl('', [Validators.required]),
    lieu: new FormControl('', [Validators.required]),
    nationnalite: new FormControl('', [Validators.required]),
    cin: new FormControl('', [Validators.required]),
    delivreea: new FormControl('', [Validators.required]),
    datedelivrance: new FormControl('', [Validators.required]),
    permis: new FormControl('', [Validators.required]),
    datepermis: new FormControl('', [Validators.required]),
    logement: new FormControl('', [Validators.required]),
    moytransport: new FormControl('', [Validators.required]),
    estimatransport: new FormControl('', [Validators.required]),
    etatsociale: new FormControl('', [Validators.required]),
    dateetatsociale: new FormControl('', [Validators.required]),
    
  });
  constructor(
    private dataService:DataService,
    private router:Router,
    private route:ActivatedRoute
  ) { }

  ngOnInit(): void {
    this.getEmpById();
    
  }
  
  editinfoemployer() {
    this.dataService.post('Infoemployes/editInfoemploye.json?id=' + this.id, this.moyenForm.value).subscribe(res => {
      this.data = res;
      this.message=this.data.message;
      if (this.message==" Modifier avec succés !"){
        this.router.navigate(['/liste-fiche-rensignement'])
      }
      console.log(this.message);
      
    })
      
  }
  getEmpById() {
    this.id=this.route.snapshot.params['id'];
    this.dataService.get('Infoemployes/getInfoemployeById.json?id='+this.id).subscribe(
      res => {
      this.Infoemployes=res.data; 
      console.log('test', this.Infoemployes)
    })
    
  }
}
