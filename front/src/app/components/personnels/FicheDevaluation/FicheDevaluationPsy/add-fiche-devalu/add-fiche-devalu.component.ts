import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-add-fiche-devalu',
  templateUrl: './add-fiche-devalu.component.html',
  styleUrls: ['./add-fiche-devalu.component.scss']
})
export class AddFicheDevaluComponent implements OnInit {

  public Niveauvises
  public Categories
  public competences
  public open:boolean=false

  public ficheForm = new FormGroup({
    nomprenom: new FormControl('', [Validators.required]),
    objetevaluation: new FormControl('', [Validators.required]),
    dateevaluation: new FormControl('', [Validators.required]),
    decisiondirection: new FormControl('', [Validators.required]),
    categorie_id: new FormControl('', [Validators.required]),
  });

  public indicateurform=new FormGroup({
    label: new FormControl('', [Validators.required]),

  })
  constructor(
    private dataService:DataService,
    private router :Router
  ) { }

  ngOnInit(): void {
    this.getAllCategorie()
  }

   adddetailfichedevalu() {
    this.dataService.post('Infoficheevaluations/addInfoficheevaluation.json',this.ficheForm.value).subscribe(res=> {
      this.router.navigate(['/list-fiche-devalu'])
      })
   }

   getAllCategorie() {
    this.dataService.get('Categories/getAllCategorie.json').subscribe(res => {
      this.Categories = res.data;
    }
    )
  }

  formCompteance: any[] = [];
indic:any=[];
label:any=[];
  onChangeData(e){

     let id = e.target.value



      this.dataService.get('detailprofilpostes/getDetailppByCat.json?id='+id).subscribe(async res=>{
        console.log('hhh',res.data[0])
        this.competences = res.data;

        this.formCompteance = Object.values(res.data.formcompetences);
        this.open = true
  //this.label=this.competences.souscompetences[3].indicasoucompas[0].label
      
        this.indic=this.competences.formcompetences
        console.log('indic',this.indic)
        await console.log('competencesssssssssssssssssss',this.formCompteance[1].competence.souscompetences[0 ])
      })

  }
}
