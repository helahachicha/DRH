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
 public Employes
 public open:boolean=false
 public Formcompetences



  constructor(
    private dataService:DataService,
    private route:ActivatedRoute,
 
  ) { }

  ngOnInit(): void {  
   //this.getDetailByEmpID()
   //this.getFormcompetencebyDetailppId()
   this.getemploaById()
  }
  getemploaById() {
    this.id = this.route.snapshot.params['id'];
    this.dataService.get('Employes/getficheevalByEmp.json?id=' + this.id).subscribe(
      res => {
        this.Employes = res.data;

        console.log('testinggg', this.Employes)
      })
  }
//getDetailByEmpID(){
 // this.route.params.subscribe(params => {
   // const id = params['id'];
   // this.dataService.get('Employes/Employes.json?id=' + id).subscribe(
    //  res => {
       
    //    this.open=true
        
     //   console.log('test',this.Employes)

         
     // })
 // });
 //}

 
 //getFormcompetencebyDetailppId(){
  //this.route.params.subscribe(params => {
   // const id = params['id'];
   // this.dataService.get('Formcompetences/getFormcompetencebyDetailppId.json?id=' + id).subscribe(
    //  res => {
     //   this.Formcompetences = res.data;
       
      ///  this.open=true
        
      //  console.log('comp',this.Formcompetences)

         
      //})
  //});
 //}
 



  }
