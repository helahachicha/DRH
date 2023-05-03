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

  onChangeData(e){
     let id = e.target.value
      this.dataService.get('detailprofilpostes/getDetailppByCat.json?id='+id).subscribe(async res=>{
        this.competences = res.data;
        this.formCompteance = Object.values(res.data.formcompetences);
        this.open = true
      })

  }

  points=[];
  onChangePoint(id:any,event:any){
   let sum=0
    let exist=false
    let point1:string
    point1=event.target.value;
    point1=JSON.parse(point1)
    let point:number
    point=<number><unknown>point1

    this.points.forEach(element => {
      if(element.key==id){
        element.value=point
        exist=true
      }
    });

    if(exist==false){
      this.points.push({ key : id,value:point1})
    }
    console.log(this.points)
    this.points.forEach(element => {
      sum+=element.value
    });

   let count=this.points.length
    this.result =sum/count


  }


  result:any
  calculer(){

    this.points.push({ result:this.result})

    this.dataService.post('Infoficheevaluations/calculpoint.json',this.points).subscribe(res=> {
      //this.router.navigate(['/list-fiche-devalu'])
      console.log('res',res.data)
      this.result=0
      this.points=[]
      })


  }

  
  pointsoucomp=[];

  onChangePointIndicateur(id:any,event:any){
    let sum=0
     let exist=false
     let point1:string
     point1=event.target.value;
     point1=JSON.parse(point1)
     let point:number
     point=<number><unknown>point1

     this.pointsoucomp.forEach(element => {
       if(element.key==id){
         element.value=point
         exist=true
       }
     });

     if(exist==false){
       this.pointsoucomp.push({ key : id,value:point1})
     }
     console.log(this.pointsoucomp)
     this.pointsoucomp.forEach(element => {
       sum+=element.value
     });

    let count=this.pointsoucomp.length
     let result =sum/count
     console.log(result)

     let formdata=new FormData()
     formdata.append('sum',JSON.stringify(result))


   }
}
