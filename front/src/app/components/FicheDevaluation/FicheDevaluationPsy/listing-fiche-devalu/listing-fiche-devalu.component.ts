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
public Testtechniques
  id:any
  constructor(
    private dataService:DataService,
    private router :Router,
    private route:ActivatedRoute
  ) { }

  ngOnInit(): void {
  }

  getcoutById() {
    this.id=this.route.snapshot.params['id'];
    this.dataService.get('coutformaexternes/getCoutformaexterne.json?id='+this.id).subscribe(
      res => {
      this.coutformaexternes=res.data;
      console.log("hello",this.coutformaexternes)

      
    })
  }
  deletefichedevalu(id){
    this.dataService.delete('Profilpostes/deleteProfilposte.json?id='+id).subscribe(res => {
      //this.getallprofile()
    })
  }
}
