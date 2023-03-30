import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/shared/service/data.service';

@Component({
  selector: 'app-detail-test',
  templateUrl: './detail-test.component.html',
  styleUrls: ['./detail-test.component.scss']
})
export class DetailTestComponent implements OnInit {

  id: any;
  public Testtechniques
  public Comptechniques
  public Questions
  public Sousquestions

  public testForm = new FormGroup({
   label: new FormControl('', [Validators.required]), 

  });


  constructor(
    private dataService:DataService,
    private router :Router,
    private route:ActivatedRoute
  ) { }

  ngOnInit(): void {
   this.gettestById();
   // this.getquesById()
   // this.getsouquestyId()
  }
 // gettestById() {
   // this.id=this.route.snapshot.params['id'];
   // this.dataService.get('Comptechniques/getComptechnique.json?id='+this.id).subscribe(
     // res => {
     // this.Comptechniques=res.data;
     // console.log("hello",this.Comptechniques)

    //})
 // }

 // getquesById() {
  //  this.id=this.route.snapshot.params['id'];
   // this.dataService.get('Questions/getQuestion.json?id='+this.id).subscribe(
  //    res => {
   //   this.Questions=res.data;
   //   console.log("hello",this.Questions)

   // })
 // }

  //getsouquestyId() {
  //  this.id=this.route.snapshot.params['id'];
  //  this.dataService.get('Sousquestions/getSousquestion.json?id='+this.id).subscribe(
   //   res => {
   //   this.Sousquestions=res.data;
    //  console.log("hello",this.Sousquestions)
//  })
  //}

  gettestById() {
    this.id=this.route.snapshot.params['id'];
     this.dataService.get('Comptechniques/getComptechByTesttech.json?id='+this.id).subscribe(
       res => {
       this.Testtechniques=res.data;
       console.log("testtt",this.Testtechniques)
 
     })
   }
}
