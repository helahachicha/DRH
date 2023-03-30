import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-listing-fiche-devalu',
  templateUrl: './listing-fiche-devalu.component.html',
  styleUrls: ['./listing-fiche-devalu.component.scss']
})
export class ListingFicheDevaluComponent implements OnInit {
public Testtechniques
  
  constructor(
    private dataService:DataService,
  ) { }

  ngOnInit(): void {
  }
  deletefichedevalu(id){
    this.dataService.delete('Profilpostes/deleteProfilposte.json?id='+id).subscribe(res => {
      //this.getallprofile()
    })
  }
}
