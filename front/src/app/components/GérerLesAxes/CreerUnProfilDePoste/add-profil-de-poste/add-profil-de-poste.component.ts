import { Component, OnInit } from '@angular/core';
import { FormArray, FormBuilder, FormControl, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-add-profil-de-poste',
  templateUrl: './add-profil-de-poste.component.html',
  styleUrls: ['./add-profil-de-poste.component.scss']
})
export class AddProfilDePosteComponent implements OnInit {

  public FormGenerator: FormGroup;

  public  Categories
  public Competences
  public Niveauvises
  public Profilpostes
  public open:boolean=false

  constructor(
    private dataService:DataService,
    private router :Router,
    public fb: FormBuilder,

  ) { }
  get FormcompetenceData(): FormArray {
    return <FormArray>this.FormGenerator.get('Formcompetence');
  }

  ngOnInit(): void {
   this.getAllCategorie();
   this.getAllcompetence();
   this.getAllniveau();
   this.createForm();
   this.getallprofile()
  }

 addprofilposte() {
  const data = this.FormGenerator.value
  console.log("res.data",data)

       this.dataService.post('Profilpostes/addProfilposte.json',data).subscribe(res=> {
         this.router.navigate(['/listingprofilposte'])
          })


  }
  getAllCategorie() {
    this.dataService.get('Categories/getAllCategorie.json').subscribe(res => {
      this.Categories = res.data;
    }
    )
  }
  getAllniveau() {
    this.dataService.get('Niveauvises/getAllNiveauvise.json').subscribe(res => {
      this.Niveauvises = res.data;
    }
    )
  }
  getAllcompetence() {
    this.dataService.get('Competences/getAllCompetence.json').subscribe(res => {
      this.Competences = res.data;
    }
    )
  }
  getallprofile() {
    this.dataService.get('Profilpostes/getAllProfilposte.json').subscribe(res => {
      this.Profilpostes = res.data;
      this.open=true
      console.log('test', this.Profilpostes)
    })
  }

removedCompetence(index) {
  const Indicateur = this.FormGenerator.get('Formcompetence') as FormArray
  Indicateur.removeAt(index);
}
  createForm() {
    this.FormGenerator = this.fb.group({
      profilposte_id: new FormControl('', [Validators.required]),
      fonction: new FormControl('', [Validators.required]),
      label: new FormControl('', [Validators.required]),
      superhierar: new FormControl('', [Validators.required]),
      supervision: new FormControl('', [Validators.required]),
      interim: new FormControl('', [Validators.required]),
      niveauvise: new FormControl('', [Validators.required]),
      fonctionelaboration: new FormControl('', [Validators.required]),
      fonctionverification: new FormControl('', [Validators.required]),
      fonctionabrobation: new FormControl('', [Validators.required]),
      nomprenomelab: new FormControl('', [Validators.required]),
      nomprenomverif: new FormControl('', [Validators.required]),
      nomprenomabrob: new FormControl('', [Validators.required]),
      Formcompetence: this.fb.array([this.createIndicateurGroup()]),

    });
  }
  createIndicateurGroup(): FormGroup {
    return this.fb.group({
      competence_id: ['', [Validators.required]],
      Souscompetence:  this.fb.array([this.createSoucomp()]),
      indicateur:  this.fb.array([this.createOption()]),
      // indicateurSoucomp:  this.fb.array([this.createIndicaSouscomp()]),

    })
  }
  createSoucomp(): FormGroup {
    return this.fb.group({
      label: [''],
      
      indicateurSoucomp:   this.fb.array([this.createIndicaSouscomp()]),

    });
  }


  createOption(): FormGroup {
    return this.fb.group({
      label: [''],
    });
  }
  createIndicaSouscomp(): FormGroup {
    return this.fb.group({
      label: [''],
    });
  }


  addInput() {
    this.FormcompetenceData.push(this.createIndicateurGroup());
  }

  addInputSoucomp(i) {
    const optionsArray = <FormArray>this.FormcompetenceData.at(i).get('Souscompetence');
    optionsArray.push(this.createSoucomp());
   }

   indicateurSoucomp(i: number, j: number) {
    const souscompArray = this.FormGenerator.get(`Formcompetence.${i}.Souscompetence`) as FormArray;
    const indicateurSoucompArray = souscompArray.at(j).get('indicateurSoucomp') as FormArray;
    indicateurSoucompArray.push(this.createIndicaSouscomp());
  }



  removeSoucomp(i, j) {

    (<FormArray>this.FormcompetenceData.at(i).get('Souscompetence')).removeAt(j);

}

  addOptions(i) {
    const optionsArray = <FormArray>this.FormcompetenceData.at(i).get('indicateur');
    optionsArray.push(this.createOption());
  }

  removeOptions(i, j) {

      (<FormArray>this.FormcompetenceData.at(i).get('indicateur')).removeAt(j);


  }


  addIndicaSouscomp(i) {
    const optionsArray = <FormArray>this.FormcompetenceData.at(i).get('indicateurSoucomp');
    optionsArray.push(this.createIndicaSouscomp());
  }

  removeIndicaSouscomp(i, j) {
      (<FormArray>this.FormcompetenceData.at(i).get('indicateurSoucomp')).removeAt(j);
  }
}
