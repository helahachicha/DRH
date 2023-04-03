import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-listing-fiche-devalu',
  templateUrl: './listing-fiche-devalu.component.html',
  styleUrls: ['./listing-fiche-devalu.component.scss']
})
export class ListingFicheDevaluComponent implements OnInit {
  id:any
  public Infoficheevaluations
  constructor(
    private dataService:DataService,
    private router :Router,
    private route:ActivatedRoute
  ) { }

  ngOnInit(): void {
    this.getallnom()
  }

  getallnom() {
    this.dataService.get('Infoficheevaluations/getAllNom.json').subscribe(res => {
      this.Infoficheevaluations = res.data;
    })
  }
  deletenom(id){
    this.dataService.delete('Infoficheevaluations/deleteInfoficheevaluation.json?id='+id).subscribe(res => {
      this.getallnom()
    })
  }
}
