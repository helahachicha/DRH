import { Component, OnInit } from '@angular/core';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-listing-matrice-competence',
  templateUrl: './listing-matrice-competence.component.html',
  styleUrls: ['./listing-matrice-competence.component.scss']
})
export class ListingMatriceCompetenceComponent implements OnInit {
  public open: boolean = false
  public Echelleevaluations;
  public Matricecompetences
  public Departements
  public Employes
  public abreviation
  constructor(
    private dataService: DataService,
  ) { }

  ngOnInit(): void {
    this.getallechelle(); 
    this.getallmatricecompetence()
    this.getalldepartement()
    this.getallEmployer()
    this.getallabreviation()
   
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
      console.log('testab', this.abreviation)
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
      console.log('test',this.Employes)
    })
  }
  
}
