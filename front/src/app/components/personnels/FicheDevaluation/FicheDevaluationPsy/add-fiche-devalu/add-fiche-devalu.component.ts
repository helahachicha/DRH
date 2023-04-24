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
  public ficheForm = new FormGroup({
    nomprenom: new FormControl('', [Validators.required]),
    objetevaluation: new FormControl('', [Validators.required]),
    dateevaluation: new FormControl('', [Validators.required]),
    decisiondirection: new FormControl('', [Validators.required]),
    categorie_id: new FormControl('', [Validators.required]),
  });

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
      console.log('testt',this.ficheForm.value)
      })
   }

   getAllCategorie() {
    this.dataService.get('Categories/getAllCategorie.json').subscribe(res => {
      this.Categories = res.data;
    }
    )
  }
  onChangeData(e){
     let id = e.target.value



      this.dataService.get('detailprofilpostes/getDetailppByCat.json?id='+id).subscribe(res=>{
        console.log(res.data)
        this.competences = res.data;


      })

  }
}
