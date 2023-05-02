import { Component, OnInit } from '@angular/core';
import { FormArray, FormBuilder, FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-detail-profile',
  templateUrl: './detail-profile.component.html',
  styleUrls: ['./detail-profile.component.scss']
})
export class DetailProfileComponent implements OnInit {

  id: any;
  public detailpp
  public open:boolean=false
  public FormGenerator: FormGroup;
  public  Categories
  public Competences
  public Niveauvises

  constructor(
    private dataService: DataService,
    private route: ActivatedRoute,
    public fb: FormBuilder,
    public router:Router
  ) { }

  get FormcompetenceData(): FormArray {
    return <FormArray>this.FormGenerator.get('Formcompetence');
  }

  ngOnInit(): void {
    this.createForm();
    this.getAllCategorie();
    this.getAllcompetence();
    this.getAllniveau();
    this.getDetailByCatID();
  }

  getDetailByCatID(){
    this.route.params.subscribe(params => {
      const id = params['id'];
      this.dataService.get('Detailprofilpostes/getDetailppByCat.json?id=' + id).subscribe(
        res => {
          this.detailpp = res.data;
          let formcompetences = res.data.formcompetences;
          this.open=true;
         // console.log(this.detailpp)
          // affecter les valeurs aux champs de saisie
          this.FormGenerator.patchValue({
            nom: this.detailpp.nom,
            fonction: this.detailpp.fonction,
            categorie_id: this.detailpp.categorie_id,
            superhierar: this.detailpp.superhierar,
            supervision: this.detailpp.supervision,
            interim: this.detailpp.interim,
            fonctionelaboration: this.detailpp.fonctionelaboration,
            fonctionverification: this.detailpp.fonctionverification,
            fonctionabrobation: this.detailpp.fonctionabrobation,
            nomprenomelab: this.detailpp.nomprenomelab,
            nomprenomverif: this.detailpp.nomprenomverif,
            nomprenomabrob: this.detailpp.nomprenomabrob
          });

          // supprimer les anciens champs de saisie
          while (this.FormcompetenceData.length !== 0) {
            this.FormcompetenceData.removeAt(0);
          }

          // ajouter les champs de saisie avec les valeurs récupérées
          formcompetences.forEach(element => {
            this.FormcompetenceData.push(this.createIndicateurGroup(element));
          });
        });
    });
  }
  getAllCategorie() {
    this.dataService.get('Categories/getAllCategorie.json').subscribe(res => {
      this.Categories = res.data;
      //console.log('test',this.Categories)
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

 addprofilposte() {
  const data = this.FormGenerator.value
  console.log("res.data",data)

      this.dataService.post('Profilpostes/addProfilposte.json',data).subscribe(res=> {
        this.router.navigate(['/listingprofilposte'])
         })


  }
  addInput(element) {
    this.FormcompetenceData.push(this.createIndicateurGroup(element));
  }
  addInputSoucomp(i) {
    const optionsArray = <FormArray>this.FormcompetenceData.at(i).get('souscompetence');
    optionsArray.push(this.createSoucomp('',null));
   }
   indicateurSoucomp(i: number, j: number) {
    const souscompArray = this.FormGenerator.get(`Formcompetence.${i}.Souscompetence`) as FormArray;
    const indicateurSoucompArray = souscompArray.at(j).get('indicateurSoucomp') as FormArray;
    indicateurSoucompArray.push(this.createIndicaSouscomp());
  }

  removeSoucomp(i, j) {

    (<FormArray>this.FormcompetenceData.at(i).get('souscompetence')).removeAt(j);

}



  removedIndica(index) {
    const Indicateur = this.FormGenerator.get('Formcompetence') as FormArray

    Indicateur.removeAt(index);

  }


createIndicaSouscomp(): FormGroup {
  return this.fb.group({
    label: [''],
  });
}

createSoucomp(id:string,label:string): FormGroup {
  return this.fb.group({
    id: [id, [Validators.required]],
    indicateurSoucomp:   this.fb.array([this.createIndicaSouscomp()]),

  });
}
  createForm() {
    this.FormGenerator = this.fb.group({
      nom: new FormControl('', [Validators.required]),
      fonction: new FormControl('', [Validators.required]),
      categorie_id: new FormControl('', [Validators.required]),
      superhierar: new FormControl('', [Validators.required]),
      supervision: new FormControl('', [Validators.required]),
      interim: new FormControl('', [Validators.required]),
      fonctionelaboration: new FormControl('', [Validators.required]),
      fonctionverification: new FormControl('', [Validators.required]),
      fonctionabrobation: new FormControl('', [Validators.required]),
      nomprenomelab: new FormControl('', [Validators.required]),
      nomprenomverif: new FormControl('', [Validators.required]),
      nomprenomabrob: new FormControl('', [Validators.required]),
      Formcompetence: this.fb.array([]),

    });

  }
  createIndicateurGroup(element): FormGroup {
    return this.fb.group({
      competence_id: [element.competence_id, [Validators.required]],
      souscompetence: this.fb.array(element.souscompet && Array.isArray(element.souscompet) ?
      element.souscompet.map(data => this.createSoucomp(data.id, data.label)) : []),
      niveauvise_id: [element.niveauvise_id, [Validators.required]],
      indicateur: this.fb.array(element.indicateursuivis && Array.isArray(element.indicateursuivis) ?
      element.indicateursuivis.map(data => this.createOption(data.id, data.label)) : [])
    })

  }
  createOption(id:string,label:string): FormGroup {
    return this.fb.group({
      id: [id, [Validators.required]],
      label: [label, [Validators.required]],

    });
  }
  addOptions(i) {
    const optionsArray = <FormArray>this.FormcompetenceData.at(i).get('indicateur');
    optionsArray.push(this.createOption('',null));
  }

  removeOptions(i, j) {

      (<FormArray>this.FormcompetenceData.at(i).get('indicateur')).removeAt(j);


  }

  enabled: boolean = false;
  disableInput(): void {
    this.enabled =! this.enabled ;
  }
  // enable input box
  enableInput(): void {
    this.enabled = true;
  }
}
