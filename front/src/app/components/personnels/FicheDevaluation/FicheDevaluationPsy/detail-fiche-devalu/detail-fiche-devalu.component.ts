import { Component, OnInit } from '@angular/core';
import { FormArray, FormBuilder, FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-detail-fiche-devalu',
  templateUrl: './detail-fiche-devalu.component.html',
  styleUrls: ['./detail-fiche-devalu.component.scss']
})
export class DetailFicheDevaluComponent implements OnInit {
id:any

 public Infoficheevaluations
public open:boolean=false
public Formcompetences



  constructor(
    private dataService:DataService,
    private route:ActivatedRoute,
 
  ) { }

  ngOnInit(): void {  
   this.getDetailByEmpID()
   this.getFormcompetencebyDetailppId()

  }

getDetailByEmpID(){
  this.route.params.subscribe(params => {
    const id = params['id'];
    this.dataService.get('Infoficheevaluations/getInfoficheevaluationByEmployeId.json?id=' + id).subscribe(
      res => {
        this.Infoficheevaluations = res.data;
       
        this.open=true
        
       // console.log('test',this.Infoficheevaluations)

         
      })
  });
 }

 
 getFormcompetencebyDetailppId(){
  this.route.params.subscribe(params => {
    const id = params['id'];
    this.dataService.get('Formcompetences/getFormcompetencebyDetailppId.json?id=' + id).subscribe(
      res => {
        this.Formcompetences = res.data;
       
        this.open=true
        
        console.log('comp',this.Formcompetences)

         
      })
  });
 }
 



  }
