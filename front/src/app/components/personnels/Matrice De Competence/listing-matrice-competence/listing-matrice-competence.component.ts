import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute } from '@angular/router';
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
  public Matricecompetences
  public Departements
  public Employes
  public abreviation
  public Matrices
  public Polyvalences

  public externeForm = new FormGroup({
    valeur: new FormControl('', [Validators.required]),
    note: new FormControl('', [Validators.required]),
  })

  constructor(
    private dataService: DataService,
    private route: ActivatedRoute
  ) { }

  ngOnInit(): void {
    this.getallechelle(); 
    this.getallmatricecompetence()
    this.getalldepartement()
    this.getallEmployer()
    this.getallabreviation()
    //this.getMatriceByEmpId()
    this.getPolyvalenceByMatCompId
  
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
    })
  }
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
  getPolyvalenceByMatCompId() {
    this.id = this.route.snapshot.params['id'];
    this.dataService.get('Polyvalences/getPolyvalenceByMatCompId.json?id=' + this.id).subscribe(
      res => {
        this.Polyvalences = res.data;
      })
  }
  
  getallEmployer() {
    this.dataService.get('Employes/getAllEmployeByCat.json').subscribe(res => {
      this.Employes = res.data;
      this.open = true
    })
  }
  
}
