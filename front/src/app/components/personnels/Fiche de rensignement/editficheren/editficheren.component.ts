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
  public Postes
  public moyenForm = new FormGroup({
    nomprenom: new FormControl('', [Validators.required, Validators.pattern('^[a-zA-Z ]*$')]),
    adresse: new FormControl('', [Validators.required, Validators.pattern('^[a-zA-Z ]*$')]),
    telprof: new FormControl('', [Validators.required,Validators.pattern(/^\d{1,8}$/),
      this.maxLengthValidator(8)
    ]),
    telpersonnel: new FormControl('', [Validators.required,Validators.pattern(/^\d{1,8}$/),
      this.maxLengthValidator(8)]),
    contact: new FormControl('', [Validators.required,Validators.pattern(/^\d{1,8}$/),
      this.maxLengthValidator(8)]),
    mailprof: new FormControl('', [Validators.required, Validators.email]),
    mailpersonnel: new FormControl('', [Validators.required, Validators.email]),
    servicetravail: new FormControl('', [Validators.required, Validators.pattern('^[a-zA-Z ]*$')]),
    poste_id: new FormControl('', [Validators.required]),
    datenaissance: new FormControl('', [Validators.required]),
    lieu: new FormControl('', [Validators.required, Validators.pattern('^[a-zA-Z ]*$')]),
    nationnalite: new FormControl('', [Validators.required, Validators.pattern('^[a-zA-Z ]*$')]),
    cin: new FormControl('', [Validators.required,Validators.pattern(/^\d{1,8}$/),
    this.maxLengthValidator(8)]),
    delivreea: new FormControl('', [Validators.required, Validators.pattern('^[a-zA-Z ]*$')]),
    datedelivrance: new FormControl('', [Validators.required]),
    permis: new FormControl('', [Validators.required]),
    datepermis: new FormControl('', [Validators.required]),
    logement: new FormControl('', [Validators.required]),
    moytransport: new FormControl('', [Validators.required]),
    estimatransport: new FormControl('', [Validators.required]),
    etatsociale: new FormControl('', [Validators.required]),
    dateetatsociale: new FormControl('', [Validators.pattern('^[a-zA-Z ]*$')]),
    
  });
  
  constructor(
    private dataService:DataService,
    private router:Router,
    private route:ActivatedRoute
  ) { }

  ngOnInit(): void {
    this.getEmpById();
    this.getallposte()
    
  }

  getEmpById() {
    this.id = this.route.snapshot.params['id'];
    this.dataService.get('Infoemployes/getInfoemployeById.json?id=' + this.id).subscribe(
      res => {
        this.Infoemployes = res.data[0];
      }
    );
  }
  
  
  editinfoemployer() {
    this.dataService.post('Infoemployes/editInfoemploye.json?id=' + this.id, this.moyenForm.value).subscribe(res => {
      this.data = res;
      this.message=this.data.message;
        this.router.navigate(['/liste-fiche-rensignement'])
      
    })
      
  }

  getallposte() {
    this.dataService.get('Postes/getAllPoste.json').subscribe(res => {
      this.Postes = res.data;
    })
  }

  maxLengthValidator(maxLength: number) {
    return (control: FormControl) => {
      const value = control.value;
      if (value && value.toString().length > maxLength) {
        return { maxLengthExceeded: true };
      }
      return null;
    };
  }
}
