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
public testForm = new FormGroup({
  label1: new FormControl('', [Validators.required]), 

 });
  constructor(
    private dataService:DataService,
    private router :Router,
    private route:ActivatedRoute
  ) { }

  ngOnInit(): void {
  }
  gettestById() {
    this.id=this.route.snapshot.params['id'];
     this.dataService.get('Comptechniques/getComptechByTesttech.json?id='+this.id).subscribe(
       res => {
      // this.Testtechniques=res.data;
      // console.log("testtt",this.Testtechniques)
 
     })
   }
}
