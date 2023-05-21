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
  public Infoemployes
  public open:boolean=false
  id: any;

  public ficheForm = new FormGroup({
    infoemploye_id: new FormControl('', [Validators.required]),
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
    this.getAllNom()
    this.getAllCategorie()
  
  }

  
   getAllCategorie() {
    this.dataService.get('Categories/getAllCategorie.json').subscribe(res => {
      this.Categories = res.data;
    }
    )
  }
  getAllNom() {
    this.dataService.get('Infoemployes/getAllInfoemploye.json').subscribe(res => {
      this.Infoemployes = res.data;
        
        }
    )
  }

  formCompteance: any[] = [];

  onChangeData(e){
     let id = e.target.value
      this.dataService.get('detailprofilpostes/getDetailppByCat.json?id='+id).subscribe(async res=>{
        this.competences = res.data;
        this.formCompteance = Object.values(res.data.formcompetences);
        console.log(this.formCompteance)
        this.open = true
      })

  }

  points=[];
  onChangePoint(comp_id:any,id:any,event:any){
    console.log(comp_id)
    this.result=0

   let sum=0
    let exist=false
    let point1:string
    point1=event.target.value;
    point1=JSON.parse(point1)
    let point:number
    point=<number><unknown>point1

    this.points.forEach(element => {
      if(element.indicateurId==id){
        element.value=point
        exist=true
      }
    });

    if(exist==false){
      this.points.push({ compId : comp_id,indicateurId : id,value:point1})
    }
    console.log(this.points)
    this.points.forEach(element => {
      sum+=element.value
    //  console.log(sum)

    });

   let count=this.points.length
    this.result =sum/count
   // console.log(this.result)


  }


  result:any
  calculerIndic(){
    /*format Data*/

   const DataInfo = {
    infoemploye_id:this.ficheForm.controls.infoemploye_id.value,
    objetevaluation:this.ficheForm.controls.objetevaluation.value,
    dateevaluation:this.ficheForm.controls.dateevaluation.value,
    decisiondirection:this.ficheForm.controls.decisiondirection.value,
    categorie_id:this.ficheForm.controls.categorie_id.value,
    moyen:this.result,
    point: this.points
   }
   console.log('test',DataInfo)
    this.dataService.post('employes/calculpointIndic.json',DataInfo).subscribe(res=> {
      //this.router.navigate(['/list-fiche-devalu'])
      console.log('res',res.data)
      this.points=[]
      this.result=0

      })

  }
  pointsoucomp=[];

  onChangePointIndicateur(souscomp_id:any,id:any,event:any){
    console.log(souscomp_id)
    this.result1=0

    let sum=0
     let exist=false
     let point1:string
     point1=event.target.value;
     point1=JSON.parse(point1)
     let point:number
     point=<number><unknown>point1

     this.pointsoucomp.forEach(element => {
       if(element.indicateurSouId==id){
         element.value=point
         exist=true
       }
     });
     

     if(exist==false){
       this.pointsoucomp.push({ SoucompetenceId : souscomp_id,indicateurSouId : id,value:point1})
     }
     console.log(this.pointsoucomp)
     this.pointsoucomp.forEach(element => {
       sum+=element.value
     });

    let count=this.pointsoucomp.length
     this.result1 =sum/count

   }


   result1:any
  calculerIndicSou(){
    /*format Data*/
   const DataInfo = {
    infoemploye_id:this.ficheForm.controls.infoemploye_id.value,
    objetevaluation:this.ficheForm.controls.objetevaluation.value,
    dateevaluation:this.ficheForm.controls.dateevaluation.value,
    decisiondirection:this.ficheForm.controls.decisiondirection.value,
    categorie_id:this.ficheForm.controls.categorie_id.value,
    score:this.result1,
    point: this.pointsoucomp
   }
  
   console.log(DataInfo)

    this.dataService.post('employes/calculpointIndicSou.json',DataInfo).subscribe(res=> {
      //this.router.navigate(['/list-fiche-devalu'])
      console.log('res',res.data)
      this.pointsoucomp=[]
      this.result1=0
      })
  }
 


}
