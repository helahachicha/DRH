import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-detail-fiche-devalu',
  templateUrl: './detail-fiche-devalu.component.html',
  styleUrls: ['./detail-fiche-devalu.component.scss']
})
export class DetailFicheDevaluComponent implements OnInit {
id:any
public Indicateursuivis
public Infoficheevaluations
public testForm = new FormGroup({

 label3 : new FormControl('', [Validators.required]), 
 label6 : new FormControl('', [Validators.required]), 

 });
  constructor(
    private dataService:DataService,
    private router :Router,
    private route:ActivatedRoute
  ) { }

  ngOnInit(): void {
    this.getficheById()
    this.getnomById()
  }
  getficheById() {
    this.id=this.route.snapshot.params['id'];
     this.dataService.get('Indicateursuivis/getIndicateursuiviBySouscomp.json?id='+this.id).subscribe(
       res => {
       this.Indicateursuivis=res.data;
       console.log("testtttttt",this.Indicateursuivis)
 
     })
   }

   getnomById() {
    this.id=this.route.snapshot.params['id'];
     this.dataService.get('Infoficheevaluations/getInfoficheevaluation.json?id='+this.id).subscribe(
       res => {
       this.Infoficheevaluations=res.data;
       console.log("testtttttt",this.Infoficheevaluations)
 
     })
   }
}
