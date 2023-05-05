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
  public open: boolean = false
  public Echelleevaluations;
  public Souscompetences
  public Departements
  public Employes
  public abreviation
  public Polyvalences
  public Totalpolyvalences
  public Totalpolycompetences
  public Matrices
  public matriceForm = new FormGroup({
    note: new FormControl('', [Validators.required]),
  });
  
  constructor(
    private dataService: DataService,
    private route: ActivatedRoute,
    private router :Router

  ) { }

  ngOnInit(): void {
    this.getallechelle(); 
    this.getallmatricecompetence()
    this.getalldepartement()
    this.getallEmployer()
    this.getallabreviation()
    
    this.getallTotalpolyvalence()
    this.getallTotalpolcomp()
    this.getallMatrice()
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

  //bedelha bel get all sous competence 
 getallmatricecompetence() {
    this.dataService.get('Souscompetences/getAllSouscompetence.json').subscribe(res => {
      this.Souscompetences = res.data;
      this.open = true
      console.log('tes1',this.Souscompetences)
    })
  }
  getalldepartement() {
    this.dataService.get('Departements/getAllDepartement.json').subscribe(res => {
      this.Departements = res.data;
      this.open = true
    })
  }
  getallEmployer() {
    this.dataService.get('Employes/getAllEmployeByCatAndPc.json').subscribe(res => {
      this.Employes = res.data;
      this.open = true
      console.log('testtttt',this.Employes)
      
    })
  }
//tayarhommm....
  getallTotalpolyvalence() {
    this.dataService.get('Totalpolyvalences/getAllTotalpolyvalence.json').subscribe(res => {
      this.Totalpolyvalences = res.data;
      this.open = true
    })
  }
  
  getallTotalpolcomp() {
    this.dataService.get('Totalpolycompetences/getAllTotalpolycompetence.json').subscribe(res => {
      this.Totalpolycompetences = res.data;
      this.open = true
    })
  }
  getformaById() {
    this.id = this.route.snapshot.params['id'];
    this.dataService.get('Matrices/getMatriceByEmpId.json?id=' + this.id).subscribe(
      res => {
        this.Matrices = res.data;
      })
  }
  
  getallMatrice() {
    this.dataService.get('Matrices/getAllMatrice.json').subscribe(res => {
      this.Matrices = res.data;
      this.open = true
    })
  }

  //.....


  /*submit() {
    this.dataService.post('Matrices/addNoteMatrice.json',this.matriceForm.value).subscribe(res=> {
    this.router.navigate(['/liste-matrice'])
    })
 }*/

 /* getID(id:any){
    this.ids=id;
  }*/
 /* ids:any;
note:any=null;
  checknote(employee:any){
  
    employee.matrices.forEach((element: any) => {


      if(element.matricecompetence_id==this.ids){
        this.note=element.note;
        console.log(this.note)

      }else{
        this.note=null;
      }
    });

  }*/
  /*getMatriceByEmpId() {
    this.dataService.get('Matrices/getMatriceByEmpId.json').subscribe(res => {
      this.Matrices = res.data;
      this.open = true
      console.log('test',this.Matrices)
    })
    
  }*/
  /*getMatriceByEmpId() {
    this.id = this.route.snapshot.params['id'];
    this.dataService.get('Matrices/getMatriceByEmpId.json?id=' + this.id).subscribe(
      res => {
        this.Matrices = res.data;
      })
    
  }*/
  /*getPolyvalenceByMatCompId (){
    this.dataService.get('Polyvalences/getPolyvalenceByMatCompId.json').subscribe(res => {
      this.Polyvalences = res.data;
      this.open = true
      console.log('test',this.Polyvalences)
    })
  }*/
  /*getPolyvalenceByMatCompId() {
    this.id = this.route.snapshot.params['id'];
    this.dataService.get('Polyvalences/getPolyvalenceByMatCompId.json?id=' + this.id).subscribe(
      res => {
        this.Polyvalences = res.data;
      })
  }*/
  
 /* getAllPolyvalence() {
    this.dataService.get('Polyvalences/getAllPolyvalence.json').subscribe(res => {
      this.Polyvalences = res.data;
      this.open = true
      console.log('test', this.Polyvalences)
    })
  }*/
  
}
