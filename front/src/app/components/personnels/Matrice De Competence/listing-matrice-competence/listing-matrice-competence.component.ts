import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-listing-matrice-competence',
  templateUrl: './listing-matrice-competence.component.html',
  styleUrls: ['./listing-matrice-competence.component.scss']
})


export class ListingMatriceCompetenceComponent implements OnInit {
  id:any
  result: number;

  public open: boolean = false
  public Echelleevaluations;
  public Matricecompetences
  public Departements
  public Employes
  public abreviation
  public Polyvalences
  public Totalpolyvalences
  public Totalpolycompetences
  public Matrices
  public Polycompetences

 
  
  constructor(
    private dataService: DataService,
    private route: ActivatedRoute,
    private router :Router

  ) { }
  
  ngOnInit(): void {
    this.getallechelle(); 
    this.getallmatricecompetence();
    this.getalldepartement();
    this.getallEmployer();
    this.getallabreviation();
    this.getallcalculPolyval();
    this.getTotalpolyVal();
    this.getTotalpolyComp();
    this.getallcalculPolycomp();
  }
  

  
   
  getallechelle() {
    this.dataService.get('Echelleevaluations/getAllEchelleevaluation.json').subscribe(res => {
      this.Echelleevaluations = res.data;
      this.open = true
    })
  }
  getallabreviation() {
    this.dataService.get('Echelleevaluations/getAllAbreviationEV.json').subscribe(res => {
      this.abreviation = res.data;
      this.open = true
    })
  }

  
 getallmatricecompetence() {
    this.dataService.get('Matricecompetences/getAllMatricecompetence.json').subscribe(res => {
      this.Matricecompetences = res.data;
      this.open = true
     // console.log('tes1',this.Matricecompetences)
    })
  }
  getalldepartement() {
    this.dataService.get('Departements/getAllDepartement.json').subscribe(res => {
      this.Departements = res.data;
      this.open = true 
    })
  }

  getallEmployer() {
    this.dataService.get('Employes/getAllEmployeByCat.json').subscribe(res => {
      this.Employes = res.data;

      this.open = true
    //  console.log('Employes',this.Employes)
    })
  }
  
  evalu=[];
  onChangeEval(mcId:any, id:any,event:any){
   let sum=0
    let exist=false
    let evaluation:string
    evaluation=event.target.value;
    //evaluation=JSON.parse(evaluation)

    this.evalu.forEach(element => {
      if(element.empId==id && element.MCId==mcId){
        element.value=evaluation
        exist=true
      }
    });

    if(exist==false){
      this.evalu.push({ MCId : mcId, empId : id, value:evaluation})
    }
   // console.log(this.evalu)
  }
  

  
  AddEval(){

    this.dataService.post('matrices/addEvaluation.json',this.evalu).subscribe(res=> {
     // console.log('res',res.data)
      this.evalu=[]
      })
  }


  calculPolyval(id: any, index: number) {
    this.dataService.get('polyvalences/calculPolyvalence.json?id=' + id).subscribe(
      res => {
       // console.log('res', res.data);
        // Update the Polyvalence value for the corresponding input field
        this. getallcalculPolyval()
        this.Employes[0].matrices[index].polyvalence = res.Polyvalence;
      },
      error => {
      //  console.log('error', error);
        // Handle the error here, for example by displaying an error message
      }
    );
  }


  calculPolycomp  (id: any, index: number) {
    this.dataService.get('polycompetences/calculPolycompetence.json?id=' + id).subscribe(
      res => {
      //  console.log('res', res.data);
        // Update the Polycompetence value for the corresponding input field
        
        window.location.reload()
        this.Employes[0].matrices[index].polycompetence = res.Polycompetence;
       
      },
      error => {
      //  console.log('error', error);
        // Handle the error here, for example by displaying an error message
      }
    );
  }


  calculTotalPolycomp() {
    this.dataService.get('polycompetences/calculTotalcomp.json').subscribe(
      res => {
        this. getTotalpolyComp();
      },
    );
  }
//dxfcgvbhjn,kl;m:
  calculTotalPolyval() {
    this.dataService.get('polyvalences/calculTotalval.json').subscribe(
      res => {
   this.getTotalpolyVal();
    },

    );
  }

  getallcalculPolycomp() {
    this.dataService.get('Polycompetences/getAllPolycompetence.json').subscribe(res => {
      this.Polycompetences = res.data;
      //console.log(this.Polycompetences);
    })
  }

  getallcalculPolyval() {
    this.dataService.get('Polyvalences/getallPolyvalence.json').subscribe(res => {
      this.Polyvalences = res.data;
      console.log(this.Polyvalences);
    })
  }
  
  getTotalpolyComp() {
    this.dataService.get('Totalpolycompetences/getAllTotalpolycompetence.json').subscribe(
      res => {
        this.Totalpolycompetences = res.data;
       // console.log('totalcomp', this.Totalpolycompetences);
       
      },
    );
    }
    getTotalpolyVal() {
        this.dataService.get('Totalpolyvalences/getAllTotalpolyvalence.json').subscribe(res => {
          this.Totalpolyvalences = res.data;
        //  console.log('totalpoly', this.Totalpolyvalences)
      })
    }
}
